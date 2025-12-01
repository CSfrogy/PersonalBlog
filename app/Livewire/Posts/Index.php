<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    public $featuredPosts;

    public function mount()
    {
        $this->featuredPosts = Post::with(['author', 'category'])
            ->latest()
            ->take(3)
            ->get();
    }

    public function render()
    {
        return view('livewire.posts.index', [
            'featuredPosts' => $this->featuredPosts,
        ]);
    }
}
