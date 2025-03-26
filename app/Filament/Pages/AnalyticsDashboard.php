<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\NewUsersWidget;
use Filament\Pages\Page;

class AnalyticsDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.analytics-dashboard';

    protected function getColumnSpan(): int|string|array
    {
        return 1;
    }

    protected function getColumns(): int
    {
        return 1;
    }

    protected function getWidgets(): array
    {
        return [
            NewUsersWidget::class,
        ];
    }
}
