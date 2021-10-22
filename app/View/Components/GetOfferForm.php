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
        $market_type = $request->input('market_type');
        $transaction_type = $request->input('transaction_type');
        $property_type = $request->input('property_type');

        if ($transaction_type == 'sale' && $property_type == 'house') {
            return view('components.add-house');
        } elseif ($transaction_type == 'sale' && $property_type == 'flat') {
            return view('components.add-flat');
        } elseif ($market_type == 'primary' && $transaction_type == 'sale' && $property_type == 'premises') {
            return view('components.forms.primary-premises-form');
        } elseif ($market_type == 'secondary' && $transaction_type == 'sale' && $property_type == 'premises') {
            return view('components.forms.secondary-premises-form');
        } elseif ($transaction_type == 'rent' && $property_type == 'house') {
            return view('components.forms.house-rent-form');
        } elseif ($transaction_type == 'rent' && $property_type == 'flat') {
            return view('components.forms.flat-rent-form');
        } elseif ($transaction_type == 'rent' && $property_type == 'premises') {
            return view('components.forms.premises-rent-form');
        } elseif ($transaction_type == 'lease' && $property_type == 'plot') {
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
