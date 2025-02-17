<?php

namespace App\Filament\Resources\AjuanPklResource\Pages;

use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\AjuanPklResource;

class ListAjuanPkls extends ListRecords
{
    protected static string $resource = AjuanPklResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('Download PDF')
                ->label('Download PDF')
                ->url(fn () => route('download-ajuan-pkl-pdf'))
                ->openUrlInNewTab(),
        ];
    }
}
