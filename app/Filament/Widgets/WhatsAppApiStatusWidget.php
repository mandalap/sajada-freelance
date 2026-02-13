<?php

namespace App\Filament\Widgets;

use App\Models\WhatsappApiToken;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class WhatsAppApiStatusWidget extends BaseWidget
{
    protected static ?string $pollingInterval = '30s';

    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        $total = WhatsappApiToken::count();
        $active = WhatsappApiToken::where('is_active', true)->count();
        $connected = WhatsappApiToken::where('last_test_status', true)->count();
        $failed = WhatsappApiToken::where('last_test_status', false)->count();

        return [
            Stat::make('Total Konfigurasi', number_format($total))
                ->description('Semua konfigurasi API')
                ->descriptionIcon('heroicon-o-server')
                ->color('primary'),

            Stat::make('Konfigurasi Aktif', number_format($active))
                ->description($total > 0 ? round(($active / $total) * 100, 1) . '% dari total' : '0%')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('success'),

            Stat::make('Koneksi Berhasil', number_format($connected))
                ->description('API terhubung dan berfungsi')
                ->descriptionIcon('heroicon-o-signal')
                ->color('success'),

            Stat::make('Koneksi Gagal', number_format($failed))
                ->description('Perlu pengecekan ulang')
                ->descriptionIcon('heroicon-o-x-circle')
                ->color($failed > 0 ? 'danger' : 'gray'),
        ];
    }

    protected function getHeader(): string
    {
        return 'Status WhatsApp API';
    }
}
