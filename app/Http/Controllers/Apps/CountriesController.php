<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\Country;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCountriesRequest;
use App\Http\Requests\UpdateCountriesRequest;

class CountriesController extends Controller
{

    /**
     * Display a listing of Country.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();

        return view('admin.countries.index', compact('countries'));
    }

    /**
     * Show the form for creating new Country.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.countries.create', compact(''));
    }

    /**
     * Store a newly created Country in storage.
     *
     * @param  \App\Http\Requests\StoreCountriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountriesRequest $request)
    {
        Country::create($request->all());

        return redirect()->route('countries.index');
    }

    /**
     * Show the form for editing Country.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $country = Country::findOrFail($id);
        return view('admin.countries.edit', compact('country', ''));
    }

    /**
     * Update Country in storage.
     *
     * @param  \App\Http\Requests\UpdateCountriesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCountriesRequest $request, $id)
    {
        $country = Country::findOrFail($id);
        $country->update($request->all());

        return redirect()->route('countries.index');
    }

    /**
     * Display Country.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country = Country::findOrFail($id);
        return view('admin.countries.show', compact('country'));
    }

    /**
     * Remove Country from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();

        return redirect()->route('countries.index');
    }

    /**
     * Delete all selected Country at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Country::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
