<?php

namespace App\Filament\Resources;

use App\Enums\Roles;
use App\Filament\Resources\ClinicBookingResource\Pages;
use App\Filament\Resources\ClinicBookingResource\RelationManagers;
use App\Models\ClinicBooking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClinicBookingResource extends Resource
{
    protected static ?string $model = ClinicBooking::class;

    protected static ?string $navigationIcon = 'heroicon-s-clock';

    protected static ?int $navigationSort = 5;

    public static function shouldRegisterNavigation(): bool
    {
        return getRole() !== Roles::Admin->name;
    }

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                Forms\Components\Select::make('clinic_id')
                    ->relationship('clinic', 'name')
                    ->inlineLabel()
                    ->disabled(),
                Forms\Components\TextInput::make('name')
                    ->disabled()
                    ->inlineLabel()
                    ->readonly(),
                Forms\Components\TextInput::make('age')
                    ->disabled()
                    ->inlineLabel()
                    ->readonly(),
                Forms\Components\TextInput::make('gender')
                    ->disabled()
                    ->inlineLabel()
                    ->readonly(),
                Forms\Components\TextInput::make('city')
                    ->disabled()
                    ->inlineLabel()
                    ->readonly(),
                Forms\Components\TextInput::make('number')
                    ->disabled()
                    ->inlineLabel()
                    ->readonly(),
                Forms\Components\DatePicker::make('date_str')->label('Select Day')
                    ->inlineLabel(),
                    Forms\Components\TimePicker::make('time_str')->label('Select Time')
                    ->inlineLabel()
                    ->seconds(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('clinic.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('age')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('number')
                    ->searchable(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date_at')
                    ->dateTime()
                    ->sortable(),
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
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListClinicBookings::route('/'),
            // 'create' => Pages\CreateClinicBooking::route('/create'),
            // 'edit' => Pages\EditClinicBooking::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getEloquentQuery(): Builder
    {
        $clinics = auth()->user()->clinics->pluck('id');

        if (blank($clinics)) {
            return parent::getEloquentQuery()->where('id', 0);
        }

        return parent::getEloquentQuery()->whereHas('clinic', fn (Builder $query) => $query->whereIn('clinics.id', $clinics->toArray()));
    }
}
