<?php

namespace App\Filament\Admin\Resources\ResultMatchResource\Pages;

use App\Filament\Admin\Resources\ResultMatchResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResultMatch extends EditRecord
{
    protected static string $resource = ResultMatchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
