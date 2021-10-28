<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class FlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('components.create-flat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {

        $flat = new Flat;
        $flat->status = $request->input('status');
        $flat->voivodeship = $request->input('voivodeship');
        $flat->district = $request->input('district');
        $flat->commune = $request->input('commune');
        $flat->street = $request->input('street');
        $flat->area = $request->input('area');
        $flat->price = $request->input('price');
        $flat->rooms_nr = $request->input('rooms_nr');
        $flat->description = $request->input('description');
        $flat->title = $request->input('title');
        $flat->market = $request->input('market');
//        $image_name = $request->file('image')->getClientOriginalName();
//        $request->file('image')->storeAs('images/flats' . time(), $image_name);

        $images = [];
        foreach ($request->file as $key => $file) {
            $fileName = time().'_'.$file->getClientOriginalName();
            $filePath = 'images/flats/' . $fileName;
            $file->storeAs('images/flats', $fileName);
            array_push($images, $filePath);
        }

        $flat->images = json_encode($images);
//        dump(json_encode($images));

        $flat->save();
        return redirect(route('offers-management'));
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
