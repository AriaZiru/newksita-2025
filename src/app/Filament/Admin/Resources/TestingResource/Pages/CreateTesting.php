<?php

namespace App\Filament\Admin\Resources\TestingResource\Pages;

use App\Filament\Admin\Resources\TestingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTesting extends CreateRecord
{
    protected static string $resource = TestingResource::class;
}
