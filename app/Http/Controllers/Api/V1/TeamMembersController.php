<?php

namespace App\Http\Controllers\Api\V1;

use App\TeamMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeamMembersRequest;
use App\Http\Requests\UpdateTeamMembersRequest;

class TeamMembersController extends Controller
{
    public function index()
    {
        return TeamMember::all();
    }

    public function show($id)
    {
        return TeamMember::findOrFail($id);
    }

    public function update(UpdateTeamMembersRequest $request, $id)
    {
        $teammember = TeamMember::findOrFail($id);
        $teammember->update($request->all());

        return $teammember;
    }

    public function store(StoreTeamMembersRequest $request)
    {
        $teammember = TeamMember::create($request->all());

        return $teammember;
    }

    public function destroy($id)
    {
        $teammember = TeamMember::findOrFail($id);
        $teammember->delete();
        return '';
    }
}
