<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GaleryResource\Pages;
use App\Filament\Resources\GaleryResource\RelationManagers;
use App\Models\Galery;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GaleryResource extends Resource
{
    protected static ?string $model = Galery::class;

    protected static ?string $navigationIcon = 'heroicon-s-photo';

    protected static ?string $navigationGroup = 'Data Brides';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('gallery1')->required()->image(),
                FileUpload::make('gallery2')->required()->image(),
                FileUpload::make('gallery3')->required()->image(),
                FileUpload::make('gallery4')->required()->image(),
                FileUpload::make('gallery5')->required()->image(),
                FileUpload::make('gallery6')->required()->image(),
                TextInput::make('video')->helperText('example : https://www.youtube.com/embed/syMFHd5Gxxk'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gallery1'),
                ImageColumn::make('gallery2'),
                ImageColumn::make('gallery3'),
                ImageColumn::make('gallery4'),
                ImageColumn::make('gallery5'),
                ImageColumn::make('gallery6'),
                TextColumn::make('video'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListGaleries::route('/'),
            'create' => Pages\CreateGalery::route('/create'),
            'edit' => Pages\EditGalery::route('/{record}/edit'),
        ];
    }
}
