<?php

namespace App\Filament\Resources\SiswaResource\Pages;

use Filament\Actions;
use Filament\Actions\Action;
use App\Filament\Resources\SiswaResource;
use Filament\Resources\Pages\ListRecords;

class ListSiswas extends ListRecords
{
    protected static string $resource = SiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('Download PDF')
                ->label('Download PDF')
                ->url(fn () => route('download-siswa-pdf'))
                ->openUrlInNewTab(),
        ];
    }
}
