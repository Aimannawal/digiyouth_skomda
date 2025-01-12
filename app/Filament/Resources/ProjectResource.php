<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'Source';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('user_id')
                    ->default(Auth()->id())
                    ->required(),
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                    Forms\Components\Select::make('team_id')
                    ->relationship('team', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function (\Filament\Forms\Set $set, $state) {
                        $set('slug', \Illuminate\Support\Str::slug($state));
                    })
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->readOnly()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('photo')
                    ->directory('photo_projects')
                    ->image()
                    ->multiple()
                    ->required()
                    ->dehydrateStateUsing(function ($state) {
                        return $state ? implode(',', $state) : null;
                    }),
                Forms\Components\TextInput::make('url')
                    ->required(),
                Forms\Components\Toggle::make('status')
                    ->label('Accepted/Rejected')
                    ->onColor('success')
                    ->offColor('danger')
                    ->onIcon('heroicon-o-check')
                    ->offIcon('heroicon-o-x-circle')
                    ->inline(false)
                    ->default(false)
                    ->required()
                    ->hidden(true)
                    ->disabled(),
                Forms\Components\Select::make('tools')
                    ->multiple()
                    ->relationship('tools', 'name')
                    ->Label('Tools')->preload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        $user = auth()->user();

            // Add a condition to filter the data based on the user's role
        $query = Project::query();
        if ($user->hasRole('Murid')) {
            // Assuming 'student_id' is the column that links the booking to the student
            $query->where('user_id', $user->id);
        }

        return $table
            ->query(fn () => $query)
            ->columns([
                Tables\Columns\TextColumn::make('team.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('status')
                    ->label('Status')
                    ->sortable()
                    ->searchable()
                    ->visible(fn() => auth()->check() && (auth()->user()->hasRole('super_admin') || auth()->user()->hasRole('Guru'))),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        1 => 'Accepted',
                        0 => 'Rejected',
                    ]),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
