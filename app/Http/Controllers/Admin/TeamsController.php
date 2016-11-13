<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTeamsRequest;
use App\Http\Requests\UpdateTeamsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class TeamsController extends Controller
{
    use FileUploadTrait;


    /**
     * Display a listing of Team.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();

        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating new Team.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'spicals' => \App\Spical::get()->pluck('name', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        return view('admin.teams.create', compact('') + $relations);
    }

    /**
     * Store a newly created Team in storage.
     *
     * @param  \App\Http\Requests\StoreTeamsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamsRequest $request)
    {
        $request = $this->saveFiles($request);
        Team::create($request->all());

        return redirect()->route('teams.index');
    }

    /**
     * Show the form for editing Team.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'spicals' => \App\Spical::get()->pluck('name', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        $team = Team::findOrFail($id);
        return view('admin.teams.edit', compact('team', '') + $relations);
    }

    /**
     * Update Team in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamsRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $team = Team::findOrFail($id);
        $team->update($request->all());

        return redirect()->route('teams.index');
    }

    /**
     * Display Team.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'spicals' => \App\Spical::get()->pluck('name', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        $team = Team::findOrFail($id);
        return view('admin.teams.show', compact('team') + $relations);
    }

    /**
     * Remove Team from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->route('teams.index');
    }

    /**
     * Delete all selected Team at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Team::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
