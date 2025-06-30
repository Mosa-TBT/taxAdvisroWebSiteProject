<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactDetailsResource\Pages;
use App\Models\ContactDetails;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;




class ContactDetailsResource extends Resource
{
    protected static ?string $model = ContactDetails::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('phone')->label('Phone'),
            TextInput::make('email')->label('Email')->email(),
            TextInput::make('address')->label('Address'),
            TextInput::make('facebook')->label('Facebook URL')->url(),
            TextInput::make('instagram')->label('instagram URL')->url(),
            TextInput::make('whatsapp')->label('Whatsapp Number'),
            TextInput::make('linkedin')->label('LinkedIn URL')->url(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("phone"),
                TextColumn::make("email"),
                TextColumn::make("address"),
                TextColumn::make("facebook"),
                TextColumn::make("instagram"),
                TextColumn::make("whatsapp"),
                TextColumn::make("linkedin"),
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
            'index' => Pages\ListContactDetails::route('/'),
            'create' => Pages\CreateContactDetails::route('/create'),
            'edit' => Pages\EditContactDetails::route('/{record}/edit'),
        ];
    }

    public static function shouldRegisterNavigation(): bool
    {
        return true;
    }
}