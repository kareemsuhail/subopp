<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\JobStatus;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJobStatusesRequest;
use App\Http\Requests\UpdateJobStatusesRequest;

class JobStatusesController extends Controller
{

    /**
     * Display a listing of JobStatus.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job_statuses = JobStatus::all();

        return view('admin.job_statuses.index', compact('job_statuses'));
    }

    /**
     * Show the form for creating new JobStatus.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.job_statuses.create', compact(''));
    }

    /**
     * Store a newly created JobStatus in storage.
     *
     * @param  \App\Http\Requests\StoreJobStatusesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobStatusesRequest $request)
    {
        JobStatus::create($request->all());

        return redirect()->route('job_statuses.index');
    }

    /**
     * Show the form for editing JobStatus.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $jobstatus = JobStatus::findOrFail($id);
        return view('admin.job_statuses.edit', compact('jobstatus', ''));
    }

    /**
     * Update JobStatus in storage.
     *
     * @param  \App\Http\Requests\UpdateJobStatusesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobStatusesRequest $request, $id)
    {
        $jobstatus = JobStatus::findOrFail($id);
        $jobstatus->update($request->all());

        return redirect()->route('job_statuses.index');
    }

    /**
     * Display JobStatus.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobstatus = JobStatus::findOrFail($id);
        return view('admin.job_statuses.show', compact('jobstatus'));
    }

    /**
     * Remove JobStatus from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobstatus = JobStatus::findOrFail($id);
        $jobstatus->delete();

        return redirect()->route('job_statuses.index');
    }

    /**
     * Delete all selected JobStatus at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = JobStatus::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
