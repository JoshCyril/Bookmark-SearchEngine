<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CollectionResource\Pages;
use App\Filament\Resources\CollectionResource\RelationManagers;
use App\Models\Collection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Illuminate\Support\Facades\Auth;

use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\MarkdownEditor;
use App\Models\User;

class CollectionResource extends Resource
{
    protected static ?string $model = Collection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';

    protected static ?string $navigationGroup = 'Content';

    private function viewAdmin(User $user) : bool{
        return $user->isAdmin();
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', auth()->id());
    }

    // protected function mutateFormDataBeforeCreate(array $data): array
    // {
    //     $data['user_id'] = Auth::user()->id;
    //     @dd($data);
    //     return $data;
    // }

    public static function form(Form $form): Form
    {
        $user = Auth::user();
        return $form
        ->schema([
            Forms\Components\Card::make()
                ->schema([
                    TextInput::make('title')
                        ->required()->minLength(4)->maxLength (2048),
                    // TextInput::make('user_id')
                    //     ->label('user_id')
                    //     ->default($user->id)
                        // ->hidden(true)
                        // ->disabled(),
            ])->columnSpan(12),
            // Forms\Components\Card::make()
            //     ->schema([
            //         Repeater::make('urls')
            //         ->simple(
            //             Select::make('urls')
            //             ->relationship('urls', 'url')
            //         )
            // ])->columnSpan(8),
        ]);


            // Forms\Components\Card::make()
            //     ->schema([
            //             Repeater::make('urls')
            //             ->simple(
            //                 Select::make('collection')
            //                 ->relationship('urls', 'url')
            //                 // ->disabled(),
            //             )
            //     ])->columnSpan(12),
            // ])->columns(12);

            // CreateAction::make()
            //     ->mutateFormDataUsing(function (array $data): array {
            //                 $data['user_id'] = Auth::user()->id;

            //         return $data;
            //     });
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('urls_count')->counts('urls')
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
            'index' => Pages\ListCollections::route('/'),
            'create' => Pages\CreateCollection::route('/create'),
            'view' => Pages\ViewCollection::route('/{record}'),
            'edit' => Pages\EditCollection::route('/{record}/edit'),
        ];
    }
}
