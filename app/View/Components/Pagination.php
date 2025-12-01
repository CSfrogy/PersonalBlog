<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Pagination\LengthAwarePaginator;

class Pagination extends Component
{
    public function __construct(
        public LengthAwarePaginator $paginator
    ) {}

    public function render()
    {
        return view('components.pagination');
    }
}
