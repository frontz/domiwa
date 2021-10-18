<?php

namespace App\Http\Controllers;

use App\Models\House;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Psy\Util\Json;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view ('houses.index', [
            'houses' => House::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('houses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $house = new House($request->all());
        $house->save();
        return redirect(route('houses.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show(House $house)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  House  $house
     * @return View
     */
    public function edit(House $house): View
    {
        return view('houses.edit', [
            'house' => $house
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  House  $house
     * @return RedirectResponse
     */
    public function update(Request $request, House $house): RedirectResponse
    {
        $house->fill($request->all());
        $house->save();
        return redirect(route('houses.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  House  $house
     * @return RedirectResponse
     */
    public function destroy(House $house): RedirectResponse
    {
        $house->delete();
        return redirect(route('houses.index'))->with('success','Oferta usunięta');
    }
}
