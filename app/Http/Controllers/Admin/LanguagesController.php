<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\Language;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLanguagesRequest;
use App\Http\Requests\UpdateLanguagesRequest;

class LanguagesController extends Controller
{

    /**
     * Display a listing of Language.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::all();

        return view('admin.languages.index', compact('languages'));
    }

    /**
     * Show the form for creating new Language.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.languages.create', compact(''));
    }

    /**
     * Store a newly created Language in storage.
     *
     * @param  \App\Http\Requests\StoreLanguagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLanguagesRequest $request)
    {
        Language::create($request->all());

        return redirect()->route('languages.index');
    }

    /**
     * Show the form for editing Language.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $language = Language::findOrFail($id);
        return view('admin.languages.edit', compact('language', ''));
    }

    /**
     * Update Language in storage.
     *
     * @param  \App\Http\Requests\UpdateLanguagesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLanguagesRequest $request, $id)
    {
        $language = Language::findOrFail($id);
        $language->update($request->all());

        return redirect()->route('languages.index');
    }

    /**
     * Display Language.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $language = Language::findOrFail($id);
        return view('admin.languages.show', compact('language'));
    }

    /**
     * Remove Language from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $language = Language::findOrFail($id);
        $language->delete();

        return redirect()->route('languages.index');
    }

    /**
     * Delete all selected Language at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Language::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
