<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ThankResource\Pages;
use App\Filament\Resources\ThankResource\RelationManagers;
use App\Models\Thank;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ThankResource extends Resource
{
    protected static ?string $model = Thank::class;

    protected static ?string $navigationIcon = 'heroicon-o-annotation';

    protected static ?string $navigationGroup = 'Data Brides';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\card::make()->schema([
                    Forms\Components\BelongsToSelect::make('wedding_id')->label('Wedding')->relationship('wedding', 'name'),
                    Forms\Components\TextInput::make('note')->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('note'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListThanks::route('/'),
            'create' => Pages\CreateThank::route('/create'),
            'edit' => Pages\EditThank::route('/{record}/edit'),
        ];
    }
}
