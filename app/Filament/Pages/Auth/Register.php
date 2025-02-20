<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Form;
use Spatie\Permission\Models\Role;
use Filament\Forms\Components\Select;
use Filament\Forms\Columns\SelectColumn;
use Filament\Pages\Auth\Register as AuthRegister;
use Illuminate\Database\Eloquent\Model;

class Register extends AuthRegister
{
    public function form(Form $form): Form
    {
        return $form->schema([
            $this->getNameFormComponent(),
            $this->getEmailFormComponent(),
            $this->getPasswordFormComponent(),
            $this->getPasswordConfirmationFormComponent(),

            Select::make('roles')
                    ->label('Level Web')
                    ->options(Role::pluck('name', 'name')->toArray())
        ])
        ->statePath('data');
    }

    public function handleRegistration(array $data): Model
    {
        $user = parent::handleRegistration($data);

        if(isset($data['roles'])) {
            $user->assignRole($data['roles']);
        }

        return $user;
    }
}
