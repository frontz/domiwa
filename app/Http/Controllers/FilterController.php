<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return View
//     */
    public function filter(Request $request)
    {
        $property_type = $request->input('property_type');
        $market_type = $request->input('market_type');
        $price_from = (int)$request->input('price_from');
        $price_to = (int)$request->input('price_to');
        $area_from = (int)$request->input('area_from');
        $area_to = (int)$request->input('area_to');
        $paginator = (int)$request->input('paginator');
        if ($property_type === 'Mieszkania') {
            $flats = DB::table('flats')
                ->where('market', '=', $market_type)
                ->where('price', '>', $price_from)
                ->where('price', '<', $price_to)
                ->where('area', '>', $area_from)
                ->where('area', '<', $area_to)
                ->paginate($paginator);
            return view('flats.index', [
                'flats' => $flats, 'next_query' => $request->all()
            ]);
        } elseif ($property_type === 'Domy') {
            $houses = DB::table('houses')
                ->where('market', '=', $market_type)
                ->where('price', '>', $price_from)
                ->where('price', '<', $price_to)
                ->where('area', '>', $area_from)
                ->where('area', '<', $area_to)
                ->paginate($paginator);
            return view('houses.index', [
                'houses' => $houses, 'next_query' => $request->all()
            ]);
        } elseif ($property_type === 'Lokale') {
            $premises = DB::table('premises')
                ->where('market', '=', $market_type)
                ->where('price', '>', $price_from)
                ->where('price', '<', $price_to)
                ->where('area', '>', $area_from)
                ->where('area', '<', $area_to)
                ->paginate(3);
            return view('premises.index', [
                'premises' => $premises, 'next_query' => $request->all()
            ]);
        } elseif ($property_type === 'Działki') {
            $plots = DB::table('plots')
                ->where('price', '>', $price_from)
                ->where('price', '<', $price_to)
                ->where('area', '>', $area_from)
                ->where('area', '<', $area_to)
                ->paginate(3);
            return view('plots.index', [
                'plots' => $plots, 'next_query' => $request->all()
            ]);
        } else {
            return view('flats.index', [
                'flats' => Flat::all()
            ]);
        }
    }
}
