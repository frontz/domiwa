<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class FlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(Request $request)
    {

        $paginator = $request->input('paginator');
        return view('flats.index', [
            'flats' => Flat::paginate($paginator)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('flats.create-flat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {

        $request->validate([
            'status' => 'required',
            'voivodeship' => 'required|min:10',
            'district' => 'required|min:5',
            'city' => 'required|min:5',
            'commune' => 'required|min:5',
            'street' => 'required|min:5',
            'area' => 'required|numeric|min:0',
            'price' => 'required',
            'rooms_nr' => 'required',
            'title' => 'required|min:10',
            'description' => 'required|min:10',
        ]);

        $flat = new Flat;
        $flat->status = $request->input('status');
        $flat->voivodeship = $request->input('voivodeship');
        $flat->district = $request->input('district');
        $flat->city = $request->input('city');
        $flat->commune = $request->input('commune');
        $flat->street = $request->input('street');
        $flat->area = $request->input('area');
        $flat->price = $request->input('price');
        $flat->rooms_nr = $request->input('rooms_nr');
        $flat->title = $request->input('title');
        $flat->description = $request->input('description');
        $flat->market = $request->input('market');
        $flat->phone_nr = $request->input('phone_nr');
        $flat->floor = $request->input('floor');
        $flat->floor_nr = $request->input('floor_nr');
        $flat->year_build = $request->input('year_build');

        $kitchen_type = $request->input('kitchen_type');
        $flat->kitchen_type = json_encode($kitchen_type);

        $media = $request->input('media');
        $flat->media = json_encode($media);

        $flat->heating = $request->input('heating');
        $flat->parking = $request->input('parking');
        $flat->furniture = $request->input('furniture');
        $flat->lift = $request->input('lift');
        $flat->attic = $request->input('attic');
        $flat->two_levels = $request->input('two_levels');
        $flat->balcony = $request->input('balcony');
        $flat->basement = $request->input('basement');
        $flat->fitted_kitchen = $request->input('fitted_kitchen');
        $flat->condition = $request->input('condition');
        $flat->closed_estate = $request->input('closed_estate');
        $flat->exclusivity = $request->input('exclusivity');
        $flat->without_commission = $request->input('without_commission');
        $flat->broker_email = $request->input('broker_email');
        $flat->broker_phone = $request->input('broker_phone');

        $images = [];
        foreach ($request->file as $key => $file) {
            $fileName = time().'_'.$file->getClientOriginalName();
            $filePath = 'images/flats/' . $fileName;
            $file->storeAs('images/flats', $fileName);
            array_push($images, $filePath);
        }

        $flat->images = json_encode($images);

       $flat->save();

       return redirect(route('flats.create'));

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function show(Flat $flat)
    {
        return view('flats.show', [
            'flat' => $flat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Flat $flat
     * @return View
     */
    public function edit(Flat $flat): View
    {
        return view('flats.edit-flat', [
            'flat' => $flat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Flat $flat
     * @return RedirectResponse
     */
    public function destroy(Flat $flat): RedirectResponse
    {
        try {
            $flat->delete();
            return redirect(route('offers'));
        } catch (Exception $e) {
            return redirect(route('offers'));
        }
    }
}
