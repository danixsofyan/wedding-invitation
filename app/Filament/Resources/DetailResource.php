<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailResource\Pages;
use App\Filament\Resources\DetailResource\RelationManagers;
use App\Models\Detail;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DetailResource extends Resource
{
    protected static ?string $model = Detail::class;

    protected static ?string $navigationIcon = 'heroicon-o-flag';

    protected static ?string $navigationGroup = 'Data Brides';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\card::make()->schema([
                    Forms\Components\BelongsToSelect::make('wedding_id')->label('Wedding')->relationship('wedding', 'name'),
                    Forms\Components\Select::make('type')->required()
                    ->options([
                        'Akad' => 'Akad',
                        'Resepsi' => 'Resepsi',
                        'Ngunduh Mantu' => 'Ngunduh Mantu',
                    ]),
                    Forms\Components\DateTimePicker::make('date'),
                    Forms\Components\TextInput::make('address')->required(),
                    Forms\Components\TextInput::make('maps')->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('date'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('maps'),
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
            'index' => Pages\ListDetails::route('/'),
            'create' => Pages\CreateDetail::route('/create'),
            'edit' => Pages\EditDetail::route('/{record}/edit'),
        ];
    }
}
