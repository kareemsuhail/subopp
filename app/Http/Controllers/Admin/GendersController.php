<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\Gender;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGendersRequest;
use App\Http\Requests\UpdateGendersRequest;

class GendersController extends Controller
{

    /**
     * Display a listing of Gender.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genders = Gender::all();

        return view('admin.genders.index', compact('genders'));
    }

    /**
     * Show the form for creating new Gender.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.genders.create', compact(''));
    }

    /**
     * Store a newly created Gender in storage.
     *
     * @param  \App\Http\Requests\StoreGendersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGendersRequest $request)
    {
        Gender::create($request->all());

        return redirect()->route('genders.index');
    }

    /**
     * Show the form for editing Gender.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $gender = Gender::findOrFail($id);
        return view('admin.genders.edit', compact('gender', ''));
    }

    /**
     * Update Gender in storage.
     *
     * @param  \App\Http\Requests\UpdateGendersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGendersRequest $request, $id)
    {
        $gender = Gender::findOrFail($id);
        $gender->update($request->all());

        return redirect()->route('genders.index');
    }

    /**
     * Display Gender.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gender = Gender::findOrFail($id);
        return view('admin.genders.show', compact('gender'));
    }

    /**
     * Remove Gender from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gender = Gender::findOrFail($id);
        $gender->delete();

        return redirect()->route('genders.index');
    }

    /**
     * Delete all selected Gender at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Gender::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
