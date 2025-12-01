<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function render(): Factory|\Illuminate\Contracts\View\View|View
    {
        $posts = Post::published()
            ->where(function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('body', 'like', '%' . $this->search . '%');
        })
            ->with('user', 'category')
            ->latest('published_at')
            ->paginate(10);
        
        return view('livewire.posts.post-list', [
            'posts' => $posts
        ]);
    }
}
