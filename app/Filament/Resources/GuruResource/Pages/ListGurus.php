<?php

namespace App\Filament\Resources\GuruResource\Pages;

use Filament\Actions;
use Filament\Actions\Action;
use App\Filament\Resources\GuruResource;
use Filament\Resources\Pages\ListRecords;

class ListGurus extends ListRecords
{
    protected static string $resource = GuruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('Download PDF')
                ->label('Download PDF')
                ->url(fn () => route('download-guru-pdf'))
                ->openUrlInNewTab(),
        ];
    }
}
