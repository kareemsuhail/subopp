<?php

namespace App\Http\Controllers\Api\V1;

use App\Gender;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGendersRequest;
use App\Http\Requests\UpdateGendersRequest;

class GendersController extends Controller
{
    public function index()
    {
        return Gender::all();
    }

    public function show($id)
    {
        return Gender::findOrFail($id);
    }

    public function update(UpdateGendersRequest $request, $id)
    {
        $gender = Gender::findOrFail($id);
        $gender->update($request->all());

        return $gender;
    }

    public function store(StoreGendersRequest $request)
    {
        $gender = Gender::create($request->all());

        return $gender;
    }

    public function destroy($id)
    {
        $gender = Gender::findOrFail($id);
        $gender->delete();
        return '';
    }
}
