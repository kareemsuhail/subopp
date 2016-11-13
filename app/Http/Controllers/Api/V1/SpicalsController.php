<?php

namespace App\Http\Controllers\Api\V1;

use App\Spical;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSpicalsRequest;
use App\Http\Requests\UpdateSpicalsRequest;

class SpicalsController extends Controller
{
    public function index()
    {
        return Spical::all();
    }

    public function show($id)
    {
        return Spical::findOrFail($id);
    }

    public function update(UpdateSpicalsRequest $request, $id)
    {
        $spical = Spical::findOrFail($id);
        $spical->update($request->all());

        return $spical;
    }

    public function store(StoreSpicalsRequest $request)
    {
        $spical = Spical::create($request->all());

        return $spical;
    }

    public function destroy($id)
    {
        $spical = Spical::findOrFail($id);
        $spical->delete();
        return '';
    }
}
