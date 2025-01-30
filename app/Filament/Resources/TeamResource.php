<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use App\Models\TeamUser;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PhpParser\Node\Stmt\Label;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'People';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('name')
                    ->label('Team Name')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\Select::make('users')
                    ->multiple()
                    ->relationship('users', 'name', function ($query) {
                        return $query->whereHas('roles', function ($q) {
                            $q->where('name', 'Murid');
                        });
                    })
                    ->Label('Team Members')->preload(),
                // Forms\Components\Toggle::make('role_in_team')
                //     ->label('Role in Team')  // Checkbox for true/false role
                //     ->default(false)  // Set a default value
                //     ->required()->inline(),
            ]);
    }

    public static function table(Table $table): Table
    {
        $user = auth()->user();

        // Query menggunakan model Team
        $query = Team::query();
    
        // Tambahkan kondisi berdasarkan peran user
        if ($user->hasRole('Murid')) {
            $query->whereHas('team_users', function ($subQuery) use ($user) {
                $subQuery->where('user_id', $user->id);
            });
        }

        return $table
            ->query(fn () => $query)
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Team')
                    ->numeric()
                    ->sortable()->searchable(),
                Tables\Columns\TextColumn::make('users.name')
                    ->label('Members')
                    ->formatStateUsing(function ($state, $record) {
                        // $record is the Team instance
                        return $record->users->pluck('name')->join(', '); // List all user names, separated by commas
                    })
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
