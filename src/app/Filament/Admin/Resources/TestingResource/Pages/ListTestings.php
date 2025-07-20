<?php

namespace App\Filament\Admin\Resources\TestingResource\Pages;

use App\Filament\Admin\Resources\TestingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestings extends ListRecords
{
    protected static string $resource = TestingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
