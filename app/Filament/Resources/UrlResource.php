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
use Illuminate\Support\Facades\Auth;

class UrlResource extends Resource
{
    protected static ?string $model = Url::class;

    protected static ?string $navigationIcon = 'heroicon-o-link';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        $user = Auth::user();
        return $form
        ->schema([Forms\Components\Card::make()
            ->schema([
                Forms\Components\TextInput::make('url')
                    ->required()
                    ->url()
                    ->suffixIcon('heroicon-m-globe-alt')
                    ->maxLength(255),
            ])->columnSpan(8),

            Forms\Components\Card::make()
                    ->schema([
                        Select::make('collection_id')
                            ->required()
                            ->label('Collection')
                            ->relationship('collection', 'title'),
                        Select::make('user_id')
                            ->label('Owner')
                            ->relationship('user', 'name')
                            ->default($user->id)
                            // ->hidden(true)
                            // ->disabled(),
                ])->columnSpan(4)
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

            Tables\Columns\TextColumn::make('url')
            ->searchable()
            ->sortable()
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
