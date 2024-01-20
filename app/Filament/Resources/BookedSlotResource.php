<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookedSlotResource\Pages;
use App\Models\BookedSlot;
use App\Models\Movie;
use App\Models\Screen;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BookedSlotResource extends Resource
{
    protected static ?string $model = BookedSlot::class;

    protected static ?string $label = 'Booking';

    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('screen_id')->label(__('Screen'))->options(Screen::all()->pluck('name', 'id'))->required(),
                Select::make('movie_id')->label(__('Movie'))->options(Movie::all()->pluck('name', 'id'))->required(),
                TextInput::make('slot'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('movie.name')->searchable()->sortable(),
                TextColumn::make('screen.name')->searchable()->sortable(),
                TextColumn::make('slot')->searchable()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
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
            'index' => Pages\ListBookedSlots::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
