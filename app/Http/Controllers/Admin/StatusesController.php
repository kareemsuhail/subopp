<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\Status;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStatusesRequest;
use App\Http\Requests\UpdateStatusesRequest;

class StatusesController extends Controller
{

    /**
     * Display a listing of Status.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statuses = Status::all();

        return view('admin.statuses.index', compact('statuses'));
    }

    /**
     * Show the form for creating new Status.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.statuses.create', compact(''));
    }

    /**
     * Store a newly created Status in storage.
     *
     * @param  \App\Http\Requests\StoreStatusesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatusesRequest $request)
    {
        Status::create($request->all());

        return redirect()->route('statuses.index');
    }

    /**
     * Show the form for editing Status.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $status = Status::findOrFail($id);
        return view('admin.statuses.edit', compact('status', ''));
    }

    /**
     * Update Status in storage.
     *
     * @param  \App\Http\Requests\UpdateStatusesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatusesRequest $request, $id)
    {
        $status = Status::findOrFail($id);
        $status->update($request->all());

        return redirect()->route('statuses.index');
    }

    /**
     * Display Status.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $status = Status::findOrFail($id);
        return view('admin.statuses.show', compact('status'));
    }

    /**
     * Remove Status from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = Status::findOrFail($id);
        $status->delete();

        return redirect()->route('statuses.index');
    }

    /**
     * Delete all selected Status at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Status::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
