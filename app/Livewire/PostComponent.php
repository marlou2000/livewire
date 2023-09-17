<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Http\Request;

class PostComponent extends Component
{
    public $posts;
    
    public function mount()
    {
        $this->posts = Post::with('user')
            ->where('isExist', 1)
            ->get();
    }

    public function render()
    {
        return view('livewire.post')->layout('layouts.dashboard');
    }
}
