<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\PeopleSay;
use Illuminate\Http\Request;
use App\Http\Requests\StorePeopleSaysRequest;
use App\Http\Requests\UpdatePeopleSaysRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class PeopleSaysController extends Controller
{
    use FileUploadTrait;


    /**
     * Display a listing of PeopleSay.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people_says = PeopleSay::all();

        return view('admin.people_says.index', compact('people_says'));
    }

    /**
     * Show the form for creating new PeopleSay.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.people_says.create', compact(''));
    }

    /**
     * Store a newly created PeopleSay in storage.
     *
     * @param  \App\Http\Requests\StorePeopleSaysRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePeopleSaysRequest $request)
    {
        $request = $this->saveFiles($request);
        PeopleSay::create($request->all());

        return redirect()->route('people_says.index');
    }

    /**
     * Show the form for editing PeopleSay.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $peoplesay = PeopleSay::findOrFail($id);
        return view('admin.people_says.edit', compact('peoplesay', ''));
    }

    /**
     * Update PeopleSay in storage.
     *
     * @param  \App\Http\Requests\UpdatePeopleSaysRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePeopleSaysRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $peoplesay = PeopleSay::findOrFail($id);
        $peoplesay->update($request->all());

        return redirect()->route('people_says.index');
    }

    /**
     * Display PeopleSay.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peoplesay = PeopleSay::findOrFail($id);
        return view('admin.people_says.show', compact('peoplesay'));
    }

    /**
     * Remove PeopleSay from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peoplesay = PeopleSay::findOrFail($id);
        $peoplesay->delete();

        return redirect()->route('people_says.index');
    }

    /**
     * Delete all selected PeopleSay at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = PeopleSay::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
