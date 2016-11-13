<?php

namespace App\Http\Controllers\Api\V1;

use App\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillsRequest;
use App\Http\Requests\UpdateSkillsRequest;

class SkillsController extends Controller
{
    public function index()
    {
        return Skill::all();
    }

    public function show($id)
    {
        return Skill::findOrFail($id);
    }

    public function update(UpdateSkillsRequest $request, $id)
    {
        $skill = Skill::findOrFail($id);
        $skill->update($request->all());

        return $skill;
    }

    public function store(StoreSkillsRequest $request)
    {
        $skill = Skill::create($request->all());

        return $skill;
    }

    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();
        return '';
    }
}
