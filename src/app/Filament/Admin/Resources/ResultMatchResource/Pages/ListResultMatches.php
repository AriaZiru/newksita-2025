<?php

namespace App\Filament\Admin\Resources\ResultMatchResource\Pages;

use App\Filament\Admin\Resources\ResultMatchResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResultMatches extends ListRecords
{
    protected static string $resource = ResultMatchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
