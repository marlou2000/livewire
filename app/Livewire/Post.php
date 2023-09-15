<?php

namespace App\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $posts;

    public function mount(){
        $posts = Post::with('user')
        ->where('isExist', 1)
        ->get();
    }

    public function render()
    {
        return view('livewire.post')->layout('layouts.dashboard');
    }
}
