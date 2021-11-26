<?php

namespace App\Http\Controllers;

use App\Models\Premises;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use League\Flysystem\Exception;

class PremisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(Request $request)
    {
        $paginator = $request->input('paginator');
        return view('premises.index', [
            'premises' => Premises::paginate($paginator)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('premises.create-premises');
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
            'voivodeship' => 'required|min:5',
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
        $premises = new Premises;
        $premises->status = $request->input('status');
        $premises->voivodeship = $request->input('voivodeship');
        $premises->district = $request->input('district');
        $premises->city = $request->input('city');
        $premises->commune = $request->input('commune');
        $premises->street = $request->input('street');
        $premises->area = $request->input('area');
        $premises->price = $request->input('price');
        $premises->rooms_nr = $request->input('rooms_nr');
        $premises->title = $request->input('title');
        $premises->description = $request->input('description');
        $premises->market = $request->input('market');
        $premises->phones_nr = $request->input('phones_nr');
        $premises->year_build = $request->input('year_build');
        $premises->n_geo_x = $request->input('n_geo_x');
        $premises->n_geo_y = $request->input('n_geo_y');
        $premises->destination = $request->input('destination');
        $premises->air_conditioning = $request->input('air_conditioning');
        $premises->security = $request->input('security');
        $premises->office = $request->input('office');
        $premises->office_type = $request->input('office_type');
        $premises->shopwindow = $request->input('shopwindow');
        $premises->water_connection = $request->input('water_connection');
        $premises->intercom = $request->input('intercom');
        $premises->height = $request->input('height');
        $premises->condition = $request->input('condition');
        $premises->exclusivity = $request->input('exclusivity');
        $premises->property_form = $request->input('property_form');
        $premises->without_commission = $request->input('without_commission');
        $premises->broker_email = $request->input('broker_email');
        $premises->broker_phone = $request->input('broker_phone');
        $images = [];
        foreach ($request->file as $key => $file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = 'images/premises/' . $fileName;
            $file->storeAs('images/premises', $fileName);
            array_push($images, $filePath);
        }
        $premises->images = json_encode($images);
        try {
            $premises->save();
            return redirect(route('premises.index'))->with('success', 'Oferta została utworzona.');
        } catch (Exception $e) {
            return redirect(route('premises.index'))->with('error', 'Coś poszło nie tak.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Premises $premises
     * @return View
     */
    public function show(Premises $premises)
    {
        return view('premises.show', [
            'premises' => $premises
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Premises $premises
     * @return View
     */
    public function edit(Premises $premises)
    {
        return view('premises.edit-premises', [
            'premises' => $premises
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
        $premises_id = (int)$request->input('id');
        $request->validate([
            'status' => 'required',
            'voivodeship' => 'required|min:5',
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
        $premises = new Premises;
        $premises->status = $request->input('status');
        $premises->voivodeship = $request->input('voivodeship');
        $premises->district = $request->input('district');
        $premises->city = $request->input('city');
        $premises->commune = $request->input('commune');
        $premises->street = $request->input('street');
        $premises->area = $request->input('area');
        $premises->price = $request->input('price');
        $premises->rooms_nr = $request->input('rooms_nr');
        $premises->title = $request->input('title');
        $premises->description = $request->input('description');
        $premises->market = $request->input('market');
        $premises->phones_nr = $request->input('phones_nr');
        $premises->year_build = $request->input('year_build');
        $premises->n_geo_x = $request->input('n_geo_x');
        $premises->n_geo_y = $request->input('n_geo_y');
        $premises->destination = $request->input('destination');
        $premises->air_conditioning = $request->input('air_conditioning');
        $premises->security = $request->input('security');
        $premises->office = $request->input('office');
        $premises->office_type = $request->input('office_type');
        $premises->shopwindow = $request->input('shopwindow');
        $premises->water_connection = $request->input('water_connection');
        $premises->intercom = $request->input('intercom');
        $premises->height = $request->input('height');
        $premises->condition = $request->input('condition');
        $premises->exclusivity = $request->input('exclusivity');
        $premises->property_form = $request->input('property_form');
        $premises->without_commission = $request->input('without_commission');
        $premises->broker_email = $request->input('broker_email');
        $premises->broker_phone = $request->input('broker_phone');
        if ($request->file) {
            $images = [];
            foreach ($request->file as $key => $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = 'images/premises/' . $fileName;
                $file->storeAs('images/premises', $fileName);
                array_push($images, $filePath);
            }
            $premises->images = json_encode($images);
        } else {
            $premises->images = $request->input('images');
        }
        try {
            DB::table('premises')
                ->where('id', $premises_id)
                ->update(['title' => $premises->title,
                    'status' => $premises->status,
                    'voivodeship' => $premises->voivodeship,
                    'district' => $premises->district,
                    'city' => $premises->city,
                    'commune' => $premises->commune,
                    'street' => $premises->street,
                    'area' => $premises->area,
                    'price' => $premises->price,
                    'rooms_nr' => $premises->rooms_nr,
                    'market' => $premises->market,
                    'description' => $premises->description,
                    'phones_nr' => $premises->phones_nr,
                    'year_build' => $premises->year_build,
                    'n_geo_x' => $premises->n_geo_x,
                    'n_geo_y' => $premises->n_geo_y,
                    'destination' => $premises->destination,
                    'air_conditioning' => $premises->air_conditioning,
                    'security' => $premises->security,
                    'office' => $premises->office,
                    'office_type' => $premises->office_type,
                    'shopwindow' => $premises->shopwindow,
                    'water_connection' => $premises->water_connection,
                    'intercom' => $premises->intercom,
                    'height' => $premises->height,
                    'condition' => $premises->condition,
                    'exclusivity' => $premises->exclusivity,
                    'property_form' => $premises->property_form,
                    'without_commission' => $premises->without_commission,
                    'broker_email' => $premises->broker_email,
                    'broker_phone' => $premises->broker_phone,
                    'images' => $premises->images]);
            return redirect(route('premises.index'))->with('success', 'Oferta została uaktualniona.');
        } catch (Exception $e) {
            return redirect(route('premises.index'))->with('error', 'Coś poszło nie tak.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Premises $premises
     * @return RedirectResponse
     */
    public function destroy(Premises $premises)
    {
        try {
            $premises->delete();
            return redirect(route('premises.index'))->with('success', 'Oferta została usunięta.');
        } catch (Exception $e) {
            return redirect(route('premises.index'))->with('error', 'Coś poszło nie tak.');
        }
    }
}
