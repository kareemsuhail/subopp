<?php

namespace App\Http\Controllers\Apps;
use App\Http\Controllers\Apps\Controller;

use App\City;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCitiesRequest;
use App\Http\Requests\UpdateCitiesRequest;
use Response;

class CitiesController extends Controller
{

    /**
     * Display a listing of City.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();

        return view('admin.cities.index', compact('cities'));
    }

    public function showbycountry($id)
    {
         $results = City::where('country_id','=', $id)->pluck('name', 'id');
         return Response::make($results);

    }

    /**
     * Show the form for creating new City.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'countries' => \App\Country::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        return view('admin.cities.create', compact('') + $relations);
    }

    /**
     * Store a newly created City in storage.
     *
     * @param  \App\Http\Requests\StoreCitiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCitiesRequest $request)
    {
        City::create($request->all());

        return redirect()->route('cities.index');
    }

    /**
     * Show the form for editing City.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'countries' => \App\Country::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        $city = City::findOrFail($id);
        return view('admin.cities.edit', compact('city', '') + $relations);
    }

    /**
     * Update City in storage.
     *
     * @param  \App\Http\Requests\UpdateCitiesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCitiesRequest $request, $id)
    {
        $city = City::findOrFail($id);
        $city->update($request->all());

        return redirect()->route('cities.index');
    }

    /**
     * Display City.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'countries' => \App\Country::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        $city = City::findOrFail($id);
        return view('admin.cities.show', compact('city') + $relations);
    }

    /**
     * Remove City from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();

        return redirect()->route('cities.index');
    }

    /**
     * Delete all selected City at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = City::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
