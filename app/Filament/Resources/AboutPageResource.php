<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutPageResource\Pages;
use App\Filament\Resources\AboutPageResource\RelationManagers;
use App\Models\AboutPageContent;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;


class AboutPageResource extends Resource
{
    protected static ?string $model = AboutPageContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';



    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('type')
                ->options([
                    'block' => 'Block',
                    'list' => 'List',
                ])
                ->label("Type")
                ->required()
                ->reactive(),
    
            TextInput::make('title')
                ->label('Title')
                ->visible(fn ($get) => in_array($get('type'), ['block', 'list'])),
    
            Textarea::make('text_content')
                ->label('Text Content')
                ->rows(4)
                ->visible(fn ($get) => $get('type') === 'block'),
    
            Repeater::make('list_content')
                ->label('List Items')
                ->schema([
                    TextInput::make('item')->label('Bullet Text')->required(),
                ])
                ->minItems(1)
                ->visible(fn ($get) => $get('type') === 'list')
                ->columnSpan('full'),
        ]);
    }
    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('type'),
                TextColumn::make('title'),
                TextColumn::make('text_content')->limit(50),
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
            'index' => Pages\ListAboutPages::route('/'),
            'create' => Pages\CreateAboutPage::route('/create'),
            'edit' => Pages\EditAboutPage::route('/{record}/edit'),
        ];
    }
}
