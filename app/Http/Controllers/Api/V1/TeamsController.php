<?php

namespace App\Http\Controllers\Api\V1;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeamsRequest;
use App\Http\Requests\UpdateTeamsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class TeamsController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        return Team::all();
    }

    public function show($id)
    {
        return Team::findOrFail($id);
    }

    public function update(UpdateTeamsRequest $request, $id)
    {
        $request = $this->saveFiles($request->all());
        $team = Team::findOrFail($id);
        $team->update($request->all());

        return $team;
    }

    public function store(StoreTeamsRequest $request)
    {
        $request = $this->saveFiles($request->all());
        $team = Team::create($request->all());

        return $team;
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        return '';
    }
}
