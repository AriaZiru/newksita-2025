<?php

namespace App\Filament\Admin\Resources\LineUpsResource\Pages;

use App\Filament\Admin\Resources\LineUpsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLineUps extends EditRecord
{
    protected static string $resource = LineUpsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
