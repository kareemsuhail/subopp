<?php

namespace App\Http\Controllers\Api\V1;

use App\PeopleSay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePeopleSaysRequest;
use App\Http\Requests\UpdatePeopleSaysRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class PeopleSaysController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        return PeopleSay::all();
    }

    public function show($id)
    {
        return PeopleSay::findOrFail($id);
    }

    public function update(UpdatePeopleSaysRequest $request, $id)
    {
        $request = $this->saveFiles($request->all());
        $peoplesay = PeopleSay::findOrFail($id);
        $peoplesay->update($request->all());

        return $peoplesay;
    }

    public function store(StorePeopleSaysRequest $request)
    {
        $request = $this->saveFiles($request->all());
        $peoplesay = PeopleSay::create($request->all());

        return $peoplesay;
    }

    public function destroy($id)
    {
        $peoplesay = PeopleSay::findOrFail($id);
        $peoplesay->delete();
        return '';
    }
}
