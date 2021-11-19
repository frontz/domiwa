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
        $market = $request->input('market');
        $transaction = $request->input('transaction');
        $property = $request->input('property');

        if ($transaction == 'sale' && $property == 'house') {
            return view('components.add-house');
        } elseif ($transaction == 'sale' && $property == 'flat') {
            return view('flats.create-flat', ['market' => $market]);
        } elseif ($transaction == 'sale' && $property == 'premises') {
            return view('components.forms.primary-premises-form');
        } elseif ($market == 'secondary' && $transaction == 'sale' && $property == 'premises') {
            return view('components.forms.secondary-premises-form');
        } elseif ($transaction == 'rent' && $property == 'house') {
            return view('components.forms.house-rent-form');
        } elseif ($transaction == 'rent' && $property == 'flat') {
            return view('components.forms.flat-rent-form');
        } elseif ($transaction == 'rent' && $property == 'premises') {
            return view('components.forms.premises-rent-form');
        } elseif ($transaction == 'lease' && $property == 'plot') {
            return view('components.forms.plot-lease-form');
        } else {
            return view('components.forms.no-form');
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.get-offer-form');
    }
}
