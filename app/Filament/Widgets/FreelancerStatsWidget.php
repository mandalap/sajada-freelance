<?php

namespace App\Filament\Widgets;

use App\Models\Freelancer;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class FreelancerStatsWidget extends BaseWidget
{
    protected static ?string $pollingInterval = '15s';

    protected function getStats(): array
    {
        $total = Freelancer::count();
        $lakiLaki = Freelancer::where('gender', 'L')->count();
        $perempuan = Freelancer::where('gender', 'P')->count();
        $bulanIni = Freelancer::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();

        return [
            Stat::make('Total Peserta', number_format($total))
                ->description('Semua peserta yang terdaftar')
                ->descriptionIcon('heroicon-o-users')
                ->color('primary')
                ->chart([7, 12, 10, 14, 15, $total]),

            Stat::make('Laki-laki', number_format($lakiLaki))
                ->description($total > 0 ? round(($lakiLaki / $total) * 100, 1) . '% dari total' : '0%')
                ->descriptionIcon('heroicon-o-user')
                ->color('info'),

            Stat::make('Perempuan', number_format($perempuan))
                ->description($total > 0 ? round(($perempuan / $total) * 100, 1) . '% dari total' : '0%')
                ->descriptionIcon('heroicon-o-user-circle')
                ->color('danger'),

            Stat::make('Pendaftaran Bulan Ini', number_format($bulanIni))
                ->description('Peserta baru bulan ini')
                ->descriptionIcon('heroicon-o-calendar')
                ->color('success'),
        ];
    }
}
