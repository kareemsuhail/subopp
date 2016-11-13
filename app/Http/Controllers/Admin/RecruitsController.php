<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\Recruit;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRecruitsRequest;
use App\Http\Requests\UpdateRecruitsRequest;

class RecruitsController extends Controller
{

    /**
     * Display a listing of Recruit.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recruits = Recruit::all();

        return view('admin.recruits.index', compact('recruits'));
    }

    /**
     * Show the form for creating new Recruit.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'jobs' => \App\Job::get()->pluck('title', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        return view('admin.recruits.create', compact('') + $relations);
    }

    /**
     * Store a newly created Recruit in storage.
     *
     * @param  \App\Http\Requests\StoreRecruitsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecruitsRequest $request)
    {
        Recruit::create($request->all());

        return redirect()->route('recruits.index');
    }

    /**
     * Show the form for editing Recruit.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'jobs' => \App\Job::get()->pluck('title', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        $recruit = Recruit::findOrFail($id);
        return view('admin.recruits.edit', compact('recruit', '') + $relations);
    }

    /**
     * Update Recruit in storage.
     *
     * @param  \App\Http\Requests\UpdateRecruitsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecruitsRequest $request, $id)
    {
        $recruit = Recruit::findOrFail($id);
        $recruit->update($request->all());

        return redirect()->route('recruits.index');
    }

    /**
     * Display Recruit.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'jobs' => \App\Job::get()->pluck('title', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        $recruit = Recruit::findOrFail($id);
        return view('admin.recruits.show', compact('recruit') + $relations);
    }

    /**
     * Remove Recruit from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recruit = Recruit::findOrFail($id);
        $recruit->delete();

        return redirect()->route('recruits.index');
    }

    /**
     * Delete all selected Recruit at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Recruit::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
