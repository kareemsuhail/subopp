<?php

namespace App\Http\Controllers\Api\V1;

use App\Prorfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProrfoliosRequest;
use App\Http\Requests\UpdateProrfoliosRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class ProrfoliosController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        return Prorfolio::all();
    }

    public function show($id)
    {
        return Prorfolio::findOrFail($id);
    }

    public function update(UpdateProrfoliosRequest $request, $id)
    {
        $request = $this->saveFiles($request->all());
        $prorfolio = Prorfolio::findOrFail($id);
        $prorfolio->update($request->all());
        return $prorfolio;
    }

    public function store(StoreProrfoliosRequest $request)
    {
        $request = $this->saveFiles($request->all());
        $prorfolio = Prorfolio::create($request->all());

        return $prorfolio;
    }

    public function destroy($id)
    {
        $prorfolio = Prorfolio::findOrFail($id);
        $prorfolio->delete();
        return '';
    }
}
