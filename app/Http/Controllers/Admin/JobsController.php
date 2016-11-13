<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\Job;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJobsRequest;
use App\Http\Requests\UpdateJobsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class JobsController extends Controller
{
    use FileUploadTrait;


    /**
     * Display a listing of Job.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();

        return view('admin.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating new Job.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        return view('admin.jobs.create', compact('') + $relations);
    }

    /**
     * Store a newly created Job in storage.
     *
     * @param  \App\Http\Requests\StoreJobsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobsRequest $request)
    {
        $request = $this->saveFiles($request);
        Job::create($request->all());

        return redirect()->route('jobs.index');
    }

    /**
     * Show the form for editing Job.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        $job = Job::findOrFail($id);
        return view('admin.jobs.edit', compact('job', '') + $relations);
    }

    /**
     * Update Job in storage.
     *
     * @param  \App\Http\Requests\UpdateJobsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobsRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $job = Job::findOrFail($id);
        $job->update($request->all());

        return redirect()->route('jobs.index');
    }

    /**
     * Display Job.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        $job = Job::findOrFail($id);
        return view('admin.jobs.show', compact('job') + $relations);
    }

    /**
     * Remove Job from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('jobs.index');
    }

    /**
     * Delete all selected Job at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Job::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
