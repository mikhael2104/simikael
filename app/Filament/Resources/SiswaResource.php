<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Siswa;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SiswaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SiswaResource\RelationManagers;

class SiswaResource extends Resource
{
    protected static ?string $model = Siswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Kelola Data';
    protected static ?string $navigationLabel = 'Kelola Data Siswa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_siswa')
                    ->label('Nama Siswa'),

                TextInput::make('nis')
                    ->label('Nomor Induk Siswa')
                    ->numeric(),

                Select::make('kelas')
                    ->label('Kelas')
                    ->options([
                        10 => '10',
                        11 => '11',
                        12 => '12',
                    ]),

                TextInput::make('jurusan')
                    ->label('Jurusan'),

                Select::make('id_user')
                    ->label('User')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_siswa')
                    ->searchable(),
                TextColumn::make('nis')
                    ->searchable(),
                SelectColumn::make('kelas')
                    ->label('Kelas')
                    ->options([
                        10 => '10',
                        11 => '11',
                        12 => '12',
                    ]),
                TextColumn::make('jurusan')
                    ->searchable(),
                TextColumn::make('id_user')
                    ->searchable(),
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
            'index' => Pages\ListSiswas::route('/'),
            'create' => Pages\CreateSiswa::route('/create'),
            'view' => Pages\ViewSiswa::route('/{record}'),
            'edit' => Pages\EditSiswa::route('/{record}/edit'),
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
