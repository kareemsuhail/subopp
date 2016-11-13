<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\HowItDo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreHowItDosRequest;
use App\Http\Requests\UpdateHowItDosRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class HowItDosController extends Controller
{
    use FileUploadTrait;


    /**
     * Display a listing of HowItDo.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $how_it_dos = HowItDo::all();

        return view('admin.how_it_dos.index', compact('how_it_dos'));
    }

    /**
     * Show the form for creating new HowItDo.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.how_it_dos.create', compact(''));
    }

    /**
     * Store a newly created HowItDo in storage.
     *
     * @param  \App\Http\Requests\StoreHowItDosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHowItDosRequest $request)
    {
        $request = $this->saveFiles($request);
        HowItDo::create($request->all());

        return redirect()->route('how_it_dos.index');
    }

    /**
     * Show the form for editing HowItDo.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $howitdo = HowItDo::findOrFail($id);
        return view('admin.how_it_dos.edit', compact('howitdo', ''));
    }

    /**
     * Update HowItDo in storage.
     *
     * @param  \App\Http\Requests\UpdateHowItDosRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHowItDosRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $howitdo = HowItDo::findOrFail($id);
        $howitdo->update($request->all());

        return redirect()->route('how_it_dos.index');
    }

    /**
     * Display HowItDo.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $howitdo = HowItDo::findOrFail($id);
        return view('admin.how_it_dos.show', compact('howitdo'));
    }

    /**
     * Remove HowItDo from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $howitdo = HowItDo::findOrFail($id);
        $howitdo->delete();

        return redirect()->route('how_it_dos.index');
    }

    /**
     * Delete all selected HowItDo at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = HowItDo::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
