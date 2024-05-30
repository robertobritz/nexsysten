<?php

namespace App\Filament\Resources\MachineCategoryResource\Pages;

use App\Filament\Resources\MachineCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageMachineCategories extends ManageRecords
{
    protected static string $resource = MachineCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
