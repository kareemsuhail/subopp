<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\Spical;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSpicalsRequest;
use App\Http\Requests\UpdateSpicalsRequest;

class SpicalsController extends Controller
{

    /**
     * Display a listing of Spical.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spicals = Spical::all();

        return view('admin.spicals.index', compact('spicals'));
    }

    /**
     * Show the form for creating new Spical.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.spicals.create', compact(''));
    }

    /**
     * Store a newly created Spical in storage.
     *
     * @param  \App\Http\Requests\StoreSpicalsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpicalsRequest $request)
    {
        Spical::create($request->all());

        return redirect()->route('spicals.index');
    }

    /**
     * Show the form for editing Spical.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $spical = Spical::findOrFail($id);
        return view('admin.spicals.edit', compact('spical', ''));
    }

    /**
     * Update Spical in storage.
     *
     * @param  \App\Http\Requests\UpdateSpicalsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSpicalsRequest $request, $id)
    {
        $spical = Spical::findOrFail($id);
        $spical->update($request->all());

        return redirect()->route('spicals.index');
    }

    /**
     * Display Spical.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $spical = Spical::findOrFail($id);
        return view('admin.spicals.show', compact('spical'));
    }

    /**
     * Remove Spical from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $spical = Spical::findOrFail($id);
        $spical->delete();

        return redirect()->route('spicals.index');
    }

    /**
     * Delete all selected Spical at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Spical::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
