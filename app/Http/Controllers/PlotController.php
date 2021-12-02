<?php

namespace App\Http\Controllers;

use App\Models\Plot;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(Request $request): View
    {
        $paginator = $request->input('paginator');
        return view('plots.index', [
            'plots' => Plot::paginate($paginator)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('plots.create-plot');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
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
            'title' => 'required|min:10',
            'description' => 'required|min:10',
        ]);
        $plot = new Plot;
        $plot->status = $request->input('status');
        $plot->voivodeship = $request->input('voivodeship');
        $plot->district = $request->input('district');
        $plot->city = $request->input('city');
        $plot->commune = $request->input('commune');
        $plot->street = $request->input('street');
        $plot->area = $request->input('area');
        $plot->price = $request->input('price');
        $plot->title = $request->input('title');
        $plot->description = $request->input('description');
        $plot->length = $request->input('length');
        $plot->width = $request->input('width');
        $plot->type = $request->input('type');
        $plot->fence = $request->input('fence');
        $plot->driveway = $request->input('driveway');
        $plot->exclusivity = $request->input('exclusivity');
        $plot->property_form = $request->input('property_form');
        $plot->broker_email = $request->input('broker_email');
        $plot->broker_phone = $request->input('broker_phone');
        $images = [];
        foreach ($request->file as $key => $file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = 'images/plots/' . $fileName;
            $file->storeAs('images/plots', $fileName);
            array_push($images, $filePath);
        }
        $plot->images = json_encode($images);
        try {
            $plot->save();
            return redirect(route('plots.index'))->with('success', 'Oferta została utworzona.');
        } catch (Exception $e) {
            return redirect(route('plots.index'))->with('error', 'Coś poszło nie tak.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Plot $plot
     * @return View
     */
    public function edit(Plot $plot): View
    {
        return view('plots.edit-plot', [
            'plot' => $plot
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     */
    public function update(Request $request)
    {

        $plot_id = (int)$request->input('id');
        $request->validate([
            'status' => 'required',
            'voivodeship' => 'required|min:10',
            'district' => 'required|min:5',
            'commune' => 'required|min:5',
            'city' => 'required|min:5',
            'street' => 'required|min:5',
            'area' => 'required|numeric|min:0',
            'price' => 'required',
            'title' => 'required|min:10',
            'description' => 'required|min:10',
        ]);
        $plot = new Plot;
        $plot->status = $request->input('status');
        $plot->voivodeship = $request->input('voivodeship');
        $plot->district = $request->input('district');
        $plot->city = $request->input('city');
        $plot->commune = $request->input('commune');
        $plot->street = $request->input('street');
        $plot->area = $request->input('area');
        $plot->price = $request->input('price');
        $plot->title = $request->input('title');
        $plot->description = $request->input('description');
        $plot->length = $request->input('length');
        $plot->width = $request->input('width');
        $plot->type = $request->input('type');
        $plot->fence = $request->input('fence');
        $plot->driveway = $request->input('driveway');
        $plot->exclusivity = $request->input('exclusivity');
        $plot->property_form = $request->input('property_form');
        $plot->broker_email = $request->input('broker_email');
        $plot->broker_phone = $request->input('broker_phone');
        if ($request->file) {
            $images = [];
            foreach ($request->file as $key => $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = 'images/plots/' . $fileName;
                $file->storeAs('images/plots', $fileName);
                array_push($images, $filePath);
            }
            $plot->images = json_encode($images);
        } else {
            $plot->images = $request->input('images');
        }
        try {
            DB::table('plots')
                ->where('id', $plot_id)
                ->update([
                        'status' => $plot->status,
                        'voivodeship' => $plot->voivodeship,
                        'district' => $plot->district,
                        'commune' => $plot->commune,
                        'city' => $plot->city,
                        'street' => $plot->street,
                        'area' => $plot->area,
                        'price' => $plot->price,
                        'description' => $plot->description,
                        'title' => $plot->title,
                        'length' => $plot->length,
                        'width' => $plot->width,
                        'type' => $plot->width,
                        'fence' => $plot->fence,
                        'driveway' => $plot->driveway,
                        'exclusivity' => $plot->exclusivity,
                        'property_form' => $plot->property_form,
                        'broker_email' => $plot->broker_email,
                        'broker_phone' => $plot->broker_phone,
                        'images' => $plot->images
                    ]
                );
            return redirect(route('plots.index'))->with('success', 'Oferta została uaktualniona.');
        } catch (Exception $e) {
            return redirect(route('plots.index'))->with('error', 'Coś poszło nie tak.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Plot $plot
     * @return RedirectResponse
     */
    public function destroy(Plot $plot): RedirectResponse
    {
        try {
            $plot->delete();
            return redirect(route('plots.index'))->with('success', 'Oferta została usunięta.');
        } catch (Exception $e) {
            return redirect(route('plots.index'))->with('error', 'Coś poszło nie tak.');
        }
    }
}
