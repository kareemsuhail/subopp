<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\Type;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTypesRequest;
use App\Http\Requests\UpdateTypesRequest;

class TypesController extends Controller
{

    /**
     * Display a listing of Type.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();

        return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating new Type.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.types.create', compact(''));
    }

    /**
     * Store a newly created Type in storage.
     *
     * @param  \App\Http\Requests\StoreTypesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypesRequest $request)
    {
        Type::create($request->all());

        return redirect()->route('types.index');
    }

    /**
     * Show the form for editing Type.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $type = Type::findOrFail($id);
        return view('admin.types.edit', compact('type', ''));
    }

    /**
     * Update Type in storage.
     *
     * @param  \App\Http\Requests\UpdateTypesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypesRequest $request, $id)
    {
        $type = Type::findOrFail($id);
        $type->update($request->all());

        return redirect()->route('types.index');
    }

    /**
     * Display Type.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type = Type::findOrFail($id);
        return view('admin.types.show', compact('type'));
    }

    /**
     * Remove Type from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();

        return redirect()->route('types.index');
    }

    /**
     * Delete all selected Type at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Type::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
