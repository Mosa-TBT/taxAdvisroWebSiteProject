<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Hash;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Actions;

class UpdateProfile extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static string $view = 'filament.pages.update-profile';
    protected static ?string $navigationLabel = 'Update Profile';
    protected static ?string $title = 'Edit Email & Password';

    public $email;
    public $password;

    public function mount(): void
    {
        $user = Auth::user();
        $this->form->fill([
            'email' => $user->email,
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('email')
                ->label('Email')
                ->email()
                ->required(),

            TextInput::make('password')
                ->label('New Password')
                ->password()
                ->maxLength(255),
        ];
    }

    public function submit()
    {
        $user = Auth::user();

        $data = $this->form->getState();

        $user->email = $data['email'];

        if (!empty($data['password'])) {
            $user->password = Hash::make($data['password']);
        }

        $user->save();

        Notification::make()
            ->title('Your profile has been updated successfully ✅')
            ->success()
            ->send();
    }

}
