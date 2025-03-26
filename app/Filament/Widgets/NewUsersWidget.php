<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class NewUsersWidget extends BaseWidget
{
    protected function getColumns(): int
    {
        return 12;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('New Users', random_int(50, 200))
                ->description('Users registered this month')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
        ];
    }
}
