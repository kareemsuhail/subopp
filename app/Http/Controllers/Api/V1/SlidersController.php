<?php

namespace App\Http\Controllers\Api\V1;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSlidersRequest;
use App\Http\Requests\UpdateSlidersRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class SlidersController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        return Slider::all();
    }

    public function show($id)
    {
        return Slider::findOrFail($id);
    }

    public function update(UpdateSlidersRequest $request, $id)
    {
        $request = $this->saveFiles($request->all());
        $slider = Slider::findOrFail($id);
        $slider->update($request->all());

        return $slider;
    }

    public function store(StoreSlidersRequest $request)
    {
        $request = $this->saveFiles($request->all());
        $slider = Slider::create($request->all());

        return $slider;
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return '';
    }
}
