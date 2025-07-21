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

class LineUpsResource extends Resource
{
    protected static ?string $model = LineUps::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('match_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('player_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('lineup_role')
                    ->required(),
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
                Forms\Components\TextInput::make('card')
                    ->required(),
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
