<?php

namespace App\Filament\Resources\IndustriResource\Pages;

use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\IndustriResource;

class ListIndustris extends ListRecords
{
    protected static string $resource = IndustriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('Download PDF')
                ->label('Download PDF')
                ->url(fn () => route('download-industri-pdf'))
                ->openUrlInNewTab(),
        ];
    }
}
