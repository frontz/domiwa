<?php

namespace App\View\Components;

use App\Models\Flat;
use Illuminate\Http\Response;
use Illuminate\View\Component;
use Illuminate\View\View;

class AddFlat extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('components.add-flat');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.add-flat');
    }
}
