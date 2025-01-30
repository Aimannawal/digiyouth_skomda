<?php

namespace App\Filament\Imports;

use App\Models\User;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class UserImporter extends Importer
{
    protected static ?string $model = User::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('name')
                ->rules(['max:255']),

            ImportColumn::make('email')
                ->rules(rules: ['max:255']),

            ImportColumn::make('password')
                ->rules(['max:255']),

            ImportColumn::make('angkatan')
                ->rules(['max:255']),

            ImportColumn::make('number')
                ->rules(['nullable', 'max:255']),

            ImportColumn::make('profile_picture')
                ->rules(['nullable', 'max:255']),

            ImportColumn::make('role')
                ->rules(['nullable', 'max:255']),
        ];
    }

    public function resolveRecord(): ?User
{
    $user = User::firstOrNew([
        'email' => $this->data['email'],
    ]);

    $user->fill([
        'name' => $this->data['name'] ?? $user->name,
        'password' => bcrypt($this->data['password'] ?? $user->password),
        'angkatan' => $this->data['angkatan'] ?? $user->angkatan,
        'number' => $this->data['number'] ?? $user->number,
        'profile_picture' => $this->data['profile_picture'] ?? $user->profile_picture,
    ]);

    $user->save();

    // Assign role jika ada
    if (!empty($this->data['role'])) {
        $user->syncRoles([$this->data['role']]);
    }

    return $user;
}


    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your user import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
