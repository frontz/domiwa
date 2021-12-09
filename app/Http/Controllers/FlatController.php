<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
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
        $data = $request->all();
        $paginator = $request->input('paginator');
        $flats = Flat::paginate($paginator);
        return view('flats.index', [
            'flats' => $flats, 'next_query' => $data
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
        $flat->phones_nr = $request->input('phones_nr');
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
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = 'images/flats/' . $fileName;
            $file->storeAs('images/flats', $fileName);
            array_push($images, $filePath);
        }
        $flat->images = json_encode($images);
        try {
            $flat->save();
            return redirect(route('offers'))->with('success', 'Oferta została utworzona.');
        } catch (Exception $e) {
            return redirect(route('offers'))->with('error', 'Coś poszło nie tak.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Flat $flat
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
     * @return RedirectResponse
     */
    public function update(Request $request, Flat $flat)
    {
        $flat_id = (int)$request->input('id');
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
        $flat->phones_nr = $request->input('phones_nr');
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
        if ($request->file) {
            $images = [];
            foreach ($request->file as $key => $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = 'images/flats/' . $fileName;
                $file->storeAs('images/flats', $fileName);
                array_push($images, $filePath);
            }
            $flat->images = json_encode($images);
        } else {
            $flat->images = $request->input('images');
        }
        try {
            DB::table('flats')
                ->where('id', $flat_id)
                ->update(['title' => $flat->title,
                    'status' => $flat->status,
                    'voivodeship' => $flat->voivodeship,
                    'district' => $flat->district,
                    'city' => $flat->city,
                    'commune' => $flat->commune,
                    'street' => $flat->street,
                    'area' => $flat->area,
                    'price' => $flat->price,
                    'rooms_nr' => $flat->rooms_nr,
                    'market' => $flat->market,
                    'description' => $flat->description,
                    'phones_nr' => $flat->phones_nr,
                    'floor' => $flat->floor,
                    'floor_nr' => $flat->floor_nr,
                    'year_build' => $flat->year_build,
                    'kitchen_type' => $flat->kitchen_type,
                    'media' => $flat->media,
                    'heating' => $flat->heating,
                    'parking' => $flat->parking,
                    'furniture' => $flat->furniture,
                    'lift' => $flat->lift,
                    'attic' => $flat->attic,
                    'two_levels' => $flat->two_levels,
                    'balcony' => $flat->balcony,
                    'basement' => $flat->basement,
                    'fitted_kitchen' => $flat->fitted_kitchen,
                    'condition' => $flat->condition,
                    'closed_estate' => $flat->closed_estate,
                    'exclusivity' => $flat->exclusivity,
                    'without_commission' => $flat->without_commission,
                    'broker_email' => $flat->broker_email,
                    'broker_phone' => $flat->broker_phone,
                    'images' => $flat->images]);
            return redirect(route('offers'))->with('success', 'Oferta została uaktualniona.');
        } catch (Exception $e) {
            return redirect(route('offers'))->with('error', 'Coś poszło nie tak.');
        }
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
            return redirect(route('offers'))->with('success', 'Oferta została usunięta.');
        } catch (Exception $e) {
            return redirect(route('offers'))->with('error', 'Coś poszło nie tak.');
        }
    }
}
