@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Jobs</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Name oF the Jop</th>
                    <td>{{ $job->title }}</td>
                        </tr><tr><th>User Added</th>
                    <td>{{ $job->user->name or '' }}</td>
                        </tr><tr><th>Price</th>
                    <td>{{ $job->price }}</td>
                        </tr><tr><th>Length</th>
                    <td>{{ $job->length }}</td>
                        </tr><tr><th>Description</th>
                    <td>{{ $job->description }}</td>
                        </tr><tr><th>Specialty</th>
                    <td>{{ $job->specialty }}</td>
                        </tr><tr><th>Skills</th>
                    <td>{{ $job->skills }}</td>
                        </tr><tr><th>File</th>
                    <td><a href="{{ asset('uploads/'.$job->file) }}">Download file</a></td>
                        </tr><tr><th>End Date</th>
                    <td>{{ $job->end_date }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('jobs.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop