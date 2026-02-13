<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WhatsappApiTokenResource\Pages;
use App\Models\WhatsappApiToken;
use App\Services\WhatsappService;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class WhatsappApiTokenResource extends Resource
{
    protected static ?string $model = WhatsappApiToken::class;

    protected static ?string $navigationLabel = 'WhatsApp API';

    protected static ?string $modelLabel = 'API Token';

    protected static ?string $pluralModelLabel = 'API Tokens';

    protected static ?int $navigationSort = 10;

    protected static ?string $navigationGroup = 'Pengaturan';

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Dasar')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama Konfigurasi')
                            ->required()
                            ->maxLength(100)
                            ->unique(ignoreRecord: true)
                            ->placeholder('Contoh: Twilio Production, Waboxapp Free, dll')
                            ->helperText('Nama untuk mengidentifikasi konfigurasi ini')
                            ->columnSpanFull(),

                        Forms\Components\Select::make('provider')
                            ->label('Provider')
                            ->options([
                                'twilio' => 'Twilio',
                                'meta' => 'Meta (WhatsApp Business API)',
                                'waboxapp' => 'Waboxapp',
                            ])
                            ->default('waboxapp')
                            ->required()
                            ->live()
                            ->helperText('Pilih provider WhatsApp yang digunakan'),
                    ])->columns(2),

                Forms\Components\Section::make('Kredensial API')
                    ->schema([
                        Forms\Components\TextInput::make('api_key')
                            ->label('API Key')
                            ->visible(fn (Forms\Get $get): bool => in_array($get('provider'), ['meta', 'waboxapp']))
                            ->password()
                            ->revealable()
                            ->maxLength(255)
                            ->placeholder('Your API key')
                            ->helperText('API Key atau Token dari provider WhatsApp')
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('phone_number')
                            ->label('Nomor WhatsApp Pengirim')
                            ->required()
                            ->maxLength(20)
                            ->placeholder('6281234567890')
                            ->helperText('Format: 62xxxxxxxxxx (tanpa + dan 0 di depan)')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Status')
                    ->schema([
                        Forms\Components\Toggle::make('is_active')
                            ->label('Aktif')
                            ->default(true)
                            ->helperText('Aktifkan konfigurasi ini untuk digunakan')
                            ->inline(false),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('provider')
                    ->label('Provider')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'twilio' => 'danger',
                        'meta' => 'info',
                        'waboxapp' => 'success',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'twilio' => 'Twilio',
                        'meta' => 'Meta',
                        'waboxapp' => 'Waboxapp',
                        default => ucfirst($state),
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('phone_number')
                    ->label('Nomor Pengirim')
                    ->searchable()
                    ->copyable()
                    ->formatStateUsing(fn ($state) => $state ? '+' . $state : '-'),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Status')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('gray')
                    ->sortable(),

                Tables\Columns\TextColumn::make('last_tested_at')
                    ->label('Terakhir Test')
                    ->dateTime('d M Y H:i')
                    ->since()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('provider')
                    ->label('Provider')
                    ->options([
                        'twilio' => 'Twilio',
                        'meta' => 'Meta',
                        'waboxapp' => 'Waboxapp',
                    ]),

                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status Aktif')
                    ->placeholder('Semua')
                    ->trueLabel('Aktif')
                    ->falseLabel('Tidak Aktif'),

                Tables\Filters\TernaryFilter::make('last_test_status')
                    ->label('Status Test')
                    ->placeholder('Semua')
                    ->trueLabel('Terhubung')
                    ->falseLabel('Gagal')
                    ->query(function (Builder $query, array $data) {
                        // Filter yang sudah di-test dalam 24 jam terakhir
                        return $query->where('last_tested_at', '>=', now()->subHours(24));
                    }),
            ])
            ->actions([
                Action::make('test_whatsapp')
                    ->label('Test WhatsApp')
                    ->icon('heroicon-o-paper-airplane')
                    ->color('info')
                    ->requiresConfirmation()
                    ->modalHeading('Test Konfigurasi WhatsApp')
                    ->modalDescription('Kirim pesan test untuk memverifikasi konfigurasi WhatsApp berfungsi dengan baik.')
                    ->form([
                        Forms\Components\TextInput::make('test_phone')
                            ->label('Nomor Telepon Test')
                            ->required()
                            ->placeholder('6281234567890')
                            ->helperText('Masukkan nomor WhatsApp untuk menerima pesan test')
                            ->rules('regex:/^62\d{9,12}$/'),
                        Forms\Components\Textarea::make('test_message')
                            ->label('Pesan Test')
                            ->default('Ini adalah pesan test dari sistem. Jika Anda menerima pesan ini, berarti konfigurasi WhatsApp sudah berjalan dengan baik.')
                            ->rows(3)
                            ->required()
                            ->helperText('Pesan yang akan dikirim ke nomor WhatsApp di atas'),
                    ])
                    ->modalSubmitActionLabel('Kirim Test')
                    ->action(function (WhatsappApiToken $record, array $data) {
                        try {
                            $phone = $data['test_phone'];
                            $message = $data['test_message'];

                            // Validate phone number
                            if (!preg_match('/^62\d{9,12}$/', $phone)) {
                                Notification::make()
                                    ->title('Nomor tidak valid!')
                                    ->body('Format nomor harus 62xxxxxxxxxx (12 digit)')
                                    ->danger()
                                    ->send();

                                return;
                            }

                            // Gunakan service untuk kirim pesan
                            $service = new WhatsappService();
                            $result = $service->sendMessage($phone, $message, 'testing');

                            if ($result['success']) {
                                // Update status test sukses
                                $record->update([
                                    'last_tested_at' => now(),
                                    'last_test_status' => true,
                                    'last_test_message' => 'Pesan test berhasil dikirim',
                                ]);

                                Notification::make()
                                    ->title('Test Berhasil!')
                                    ->body("Pesan test berhasil dikirim ke {$phone}")
                                    ->success()
                                    ->send();
                            } else {
                                // Update status test gagal
                                $record->update([
                                    'last_tested_at' => now(),
                                    'last_test_status' => false,
                                    'last_test_message' => $result['message'] ?? 'Gagal mengirim pesan test',
                                ]);

                                Notification::make()
                                    ->title('Test Gagal!')
                                    ->body($result['message'] ?? 'Gagal mengirim pesan test')
                                    ->danger()
                                    ->persistent()
                                    ->send();
                            }
                        } catch (\Exception $e) {
                            Notification::make()
                                ->title('Test Gagal!')
                                ->body($e->getMessage())
                                ->danger()
                                ->persistent()
                                ->send();
                        }
                    }),
            ])
            ->actions([
                Action::make('test_whatsapp')
                    ->label('Test WhatsApp')
                    ->icon('heroicon-o-paper-airplane')
                    ->color('info')
                    ->requiresConfirmation()
                    ->modalHeading('Test Konfigurasi WhatsApp')
                    ->modalDescription('Kirim pesan test untuk memverifikasi konfigurasi WhatsApp berfungsi dengan baik.')
                    ->form([
                        Forms\Components\TextInput::make('test_phone')
                            ->label('Nomor Telepon Test')
                            ->required()
                            ->placeholder('6281234567890')
                            ->helperText('Masukkan nomor WhatsApp untuk menerima pesan test')
                            ->rules(['regex:/^62\d{9,12}$/'])
                            ->validationMessages([
                                'regex' => 'Format nomor harus 62xxxxxxxxxx (12 digit)',
                            ]),

                        Forms\Components\Textarea::make('test_message')
                            ->label('Pesan Test')
                            ->default('Ini adalah pesan test dari sistem. Jika Anda menerima pesan ini, berarti konfigurasi WhatsApp sudah berjalan dengan baik. ✅')
                            ->rows(3)
                            ->required()
                            ->helperText('Pesan yang akan dikirim ke nomor WhatsApp di atas'),
                    ])
                    ->modalSubmitActionLabel('Kirim Test')
                    ->action(function (WhatsappApiToken $record, array $data) {
                        try {
                            $phone = $data['test_phone'];
                            $message = $data['test_message'];

                            // Validate phone number
                            if (!preg_match('/^62\d{9,12}$/', $phone)) {
                                Notification::make()
                                    ->title('Nomor tidak valid!')
                                    ->body('Format nomor harus 62xxxxxxxxxx (12 digit angka)')
                                    ->danger()
                                    ->send();

                                return;
                            }

                            // Gunakan service untuk kirim pesan
                            $service = new WhatsappService();
                            $result = $service->sendMessage($phone, $message, 'testing');

                            if ($result['success']) {
                                // Update status test sukses
                                $record->update([
                                    'last_tested_at' => now(),
                                    'last_test_status' => true,
                                    'last_test_message' => 'Pesan test berhasil dikirim',
                                ]);

                                Notification::make()
                                    ->title('✅ Test Berhasil!')
                                    ->body("Pesan test berhasil dikirim ke {$phone}")
                                    ->success()
                                    ->send();
                            } else {
                                // Update status test gagal
                                $record->update([
                                    'last_tested_at' => now(),
                                    'last_test_status' => false,
                                    'last_test_message' => $result['message'] ?? 'Gagal mengirim pesan',
                                ]);

                                Notification::make()
                                    ->title('❌ Test Gagal!')
                                    ->body($result['message'] ?? 'Gagal mengirim pesan test')
                                    ->danger()
                                    ->persistent()
                                    ->send();
                            }
                        } catch (\Exception $e) {
                            Notification::make()
                                ->title('❌ Error!')
                                ->body($e->getMessage())
                                ->danger()
                                ->persistent()
                                ->send();
                        }
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWhatsappApiTokens::route('/'),
            'create' => Pages\CreateWhatsappApiToken::route('/create'),
            'view' => Pages\ViewWhatsappApiToken::route('/{record}'),
            'edit' => Pages\EditWhatsappApiToken::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('is_active', true)->count() ?: null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'success';
    }
}
