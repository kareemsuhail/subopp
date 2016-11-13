<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\TeamMember;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTeamMembersRequest;
use App\Http\Requests\UpdateTeamMembersRequest;

class TeamMembersController extends Controller
{

    /**
     * Display a listing of TeamMember.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_members = TeamMember::all();

        return view('admin.team_members.index', compact('team_members'));
    }

    /**
     * Show the form for creating new TeamMember.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'teams' => \App\Team::get()->pluck('name', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        return view('admin.team_members.create', compact('') + $relations);
    }

    /**
     * Store a newly created TeamMember in storage.
     *
     * @param  \App\Http\Requests\StoreTeamMembersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamMembersRequest $request)
    {
        TeamMember::create($request->all());

        return redirect()->route('team_members.index');
    }

    /**
     * Show the form for editing TeamMember.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'teams' => \App\Team::get()->pluck('name', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        $teammember = TeamMember::findOrFail($id);
        return view('admin.team_members.edit', compact('teammember', '') + $relations);
    }

    /**
     * Update TeamMember in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamMembersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamMembersRequest $request, $id)
    {
        $teammember = TeamMember::findOrFail($id);
        $teammember->update($request->all());

        return redirect()->route('team_members.index');
    }

    /**
     * Display TeamMember.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'teams' => \App\Team::get()->pluck('name', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        $teammember = TeamMember::findOrFail($id);
        return view('admin.team_members.show', compact('teammember') + $relations);
    }

    /**
     * Remove TeamMember from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teammember = TeamMember::findOrFail($id);
        $teammember->delete();

        return redirect()->route('team_members.index');
    }

    /**
     * Delete all selected TeamMember at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = TeamMember::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
