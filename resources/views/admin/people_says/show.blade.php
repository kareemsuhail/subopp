@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">People Say</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Title</th>
                    <td>{{ $people_say->title }}</td>
                        </tr><tr><th>Job Title</th>
                    <td>{{ $people_say->jobtitle }}</td>
                        </tr><tr><th>Say</th>
                    <td>{{ $people_say->say }}</td>
                        </tr><tr><th>Image</th>
                    <td>@if($people_say->image!= '')<img src="{{ asset('uploads/thumb/'.$people_say->image) }}">@endif</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('people_says.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop