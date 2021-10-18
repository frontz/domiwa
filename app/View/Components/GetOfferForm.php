<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class GetOfferForm extends Component
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

    public function getForm(Request $request) {
        dump($request->input('market_type'));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.get-offer-form');
    }
}
