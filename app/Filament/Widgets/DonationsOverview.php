<?php

namespace App\Filament\Widgets;

use App\Models\DonateNow;
use App\Models\Donor;
use App\Models\JoinNow;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DonationsOverview extends BaseWidget
{
    protected function getStats(): array
    {

        $donor =  DonateNow::where('payment_status',true)->get();
        $joined =  JoinNow::get();


        return [
            Stat::make('Donation', "₹".$donor->sum('amount')),
            Stat::make('Donated People',count($donor)),
            Stat::make('Joined', count($joined)),
        ];
    }
}
