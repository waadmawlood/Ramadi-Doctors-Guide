<?php

namespace App\Filament\Widgets\Dashboard;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UsersCount extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('User Count', User::count())
                ->description('Total number of Users')
                ->icon('heroicon-s-users'),

            Stat::make('User Active Count', User::where('is_banned', false)->count())
                ->description('Total number of Active Users')
                ->icon('heroicon-s-user-plus')
                ->color('success'),

            Stat::make('User Banned Count', User::where('is_banned', true)->count())
                ->description('Total number of Banned Users')
                ->icon('heroicon-s-user-minus')
                ->color('danger'),
        ];
    }
}
