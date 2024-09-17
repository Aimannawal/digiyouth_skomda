<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
// use Illuminate\Container\Attributes\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                ->relationship('category', 'name')
                ->searchable()
                ->preload()
                ->required(),
                Forms\Components\Select::make('team_id')
                ->relationship('team', 'Text')
                ->searchable()
                ->preload()
                ->required(),
                Forms\Components\TextInput::make('title')
                ->required()
                ->reactive()
                ->afterStateUpdated(function (\Filament\Forms\Set $set, $state){
                    $set('slug', Str::slug($state));
                })
                ->maxLength(255),
            Forms\Components\TextInput::make('slug')
                ->required()
                ->readOnly()
                ->maxLength(255),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                    Forms\Components\FileUpload::make('photo')
                    ->directory('photo_projects')
                    ->image(),
                    Forms\Components\RichEditor::make('url_video')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category.name')
                ->numeric()
                ->sortable(),
                Tables\Columns\TextColumn::make('team.Text')
                ->numeric()
                ->sortable(),
                Tables\Columns\TextColumn::make('title')
                ->label('title')
                ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                ->label('slug')
                ->searchable(),
                Tables\Columns\TextColumn::make('description')
                ->label('description')
                ->searchable(),
                Tables\Columns\ImageColumn::make('photo')
                    ->url(fn ($record) => Storage::url($record->photo_projects)),                
                    Tables\Columns\TextColumn::make('url_video')
                    ->label('url_video')
                    ->searchable(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
