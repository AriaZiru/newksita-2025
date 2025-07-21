<?php

namespace App\Filament\Admin\Resources\LineUpsResource\Pages;

use App\Filament\Admin\Resources\LineUpsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLineUps extends ListRecords
{
    protected static string $resource = LineUpsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
