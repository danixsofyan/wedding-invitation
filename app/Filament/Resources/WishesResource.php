<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WishesResource\Pages;
use App\Filament\Resources\WishesResource\RelationManagers;
use App\Models\Wishes;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WishesResource extends Resource
{
    protected static ?string $model = Wishes::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-alt-2';

    protected static ?string $navigationGroup = 'Guest';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\card::make()->schema([
                    Forms\Components\TextInput::make('name')->required(),
                    Forms\Components\TextInput::make('comment')->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('wedding.name'),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('comment'),
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
            'index' => Pages\ListWishes::route('/'),
            'create' => Pages\CreateWishes::route('/create'),
            'view' => Pages\ViewWishes::route('/{record}'),
            'edit' => Pages\EditWishes::route('/{record}/edit'),
        ];
    }
}
