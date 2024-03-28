<?php

namespace App\Filament\Resources\JoinNowResource\Pages;

use App\Filament\Resources\JoinNowResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJoinNows extends ListRecords
{
    protected static string $resource = JoinNowResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
