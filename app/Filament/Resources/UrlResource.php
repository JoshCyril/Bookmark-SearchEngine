<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UrlResource\Pages;
use App\Filament\Resources\UrlResource\RelationManagers;
use App\Models\Collection;
use App\Models\Url;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Tables\Columns\TextColumn;

class UrlResource extends Resource
{
    protected static ?string $model = Url::class;

    protected static ?string $navigationIcon = 'heroicon-o-link';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([Forms\Components\Card::make()
            ->schema([
                Forms\Components\TextInput::make('title')
                ->required()->minLength(4)->maxLength (2048)
                ->reactive()
                ->afterStateUpdated(function(string $operation, $state, Forms\Set $set){
                        if($operation === 'edit'){
                            return;
                        }

                    $set('slug', Str::slug($state));
                }),
                Forms\Components\TextInput::make('url')
                    ->required()
                    ->url()
                    ->suffixIcon('heroicon-m-globe-alt')
                    ->maxLength(255),
                Forms\Components\Textarea::make('body')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('active')
                    ->required(),
            ])->columnSpan(8),

            Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\FileUpload::make('thumbnail'),
                        Forms\Components\Select::make('categories')
                            ->required()
                            ->multiple()
                            ->relationship('categories', 'title'),
                        Select::make('collection_id')
                            ->required()
                            ->label('Collection')
                            ->relationship('collection', 'title'),
                        Select::make('user_id')
                            ->label('Owner')
                            ->relationship('user', 'name')
                            ->default(auth()->id())
                            // ->hidden(true)
                            ->disabled(),
                ])->columnSpan(4)
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                // TextColumn::make('title')
                //     ->description(fn (Url $record): string => $record->body),
                Tables\Columns\TextColumn::make('url')
                    ->searchable(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('collection.title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('user.name')
                //     ->numeric()
                //     ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListUrls::route('/'),
            'create' => Pages\CreateUrl::route('/create'),
            'view' => Pages\ViewUrl::route('/{record}'),
            'edit' => Pages\EditUrl::route('/{record}/edit'),
        ];
    }
}
