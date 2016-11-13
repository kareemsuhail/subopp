<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\Prorfolio;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProrfoliosRequest;
use App\Http\Requests\UpdateProrfoliosRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class ProrfoliosController extends Controller
{
    use FileUploadTrait;


    /**
     * Display a listing of Prorfolio.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prorfolios = Prorfolio::all();

        return view('admin.prorfolios.index', compact('prorfolios'));
    }

    /**
     * Show the form for creating new Prorfolio.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'types' => \App\Type::get()->pluck('name', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            'teams' => \App\Team::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        return view('admin.prorfolios.create', compact('') + $relations);
    }

    /**
     * Store a newly created Prorfolio in storage.
     *
     * @param  \App\Http\Requests\StoreProrfoliosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProrfoliosRequest $request)
    {
        $request = $this->saveFiles($request);
        Prorfolio::create($request->all());

        return redirect()->route('prorfolios.index');
    }

    /**
     * Show the form for editing Prorfolio.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'types' => \App\Type::get()->pluck('name', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            'teams' => \App\Team::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        $prorfolio = Prorfolio::findOrFail($id);
        return view('admin.prorfolios.edit', compact('prorfolio', '') + $relations);
    }

    /**
     * Update Prorfolio in storage.
     *
     * @param  \App\Http\Requests\UpdateProrfoliosRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProrfoliosRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $prorfolio = Prorfolio::findOrFail($id);
        $prorfolio->update($request->all());

        return redirect()->route('prorfolios.index');
    }

    /**
     * Display Prorfolio.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'types' => \App\Type::get()->pluck('name', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            'teams' => \App\Team::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        $prorfolio = Prorfolio::findOrFail($id);
        return view('admin.prorfolios.show', compact('prorfolio') + $relations);
    }

    /**
     * Remove Prorfolio from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prorfolio = Prorfolio::findOrFail($id);
        $prorfolio->delete();

        return redirect()->route('prorfolios.index');
    }

    /**
     * Delete all selected Prorfolio at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Prorfolio::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
