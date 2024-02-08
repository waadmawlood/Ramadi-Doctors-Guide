<?php

namespace App\Filament\Resources\ClinicResource\RelationManagers;

use App\Enums\Days;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TimesRelationManager extends RelationManager
{
    protected static string $relationship = 'times';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('day')->formatStateUsing(fn ($state): string => Days::tryFrom($state)->name)->disabled(),
                Forms\Components\TimePicker::make('open'),
                Forms\Components\TimePicker::make('close'),
                Forms\Components\Toggle::make('status')->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('day')
            ->columns([
                Tables\Columns\TextColumn::make('day')->formatStateUsing(fn ($state): string => $state->name),
                Tables\Columns\IconColumn::make('status')->boolean(),
                Tables\Columns\TextColumn::make('open')->time(),
                Tables\Columns\TextColumn::make('close')->time(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                ]),
            ]);
    }
}
