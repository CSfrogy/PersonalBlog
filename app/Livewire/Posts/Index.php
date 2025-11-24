<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    public $featuredPosts;

    public function mount()
    {
        // Get the last 3 posts for featured section
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