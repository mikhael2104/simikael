<?php

namespace App\Filament\Resources\AjuanPklResource\Pages;

use App\Filament\Resources\AjuanPklResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAjuanPkl extends ViewRecord
{
    protected static string $resource = AjuanPklResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
