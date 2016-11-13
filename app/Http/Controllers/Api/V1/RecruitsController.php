<?php

namespace App\Http\Controllers\Api\V1;

use App\Recruit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRecruitsRequest;
use App\Http\Requests\UpdateRecruitsRequest;

class RecruitsController extends Controller
{
    public function index()
    {
        return Recruit::all();
    }

    public function show($id)
    {
        return Recruit::findOrFail($id);
    }

    public function update(UpdateRecruitsRequest $request, $id)
    {
        $recruit = Recruit::findOrFail($id);
        $recruit->update($request->all());

        return $recruit;
    }

    public function store(StoreRecruitsRequest $request)
    {
        $recruit = Recruit::create($request->all());

        return $recruit;
    }

    public function destroy($id)
    {
        $recruit = Recruit::findOrFail($id);
        $recruit->delete();
        return '';
    }
}
