<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\Skill;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSkillsRequest;
use App\Http\Requests\UpdateSkillsRequest;
class SkillsController extends Controller
{

    /**
     * Display a listing of Skill.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();

        return view('admin.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating new Skill.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'spicals' => \App\Spical::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        return view('admin.skills.create', compact('') + $relations);
    }

    /**
     * Store a newly created Skill in storage.
     *
     * @param  \App\Http\Requests\StoreSkillsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkillsRequest $request)
    {
        Skill::create($request->all());

        return redirect()->route('skills.index');
    }

    /**
     * Show the form for editing Skill.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'spicals' => \App\Spical::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        $skill = Skill::findOrFail($id);
        return view('admin.skills.edit', compact('skill', '') + $relations);
    }

    /**
     * Update Skill in storage.
     *
     * @param  \App\Http\Requests\UpdateSkillsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSkillsRequest $request, $id)
    {
        $skill = Skill::findOrFail($id);
        $skill->update($request->all());

        return redirect()->route('skills.index');
    }

    /**
     * Display Skill.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'spicals' => \App\Spical::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        $skill = Skill::findOrFail($id);
        return view('admin.skills.show', compact('skill') + $relations);
    }

    /**
     * Remove Skill from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('skills.index');
    }

    /**
     * Delete all selected Skill at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Skill::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
