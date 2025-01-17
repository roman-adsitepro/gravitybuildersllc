<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ReviewResource\Pages;
use App\Filament\Admin\Resources\ReviewResource\RelationManagers;
use App\Models\Review;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('status')
                  ->options(Review::statuses())
                  ->required(),
                TextInput::make('name')
                  ->required(),
                TextInput::make('title')
                  ->required(),
                TextInput::make('rate')
                  ->numeric()
                  ->required(),
                MarkdownEditor::make('message')
                  ->columnSpanFull()
                  ->required(),
                SpatieMediaLibraryFileUpload::make('avatar')
                  ->collection('avatar')
                  ->conversion('preview')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
          ->columns([
            TextColumn::make('id')
              ->searchable(),
            TextColumn::make('status')
              ->badge()
              ->color(function ($state) {
                return match ($state) {
                  Review::STATUS_PUBLIC => 'success',
                  Review::STATUS_FEATURED => 'info',
                  default => 'gray',
                };
              })
              ->searchable(),
            TextColumn::make('name')
              ->searchable(),
            TextColumn::make('title')
              ->searchable(),
            TextColumn::make('rate')
              ->numeric()
              ->sortable(),
            TextColumn::make('created_at')
              ->dateTime()
              ->sortable()
              ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('updated_at')
              ->dateTime()
              ->sortable()
              ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('deleted_at')
              ->dateTime()
              ->sortable()
              ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }
}
