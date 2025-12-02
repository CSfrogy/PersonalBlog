<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    /**
     * @return \Illuminate\View\View
     */
    public function render()
    {

        /** @var \Illuminate\View\View $view */
        $view = view('livewire.create-post');
        return $view->layout('components.layouts.main');
    }
}
