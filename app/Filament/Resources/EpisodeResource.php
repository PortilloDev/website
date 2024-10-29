<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EpisodeResource\Pages;
use App\Filament\Resources\EpisodeResource\RelationManagers;
use App\Models\Episode;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TimePicker;
use Str;
use TomatoPHP\FilamentDocs\Filament\Actions\DocumentAction;
class EpisodeResource extends Resource
{
    protected static ?string $model = Episode::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                static::getTitleFormField(),
                static::getUrlFormField(),
                static::getDescriptionFormField(),
                static::getImageFormField(),
                static::getEmbeddedFormField(),
                static::getReleaseDateFormField(),
            ]);
    }

    public static function getTitleFormField(): Forms\Components\TextInput
    {
        return TextInput::make('title')
            ->required()
            ->live()
            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state)));
    }

    public static function getUrlFormField(): Forms\Components\TextInput
    {
        return TextInput::make('url')
            ->live();
    }
    public static function getDescriptionFormField(): DocumentAction
    {
        return DocumentAction::make('description')
            ->vars(fn($record) => [
                DocsVar::make('description')
                    ->value($record->description),
            ]);
    }

    public static function getImageFormField(): Forms\Components\FileUpload
    {
        return FileUpload::make('image')
            ->required();
    }

    public static function getEmbeddedFormField(): Forms\Components\TextInput
    {
        return TextInput::make('embedded');
    }

    public static function getReleaseDateFormField(): Forms\Components\DateTimePicker
    {
        return DateTimePicker::make('release_date')
            ->required();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('url'),
                Tables\Columns\TextColumn::make('image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->slideOver(),
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
            'index' => Pages\ListEpisodes::route('/'),
            'create' => Pages\CreateEpisode::route('/create'),
            'edit' => Pages\EditEpisode::route('/{record}/edit'),
        ];
    }
}
