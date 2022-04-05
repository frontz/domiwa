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
     * @param  Request $request
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
        $flatRent = new FlatRent;
        $flatRent->status = $request->input('status');
        $flatRent->voivodeship = $request->input('voivodeship');
        $flatRent->district = $request->input('district');
        $flatRent->city = $request->input('city');
        $flatRent->commune = $request->input('commune');
        $flatRent->street = $request->input('street');
        $flatRent->area = $request->input('area');
        $flatRent->price = $request->input('price');
        $flatRent->rooms_nr = $request->input('rooms_nr');
        $flatRent->title = $request->input('title');
        $flatRent->description = $request->input('description');
        $flatRent->phones_nr = $request->input('phones_nr');
        $flatRent->floor = $request->input('floor');
        $flatRent->floor_nr = $request->input('floor_nr');
        $flatRent->year_build = $request->input('year_build');
        $kitchen_type = $request->input('kitchen_type');
        $flatRent->kitchen_type = json_encode($kitchen_type);
        $media = $request->input('media');
        $flatRent->media = json_encode($media);
        $flatRent->heating = $request->input('heating');
        $flatRent->parking = $request->input('parking');
        $flatRent->furniture = $request->input('furniture');
        $flatRent->lift = $request->input('lift');
        $flatRent->attic = $request->input('attic');
        $flatRent->two_levels = $request->input('two_levels');
        $flatRent->balcony = $request->input('balcony');
        $flatRent->basement = $request->input('basement');
        $flatRent->fitted_kitchen = $request->input('fitted_kitchen');
        $flatRent->condition = $request->input('condition');
        $flatRent->closed_estate = $request->input('closed_estate');
        $flatRent->broker_email = $request->input('broker_email');
        $flatRent->broker_phone = $request->input('broker_phone');
        $images = [];
        foreach ($request->file as $key => $file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = 'images/flats_rent/' . $fileName;
            $file->storeAs('images/flats_rent', $fileName);
            array_push($images, $filePath);
        }
        $flatRent->images = json_encode($images);

            dump('Function good!');
            $flatRent->save();
            return redirect(route('offers'))->with('success', 'Oferta została utworzona.');

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
    public function update(Request $request)
    {

        $flatRent_id = (int)$request->input('id');
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

        $flatRent = new FlatRent;
        $flatRent->status = $request->input('status');
        $flatRent->voivodeship = $request->input('voivodeship');
        $flatRent->district = $request->input('district');
        $flatRent->city = $request->input('city');
        $flatRent->commune = $request->input('commune');
        $flatRent->street = $request->input('street');
        $flatRent->area = $request->input('area');
        $flatRent->price = $request->input('price');
        $flatRent->rooms_nr = $request->input('rooms_nr');
        $flatRent->title = $request->input('title');
        $flatRent->description = $request->input('description');
        $flatRent->phones_nr = $request->input('phones_nr');
        $flatRent->floor = $request->input('floor');
        $flatRent->floor_nr = $request->input('floor_nr');
        $flatRent->year_build = $request->input('year_build');
        $kitchen_type = $request->input('kitchen_type');
        $flatRent->kitchen_type = json_encode($kitchen_type);
        $media = $request->input('media');
        $flatRent->media = json_encode($media);
        $flatRent->heating = $request->input('heating');
        $flatRent->parking = $request->input('parking');
        $flatRent->furniture = $request->input('furniture');
        $flatRent->lift = $request->input('lift');
        $flatRent->attic = $request->input('attic');
        $flatRent->two_levels = $request->input('two_levels');
        $flatRent->balcony = $request->input('balcony');
        $flatRent->basement = $request->input('basement');
        $flatRent->fitted_kitchen = $request->input('fitted_kitchen');
        $flatRent->condition = $request->input('condition');
        $flatRent->closed_estate = $request->input('closed_estate');
        $flatRent->broker_email = $request->input('broker_email');
        $flatRent->broker_phone = $request->input('broker_phone');
        if ($request->file) {
            $images = [];
            foreach ($request->file as $key => $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = 'images/flats/' . $fileName;
                $file->storeAs('images/flats', $fileName);
                array_push($images, $filePath);
            }
            $flatRent->images = json_encode($images);
        } else {
            $flatRent->images = $request->input('images');
        }
        try {
            DB::table('flat_rents')
                ->where('id', $flatRent_id)
                ->update(['title' => $flatRent->title,
                    'status' => $flatRent->status,
                    'voivodeship' => $flatRent->voivodeship,
                    'district' => $flatRent->district,
                    'city' => $flatRent->city,
                    'commune' => $flatRent->commune,
                    'street' => $flatRent->street,
                    'area' => $flatRent->area,
                    'price' => $flatRent->price,
                    'rooms_nr' => $flatRent->rooms_nr,
                    'description' => $flatRent->description,
                    'phones_nr' => $flatRent->phones_nr,
                    'floor' => $flatRent->floor,
                    'floor_nr' => $flatRent->floor_nr,
                    'year_build' => $flatRent->year_build,
                    'kitchen_type' => $flatRent->kitchen_type,
                    'media' => $flatRent->media,
                    'heating' => $flatRent->heating,
                    'parking' => $flatRent->parking,
                    'furniture' => $flatRent->furniture,
                    'lift' => $flatRent->lift,
                    'attic' => $flatRent->attic,
                    'two_levels' => $flatRent->two_levels,
                    'balcony' => $flatRent->balcony,
                    'basement' => $flatRent->basement,
                    'fitted_kitchen' => $flatRent->fitted_kitchen,
                    'condition' => $flatRent->condition,
                    'closed_estate' => $flatRent->closed_estate,
                    'broker_email' => $flatRent->broker_email,
                    'broker_phone' => $flatRent->broker_phone,
                    'images' => $flatRent->images]);
            return redirect(route('offers'))->with('success', 'Oferta została uaktualniona.');
        } catch (Exception $e) {
            return redirect(route('offers'))->with('error', 'Coś poszło nie tak.');
        }
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
