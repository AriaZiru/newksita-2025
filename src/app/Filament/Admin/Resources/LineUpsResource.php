<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\LineUpsResource\Pages;
use App\Filament\Admin\Resources\LineUpsResource\RelationManagers;
use App\Models\LineUps;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;

class LineUpsResource extends Resource
{
    protected static ?string $model = LineUps::class;
    protected static ?string $pluralLabel = 'Line Up Player';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('match_id')
                    ->label('Match Opponent')
                    ->searchable()
                    ->required(),
                Select::make('player_id')
                    ->relationship('Player', 'name')
                    ->label('Player Name')
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('lineup_role')
                    ->label('Line Up Role')
                    ->required()
                    ->options(['starter'=>'starter', 'substitute'=>'substitute']),
                Forms\Components\TextInput::make('minutes_played')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('goals')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('assists')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\Select::make('card')
                    ->required()
                    ->options(['none'=>'none','yellow'=>'yellow', 'red'=>'red', 'yellow_red'=>'yellow red']),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('match_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('player_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lineup_role'),
                Tables\Columns\TextColumn::make('minutes_played')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('goals')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('assists')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('card'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListLineUps::route('/'),
            'create' => Pages\CreateLineUps::route('/create'),
            'edit' => Pages\EditLineUps::route('/{record}/edit'),
        ];
    }
}
