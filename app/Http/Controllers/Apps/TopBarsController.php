<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\TopBar;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTopBarsRequest;
use App\Http\Requests\UpdateTopBarsRequest;

class TopBarsController extends Controller
{

    /**
     * Display a listing of TopBar.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $top_bars = TopBar::all();

        return view('admin.topmenubars.index', compact('top_bars'));
    }

    /**
     * Show the form for creating new TopBar.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.topmenubars.create', compact(''));
    }

    /**
     * Store a newly created TopBar in storage.
     *
     * @param  \App\Http\Requests\StoreTopBarsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTopBarsRequest $request)
    {
        TopBar::create($request->all());

        return redirect()->route('top_bars.index');
    }

    /**
     * Show the form for editing TopBar.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $topbar = TopBar::findOrFail($id);
        return view('admin.topmenubars.edit', compact('topbar', ''));
    }

    /**
     * Update TopBar in storage.
     *
     * @param  \App\Http\Requests\UpdateTopBarsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTopBarsRequest $request, $id)
    {
        $topbar = TopBar::findOrFail($id);
        $topbar->update($request->all());

        return redirect()->route('topmenubars.index');
    }

    /**
     * Display TopBar.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topbar = TopBar::findOrFail($id);
        return view('admin.topmenubars.show', compact('topbar'));
    }

    /**

     * Remove TopBar from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        $topbar = TopBar::findOrFail($id);

        $topbar->delete();



        return redirect()->route('top_bars.index');

    }


    /**
     * Delete all selected TopBar at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = TopBar::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
