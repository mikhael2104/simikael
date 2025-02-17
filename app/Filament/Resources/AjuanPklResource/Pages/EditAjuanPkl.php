<?php

namespace App\Filament\Resources\AjuanPklResource\Pages;

use App\Filament\Resources\AjuanPklResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAjuanPkl extends EditRecord
{
    protected static string $resource = AjuanPklResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
