<?php

namespace App\Filament\Resources\JoinNowResource\Pages;

use App\Filament\Resources\JoinNowResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJoinNow extends EditRecord
{
    protected static string $resource = JoinNowResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
