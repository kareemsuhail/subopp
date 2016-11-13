<?php

namespace App\Http\Controllers\Api\V1;

use App\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJobsRequest;
use App\Http\Requests\UpdateJobsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class JobsController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        return Job::all();
    }

    public function show($id)
    {
        return Job::findOrFail($id);
    }

    public function update(UpdateJobsRequest $request, $id)
    {
        $request = $this->saveFiles($request->all());
        $job = Job::findOrFail($id);
        $job->update($request->all());

        return $job;
    }

    public function store(StoreJobsRequest $request)
    {
        $request = $this->saveFiles($request->all());
        $job = Job::create($request->all());

        return $job;
    }

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        return '';
    }
}
