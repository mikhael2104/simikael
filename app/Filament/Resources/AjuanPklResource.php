<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\AjuanPkl;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AjuanPklResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AjuanPklResource\RelationManagers;

class AjuanPklResource extends Resource
{
    protected static ?string $model = AjuanPkl::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Kelola Pengajuan';

    protected static ?string $navigationLabel = 'Kelola Data Pengajuan';

    protected static ?int $navigationSort = 3;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_siswa')
                    ->label('Nama Siswa')
                    ->relationship('siswa', 'nama_siswa')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('id_industri')
                    ->label('Industri')
                    ->relationship('industri', 'nama_industri')
                    ->searchable()
                    ->preload()
                    ->required(),

                DatePicker::make('tanggal_mulai'),

                DatePicker::make('tanggal_selesai'),

                DatePicker::make('tanggal_pengajuan'),

                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'disetujui' => 'Disetujui',
                        'ditolak' => 'Ditolak',
                    ])
                    ->default('pending')
                    ->disabled(fn () => auth()->user()->hasRole('siswa'))
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('siswa.nama_siswa')
                    ->label('Nama Siswa')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('industri.nama_industri')
                    ->label('Industri')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('tanggal_selesai')
                    ->date(),
                TextColumn::make('tanggal_selesai')
                    ->date(),
                TextColumn::make('tanggal_pengajuan')
                    ->date(),
                    
                TextColumn::make('status')
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'disetujui' => 'success',
                        'ditolak' => 'danger',
                    })
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAjuanPkls::route('/'),
            'create' => Pages\CreateAjuanPkl::route('/create'),
            'view' => Pages\ViewAjuanPkl::route('/{record}'),
            'edit' => Pages\EditAjuanPkl::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
