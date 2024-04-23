<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrideResource\Pages;
use App\Filament\Resources\BrideResource\RelationManagers;
use App\Models\Bride;
use Filament\Forms;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BrideResource extends Resource
{
    protected static ?string $model = Bride::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Data Brides';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    BelongsToSelect::make('wedding_id')->label('Wedding')->relationship('wedding', 'name'),
                    TextInput::make('name')->required(),
                    TextInput::make('child')->name('anak ke')->required(),
                    TextInput::make('name_father')->required(),
                    TextInput::make('name_mother')->required(),
                    TextInput::make('instagram')->required(),
                    BelongsToSelect::make('bank_id')->label('Bank')->relationship('Bank', 'name'),
                    TextInput::make('acc_name')->required()->label('Bank atas nama'),
                    TextInput::make('acc_number')->required()->label('Nomer rekening'),
                    Select::make('gender')->required()
                        ->options([
                            'Male' => 'Male',
                            'Female' => 'Female',
                        ]),
                    FileUpload::make('photo')->required()->image(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('name_father'),
                TextColumn::make('name_mother'),
                TextColumn::make('gender'),
                ImageColumn::make('photo')
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
            'index' => Pages\ListBrides::route('/'),
            'create' => Pages\CreateBride::route('/create'),
            'edit' => Pages\EditBride::route('/{record}/edit'),
        ];
    }
}
