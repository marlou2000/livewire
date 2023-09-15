<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; // Import the Session facade

class Login extends Component
{
    public $username;
    public $password;

    protected $rules = [
        'username' => 'required',
        'password' => 'required',
    ];
 
    protected $messages = [
        'username.required' => 'All fields are required',
        'password.required' => 'All fields are required',
    ];

    public function render()
    {
        auth()->logout();
        return view('livewire.login')->layout('layouts.index');
    }

    public function verifyCredential()
    {
        $this->validate();

        $credentials = [
            'username' => $this->username,
            'password' => $this->password,
            'isExist' => 1, 
        ];


        try {
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                session(['user_id' => $user->id]);
                return redirect('/post');
            } 
            
            else {
                session()->flash('error', 'Invalid username or password');
            }
        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred');
        }

    }

}
