<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use League\Flysystem\Exception;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(Request $request)
    {
        $paginator = $request->input('paginator');
        return view('houses.index', [
            'houses' => House::paginate($paginator)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('houses.create-house');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
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
            'utility_rooms_nr' => 'required',
            'title' => 'required|min:10',
            'description' => 'required|min:10',
            'plot_area' => 'required'
        ]);
        $house = new House;
        $house->market = $request->input('market');
        $house->status = $request->input('status');
        $house->voivodeship = $request->input('voivodeship');
        $house->district = $request->input('district');
        $house->city = $request->input('city');
        $house->commune = $request->input('commune');
        $house->street = $request->input('street');
        $house->area = $request->input('area');
        $house->price = $request->input('price');
        $house->rooms_nr = $request->input('rooms_nr');
        $house->utility_rooms_nr = $request->input('utility_rooms_nr');
        $house->title = $request->input('title');
        $house->description = $request->input('description');
        $house->plot_area = $request->input('plot_area');
        $house->building_type = $request->input('building_type');
        $house->floors_nr = $request->input('floors_nr');
        $house->bathrooms_nr = $request->input('bathrooms_nr');
        $house->heating = $request->input('heating');
        $house->driveway = $request->input('driveway');
        $house->balcony = $request->input('balcony');
        $house->water_connection = $request->input('water_connection');
        $house->decorated_garden = $request->input('decorated_garden');
        $house->electricity = $request->input('electricity');
        $house->power = $request->input('power');
        $house->sewers = $request->input('sewers');
        $house->roof_type = $request->input('roof_type');
        $house->condition = $request->input('condition');
        $house->property_type = $request->input('property_type');
        $house->exclusivity = $request->input('exclusivity');
        $house->without_commission = $request->input('without_commission');
        $house->broker_email = $request->input('broker_email');
        $house->broker_phone = $request->input('broker_phone');
        $images = [];
        foreach ($request->file as $key => $file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = 'images/houses/' . $fileName;
            $file->storeAs('images/houses', $fileName);
            array_push($images, $filePath);
        }
        $house->images = json_encode($images);
        try {
            $house->save();
            return redirect(route('houses.index'))->with('success', 'Oferta została utworzona.');
        } catch (Exception $e) {
            return redirect(route('houses.index'))->with('error', 'Coś poszło nie tak.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  House $house
     * @return View
     */
    public function show(House $house)
    {
        return view('houses.show', [
            'house' => $house
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  House $house
     * @return View
     */
    public function edit(House $house)
    {
        return view('houses.edit-house', [
            'house' => $house
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        $house_id = (int)$request->input('id');
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
            'utility_rooms_nr' => 'required',
            'title' => 'required|min:10',
            'description' => 'required|min:10',
            'plot_area' => 'required'
        ]);
        $house = new House;
        $house->market = $request->input('market');
        $house->status = $request->input('status');
        $house->voivodeship = $request->input('voivodeship');
        $house->district = $request->input('district');
        $house->city = $request->input('city');
        $house->commune = $request->input('commune');
        $house->street = $request->input('street');
        $house->area = $request->input('area');
        $house->price = $request->input('price');
        $house->rooms_nr = $request->input('rooms_nr');
        $house->utility_rooms_nr = $request->input('utility_rooms_nr');
        $house->title = $request->input('title');
        $house->description = $request->input('description');
        $house->plot_area = $request->input('plot_area');
        $house->building_type = $request->input('building_type');
        $house->floors_nr = $request->input('floors_nr');
        $house->bathrooms_nr = $request->input('bathrooms_nr');
        $house->heating = $request->input('heating');
        $house->driveway = $request->input('driveway');
        $house->balcony = $request->input('balcony');
        $house->water_connection = $request->input('water_connection');
        $house->decorated_garden = $request->input('decorated_garden');
        $house->electricity = $request->input('electricity');
        $house->power = $request->input('power');
        $house->sewers = $request->input('sewers');
        $house->roof_type = $request->input('roof_type');
        $house->condition = $request->input('condition');
        $house->property_type = $request->input('property_type');
        $house->exclusivity = $request->input('exclusivity');
        $house->without_commission = $request->input('without_commission');
        $house->broker_email = $request->input('broker_email');
        $house->broker_phone = $request->input('broker_phone');
        if ($request->file) {
            $images = [];
            foreach ($request->file as $key => $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = 'images/houses/' . $fileName;
                $file->storeAs('images/houses', $fileName);
                array_push($images, $filePath);
            }
            $house->images = json_encode($images);
        } else {
            $house->images = $request->input('images');
        }
        try {
            DB::table('houses')
                ->where('id', $house_id)
                ->update([
                    'market' => $house->market,
            'status' => $house->status,
            'voivodeship' => $house->voivodeship,
            'district' => $house->district,
            'city' => $house->city,
            'commune' => $house->commune,
            'street' => $house->street,
            'area' => $house->area,
            'price' => $house->price,
            'rooms_nr' => $house->rooms_nr,
            'utility_rooms_nr' => $house->utility_rooms_nr,
            'title' => $house->title,
            'description' => $house->description,
            'plot_area' => $house->plot_area,
            'building_type' => $house->building_type,
            'floors_nr' => $house->floors_nr,
            'bathrooms_nr' => $house->bathrooms_nr,
            'heating' => $house->heating,
            'driveway' => $house->driveway,
            'balcony' => $house->balcony,
            'water_connection' => $house->water_connection,
            'decorated_garden' => $house->decorated_garden,
            'electricity' => $house->electricity,
            'power' => $house->power,
            'sewers' => $house->sewers,
            'roof_type' => $house->roof_type,
            'condition' => $house->condition,
            'property_type' => $house->property_type,
            'exclusivity' => $house->exclusivity,
            'without_commission' => $house->without_commission,
            'broker_email' => $house->broker_email,
            'broker_phone' => $house->broker_phone,
            'images' => $house->images]);
            return redirect(route('houses.index'))->with('success', 'Oferta została uaktualniona.');
        } catch (Exception $e) {
            return redirect(route('houses.index'))->with('error', 'Coś poszło nie tak.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  House $house
     * @return RedirectResponse
     */
    public function destroy(House $house)
    {
        try {
            $house->delete();
            return redirect(route('houses.index'))->with('success', 'Oferta została usunięta.');
        } catch (Exception $e) {
            return redirect(route('houses.index'))->with('error', 'Coś poszło nie tak.');
        }
    }
}
