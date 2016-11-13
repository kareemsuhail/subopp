<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSlidersRequest;
use App\Http\Requests\UpdateSlidersRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class SlidersController extends Controller
{
    use FileUploadTrait;


    /**
     * Display a listing of Slider.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();

        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating new Slider.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $relations = [

            'statuses' => \App\Status::get()->pluck('name', 'id')->prepend('Please select', ''),

            

        ];



        

        return view('admin.sliders.create', compact('') + $relations);


    }

    /**
     * Store a newly created Slider in storage.
     *
     * @param  \App\Http\Requests\StoreSlidersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSlidersRequest $request)
    {
        $request = $this->saveFiles($request);
        Slider::create($request->all());

        return redirect()->route('sliders.index');
    }

    /**
     * Show the form for editing Slider.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

        $relations = [

            'statuses' => \App\Status::get()->pluck('name', 'id')->prepend('Please select', ''),

            

        ];



        

        $slider = Slider::findOrFail($id);

        return view('admin.sliders.edit', compact('slider', '') + $relations);


    }

    /**
     * Update Slider in storage.
     *
     * @param  \App\Http\Requests\UpdateSlidersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSlidersRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $slider = Slider::findOrFail($id);
        $slider->update($request->all());

        return redirect()->route('sliders.index');
    }

    /**
     * Display Slider.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $relations = [

            'statuses' => \App\Status::get()->pluck('name', 'id')->prepend('Please select', ''),

            

        ];



        $slider = Slider::findOrFail($id);

        return view('admin.sliders.show', compact('slider') + $relations);

    }

    

    /**
     * Remove Slider from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();

        return redirect()->route('sliders.index');
    }

    /**
     * Delete all selected Slider at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Slider::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
