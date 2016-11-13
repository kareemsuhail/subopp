<?php

namespace App\Http\Controllers\Api\V1;

use App\HowItDo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHowItDosRequest;
use App\Http\Requests\UpdateHowItDosRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class HowItDosController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        return HowItDo::all();
    }

    public function show($id)
    {
        return HowItDo::findOrFail($id);
    }

    public function update(UpdateHowItDosRequest $request, $id)
    {
        $request = $this->saveFiles($request->all());
        $howitdo = HowItDo::findOrFail($id);
        $howitdo->update($request->all());

        return $howitdo;
    }

    public function store(StoreHowItDosRequest $request)
    {
        $request = $this->saveFiles($request->all());
        $howitdo = HowItDo::create($request->all());

        return $howitdo;
    }

    public function destroy($id)
    {
        $howitdo = HowItDo::findOrFail($id);
        $howitdo->delete();
        return '';
    }
}
