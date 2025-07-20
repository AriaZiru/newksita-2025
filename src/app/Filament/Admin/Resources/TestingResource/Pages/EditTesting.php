<?php

namespace App\Filament\Admin\Resources\TestingResource\Pages;

use App\Filament\Admin\Resources\TestingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTesting extends EditRecord
{
    protected static string $resource = TestingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
