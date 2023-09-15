<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\User;

class Register extends Component
{
    public $username;
    public $password;
    public $password_confirmation;
    public $role;

    protected $rules = [
        'username' => 'required|string|min:6',
        'password_confirmation' => 'required',
        'password' => 'required|string|min:6|confirmed',
    ];
 
    protected $messages = [
        'username.required' => 'All fields are required',
        'password.required' => 'All fields are required',
        'password_confirmation.required' => 'All fields are required',
        'username.min' => 'Username too short.',
        'password.min' => 'Password too short.',
        'password.confirmed' => 'Password did not matched',
    ];
    
    public function registerUser(){   
        
        $this->validate();

        $credentials = [
            'username' => $this->username,
            'password' => $this->password,
            'role' => $this->role,
            'isExist' => 1, 
        ];

        try {
            $existingUser = User::where('username', $credentials['username'])->first();

            if ($existingUser) {
                session()->flash('error', 'Username already exis');
            }

            $user = new User();
            $user->username = $credentials['username'];
            $user->password = bcrypt($credentials['password']);
            $user->role = $this->role;
            $user->isExist = 1;
            $user->save();

            session()->flash('success', 'Registered Successfully');

            return redirect('/login');

        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred');
        }
    }

    public function render()
    {
        auth()->logout();
        return view('livewire.register')->layout('layouts.index');
    }
}
