<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PostResource\Pages;
use App\Filament\Admin\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
  protected static ?string $model = Post::class;

  protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Toggle::make('featured')
          ->required(),
        TextInput::make('status')
          ->required(),
        TextInput::make('user_id')
          ->required()
          ->numeric(),
        TextInput::make('title')
          ->required(),
        TextInput::make('slug')
          ->required(),
        Textarea::make('description')
          ->columnSpanFull(),
        MarkdownEditor::make('text')
          ->columnSpanFull(),
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        TextColumn::make('id')
          ->searchable(),
        IconColumn::make('featured')
          ->trueIcon('heroicon-o-check-circle')
          ->falseIcon('heroicon-o-x-circle')
          ->falseColor('gray')
          ->boolean(),
        TextColumn::make('status')
          ->badge()
          ->color(fn($state) => $state === Post::STATUS_PUBLIC ? 'success' : 'gray')
          ->searchable(),
        TextColumn::make('user_id')
          ->numeric()
          ->sortable(),
        TextColumn::make('title')
          ->searchable(),
        TextColumn::make('slug')
          ->searchable(),
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
      'index' => Pages\ListPosts::route('/'),
      'create' => Pages\CreatePost::route('/create'),
      'edit' => Pages\EditPost::route('/{record}/edit'),
    ];
  }
}
