<?php

namespace App\Http\Controllers;

use App\Models\FlatRent;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FlatRentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(Request $request)
    {
        $data = $request->all();
        $paginator = $request->input('paginator');
        $flats_rent = FlatRent::paginate($paginator);
        return view('flats.index', [
            'flats_rent' => $flats_rent, 'next_query' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('flats.create-flat-rent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  FlatRent $flatRent
     * @return View
     */
    public function show(FlatRent $flatRent)
    {
        return view('flats.show-rent', [
            'flat' => $flatRent
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  FlatRent $flatRent
     * @return View
     */
    public function edit(FlatRent $flatRent)
    {
        return view('flats.edit-flat-rent', [
            'flatRent' => $flatRent
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  FlatRent $flatRent
     * @return RedirectResponse
     */
    public function destroy(FlatRent $flatRent)
    {
        try {
            $flatRent->delete();
            return redirect(route('offers'))->with('success', 'Oferta została usunięta.');
        } catch (Exception $e) {
            return redirect(route('offers'))->with('error', 'Coś poszło nie tak.');
        }
    }
}
