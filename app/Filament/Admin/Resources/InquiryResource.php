<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\InquiryResource\Pages;
use App\Filament\Admin\Resources\InquiryResource\RelationManagers;
use App\Models\Inquiry;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InquiryResource extends Resource
{
  protected static ?string $model = Inquiry::class;

  protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Select::make('status')
          ->options(function($record) {
            $record->markAsViewed();
            return Inquiry::statuses();
          })
          ->required(),
        TextInput::make('email')
          ->email()
          ->required(),
        TextInput::make('first_name')
          ->required(),
        TextInput::make('last_name')
          ->required(),
        TextInput::make('phone')
          ->tel()
          ->required(),
        MarkdownEditor::make('message')
          ->columnSpanFull()
          ->required(),
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
              Inquiry::STATUS_NEW => 'info',
              default => 'gray',
            };
          })
          ->searchable(),
        TextColumn::make('first_name')
          ->limit(15)
          ->searchable(),
        TextColumn::make('last_name')
          ->limit(15)
          ->searchable(),
        TextColumn::make('email')
          ->limit(15)
          ->searchable(),
        TextColumn::make('phone')
          ->limit(15)
          ->searchable(),
        TextColumn::make('message')
          ->limit(15)
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
      ->recordUrl(fn($record) => route('filament.admin.resources.inquiries.view', $record))
      ->actions([
        Tables\Actions\ViewAction::make(),
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
      'index' => Pages\ListInquiries::route('/'),
      'create' => Pages\CreateInquiry::route('/create'),
      'edit' => Pages\EditInquiry::route('/{record}/edit'),
      'view' => Pages\ViewInquiry::route('/{record}/view'),
    ];
  }

}
