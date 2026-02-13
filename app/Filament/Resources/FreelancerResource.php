<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FreelancerResource\Pages;
use App\Filament\Resources\FreelancerResource\RelationManagers;
use App\Models\Freelancer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FreelancerResource extends Resource
{
    protected static ?string $model = Freelancer::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Data Freelancer';
    protected static ?string $modelLabel = 'Freelancer';
    protected static ?string $pluralModelLabel = 'Freelancer';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Pribadi')
                    ->schema([
                        Forms\Components\Select::make('sapaan')
                            ->options([
                                'Pak' => 'Pak',
                                'Bu' => 'Bu',
                                'Bang' => 'Bang',
                                'Kak' => 'Kak',
                            ])
                            ->required()
                            ->default('Pak'),
                        Forms\Components\TextInput::make('nama')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('telepon')
                            ->tel()
                            ->required()
                            ->maxLength(20),
                        Forms\Components\Select::make('gender')
                            ->options([
                                'L' => 'Laki-laki',
                                'P' => 'Perempuan',
                            ])
                            ->required()
                            ->default('L'),
                        Forms\Components\TextInput::make('usia')
                            ->required()
                            ->numeric()
                            ->min(17)
                            ->max(100)
                            ->suffix('tahun'),
                        Forms\Components\TextInput::make('domisili')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('pekerjaan')
                            ->required()
                            ->maxLength(255),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_lengkap')
                    ->label('Nama')
                    ->searchable(['nama', 'sapaan'])
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('gender')
                    ->label('Gender')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'L' => 'info',
                        'P' => 'danger',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    }),
                Tables\Columns\TextColumn::make('usia')
                    ->label('Usia')
                    ->numeric()
                    ->sortable()
                    ->suffix(' thn'),
                Tables\Columns\TextColumn::make('domisili')
                    ->searchable()
                    ->icon('heroicon-o-map-pin'),
                Tables\Columns\TextColumn::make('telepon')
                    ->label('WhatsApp')
                    ->searchable()
                    ->icon('heroicon-o-device-phone-mobile')
                    ->copyable()
                    ->copyMessage('Nomor telepon disalin!')
                    ->badge()
                    ->color('success')
                    ->formatStateUsing(fn (string $state): string => self::formatPhoneNumberDisplay($state)),
                Tables\Columns\TextColumn::make('pekerjaan')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Terdaftar')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->since(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('gender')
                    ->label('Gender')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ]),
                Tables\Filters\Filter::make('usia')
                    ->form([
                        Forms\Components\TextInput::make('min_usia')
                            ->numeric()
                            ->suffix('tahun'),
                        Forms\Components\TextInput::make('max_usia')
                            ->numeric()
                            ->suffix('tahun'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['min_usia'],
                                fn (Builder $query, $age): Builder => $query->where('usia', '>=', $age),
                            )
                            ->when(
                                $data['max_usia'],
                                fn (Builder $query, $age): Builder => $query->where('usia', '<=', $age),
                            );
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->paginated([10, 25, 50, 100])
            ->poll('30s');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFreelancers::route('/'),
            'create' => Pages\CreateFreelancer::route('/create'),
            'edit' => Pages\EditFreelancer::route('/{record}/edit'),
        ];
    }

    /**
     * Format nomor telepon untuk display
     */
    private static function formatPhoneNumberDisplay(string $phone): string
    {
        // Hapus semua karakter kecuali angka
        $phone = preg_replace('/[^0-9]/', '', $phone);

        // Format: 0812-3456-7890
        if (strlen($phone) >= 10) {
            return substr($phone, 0, 4) . '-' . substr($phone, 4, 4) . '-' . substr($phone, 8);
        }

        return $phone;
    }
}
