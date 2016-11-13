@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Job Status</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Name Of Job Status</th>
                    <td>{{ $job_status->name }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('job_statuses.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop