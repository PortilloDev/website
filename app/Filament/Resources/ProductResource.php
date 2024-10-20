<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                static::getTitleFormField(),
                static::getDescriptionFormField(),
                static::getProductTypeFormField(),
                static::getUrlFormField(),
                static::getImageFormField(),
                static::getPriceFormField(),
                static::getTypeFormField(),
            ]);
    }

    public static function getTitleFormField(): Forms\Components\TextInput
    {
        return TextInput::make('title')
            ->required();
    }

    public static function getUrlFormField(): Forms\Components\TextInput
    {
        return TextInput::make('url');
    }

    public static function getProductTypeFormField(): Forms\Components\Select
    {
        return Select::make('product_type_id')
        ->relationship(name: 'productType', titleAttribute: 'id');
    }
    public static function getTypeFormField(): Forms\Components\Select
    {
        return Select::make('type')
        ->options([
            'free' => 'Free',
            'payment' => 'Payment',
        ])
        ->required();
    }
    public static function getDescriptionFormField(): Forms\Components\TextInput
    {
        return TextInput::make('description')
            ->required()
            ->live();
    }

    public static function getImageFormField(): Forms\Components\FileUpload
    {
        return FileUpload::make('image')
            ->required();
    }

    public static function getPriceFormField(): Forms\Components\TextInput
    {
        return TextInput::make('price')
            ->required();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('price')
                ->money('EUR')
                ->sortable(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
