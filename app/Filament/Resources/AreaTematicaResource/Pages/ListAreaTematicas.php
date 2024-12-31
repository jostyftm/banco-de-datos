<?php

namespace App\Filament\Resources\AreaTematicaResource\Pages;

use App\Filament\Resources\AreaTematicaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAreaTematicas extends ListRecords
{
    protected static string $resource = AreaTematicaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
