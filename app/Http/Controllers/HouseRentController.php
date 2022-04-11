<?php

namespace App\Http\Controllers;

use App\Models\HouseRent;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HouseRentController extends Controller
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
        $housesRent = HouseRent::paginate($paginator);
        return view('houses.index-rent', [
            'housesRent' => $housesRent, 'next_query' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('houses.create-house-rent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
        $houseRentRent = new HouseRent;
        $houseRentRent->status = $request->input('status');
        $houseRentRent->voivodeship = $request->input('voivodeship');
        $houseRentRent->district = $request->input('district');
        $houseRentRent->city = $request->input('city');
        $houseRentRent->commune = $request->input('commune');
        $houseRentRent->street = $request->input('street');
        $houseRentRent->area = $request->input('area');
        $houseRentRent->price = $request->input('price');
        $houseRentRent->rooms_nr = $request->input('rooms_nr');
        $houseRentRent->utility_rooms_nr = $request->input('utility_rooms_nr');
        $houseRentRent->title = $request->input('title');
        $houseRentRent->description = $request->input('description');
        $houseRentRent->plot_area = $request->input('plot_area');
        $houseRentRent->building_type = $request->input('building_type');
        $houseRentRent->floors_nr = $request->input('floors_nr');
        $houseRentRent->bathrooms_nr = $request->input('bathrooms_nr');
        $houseRentRent->heating = $request->input('heating');
        $houseRentRent->driveway = $request->input('driveway');
        $houseRentRent->balcony = $request->input('balcony');
        $houseRentRent->water_connection = $request->input('water_connection');
        $houseRentRent->decorated_garden = $request->input('decorated_garden');
        $houseRentRent->electricity = $request->input('electricity');
        $houseRentRent->power = $request->input('power');
        $houseRentRent->sewers = $request->input('sewers');
        $houseRentRent->roof_type = $request->input('roof_type');
        $houseRentRent->condition = $request->input('condition');
        $houseRentRent->broker_email = $request->input('broker_email');
        $houseRentRent->broker_phone = $request->input('broker_phone');
        $images = [];
        foreach ($request->file as $key => $file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = 'images/houses_rent/' . $fileName;
            $file->storeAs('images/houses_rent', $fileName);
            array_push($images, $filePath);
        }
        $houseRentRent->images = json_encode($images);
        try {
            $houseRentRent->save();
            return redirect(route('offers'))->with('success', 'Oferta została utworzona.');
        } catch (Exception $e) {
            return redirect(route('offers'))->with('error', 'Coś poszło nie tak.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  HouseRent $houseRentRent
     * @return View
     */
    public function show(HouseRent $houseRentRent)
    {
        return view('houses.show-rent', [
            'houseRent' => $houseRentRent
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  HouseRent $houseRent
     * @return View
     */
    public function edit(HouseRent $houseRent)
    {
        return view('houses.edit-house-rent', [
            'houseRent' => $houseRent
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        $houseRent_id = (int)$request->input('id');
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
        $houseRent = new HouseRent;
        $houseRent->status = $request->input('status');
        $houseRent->voivodeship = $request->input('voivodeship');
        $houseRent->district = $request->input('district');
        $houseRent->city = $request->input('city');
        $houseRent->commune = $request->input('commune');
        $houseRent->street = $request->input('street');
        $houseRent->area = $request->input('area');
        $houseRent->price = $request->input('price');
        $houseRent->rooms_nr = $request->input('rooms_nr');
        $houseRent->utility_rooms_nr = $request->input('utility_rooms_nr');
        $houseRent->title = $request->input('title');
        $houseRent->description = $request->input('description');
        $houseRent->plot_area = $request->input('plot_area');
        $houseRent->building_type = $request->input('building_type');
        $houseRent->floors_nr = $request->input('floors_nr');
        $houseRent->bathrooms_nr = $request->input('bathrooms_nr');
        $houseRent->heating = $request->input('heating');
        $houseRent->driveway = $request->input('driveway');
        $houseRent->balcony = $request->input('balcony');
        $houseRent->water_connection = $request->input('water_connection');
        $houseRent->decorated_garden = $request->input('decorated_garden');
        $houseRent->electricity = $request->input('electricity');
        $houseRent->power = $request->input('power');
        $houseRent->sewers = $request->input('sewers');
        $houseRent->roof_type = $request->input('roof_type');
        $houseRent->condition = $request->input('condition');
        $houseRent->broker_email = $request->input('broker_email');
        $houseRent->broker_phone = $request->input('broker_phone');
        if ($request->file) {
            $images = [];
            foreach ($request->file as $key => $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = 'images/houses_rent/' . $fileName;
                $file->storeAs('images/houses_rent', $fileName);
                array_push($images, $filePath);
            }
            $houseRent->images = json_encode($images);
        } else {
            $houseRent->images = $request->input('images');
        }
        try {
            DB::table('house_rents')
                ->where('id', $houseRent_id)
                ->update([
                    'status' => $houseRent->status,
                    'voivodeship' => $houseRent->voivodeship,
                    'district' => $houseRent->district,
                    'city' => $houseRent->city,
                    'commune' => $houseRent->commune,
                    'street' => $houseRent->street,
                    'area' => $houseRent->area,
                    'price' => $houseRent->price,
                    'rooms_nr' => $houseRent->rooms_nr,
                    'utility_rooms_nr' => $houseRent->utility_rooms_nr,
                    'title' => $houseRent->title,
                    'description' => $houseRent->description,
                    'plot_area' => $houseRent->plot_area,
                    'building_type' => $houseRent->building_type,
                    'floors_nr' => $houseRent->floors_nr,
                    'bathrooms_nr' => $houseRent->bathrooms_nr,
                    'heating' => $houseRent->heating,
                    'driveway' => $houseRent->driveway,
                    'balcony' => $houseRent->balcony,
                    'water_connection' => $houseRent->water_connection,
                    'decorated_garden' => $houseRent->decorated_garden,
                    'electricity' => $houseRent->electricity,
                    'power' => $houseRent->power,
                    'sewers' => $houseRent->sewers,
                    'roof_type' => $houseRent->roof_type,
                    'condition' => $houseRent->condition,
                    'broker_email' => $houseRent->broker_email,
                    'broker_phone' => $houseRent->broker_phone,
                    'images' => $houseRent->images]);
            return redirect(route('offers'))->with('success', 'Oferta została uaktualniona.');
        } catch (Exception $e) {
            return redirect(route('offers'))->with('error', 'Coś poszło nie tak.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  HouseRent $houseRent
     * @return RedirectResponse
     */
    public function destroy(HouseRent $houseRent)
    {
        try {
            $houseRent->delete();
            return redirect(route('offers'))->with('success', 'Oferta została usunięta.');
        } catch (Exception $e) {
            return redirect(route('offers'))->with('error', 'Coś poszło nie tak.');
        }
    }
}
