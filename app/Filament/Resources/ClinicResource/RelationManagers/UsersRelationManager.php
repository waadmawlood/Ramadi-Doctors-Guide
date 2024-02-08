<?php

namespace App\Filament\Resources\ClinicResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UsersRelationManager extends RelationManager
{
    protected static string $relationship = 'users';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('notes'),
                Tables\Columns\TextColumn::make('pivot.role')->label('Role in Clinic'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()->preloadRecordSelect()->form(function ($action) {
                    return [
                        $action->getRecordSelect(),
                        Forms\Components\Select::make('role')
                            ->required()
                            ->options([
                                'Doctor' => 'Doctor',
                                'Secretary' => 'Secretary',
                            ])
                            ->default('Doctor'),

                            Forms\Components\Textarea::make('notes')
                            ->nullable(),

                            Forms\Components\TextInput::make('added_by_id')
                                ->default(auth()->id())
                                ->hidden(),
                    ];
                }),
            ])
            ->actions([
                Tables\Actions\DetachAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DetachBulkAction::make(),
                ]),
            ]);
    }
}
