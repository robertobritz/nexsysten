<?php

namespace App\Filament\Resources\UserMachineResource\Pages;

use App\Filament\Resources\UserMachineResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageUserMachines extends ManageRecords
{
    protected static string $resource = UserMachineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
