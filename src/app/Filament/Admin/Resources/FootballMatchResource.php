<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\FootballMatchResource\Pages;
use App\Filament\Admin\Resources\FootballMatchResource\RelationManagers;
use App\Models\FootballMatch;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FootballMatchResource extends Resource
{
    protected static ?string $model = FootballMatch::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('opponent')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('match_date')
                    ->required(),
                Forms\Components\TextInput::make('competition')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('stadium_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('home_score')
                    ->label('Score Real Madrid')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('away_score')
                    ->label('Score Opponent')
                    ->numeric()
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('opponent')
                    ->searchable(),
                Tables\Columns\TextColumn::make('match_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('competition')
                    ->searchable(),
                Tables\Columns\TextColumn::make('stadium_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('formatted_score')
                    ->label('Score')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListFootballMatches::route('/'),
            'create' => Pages\CreateFootballMatch::route('/create'),
            'edit' => Pages\EditFootballMatch::route('/{record}/edit'),
        ];
    }
}
