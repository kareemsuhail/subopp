@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Teams</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Team Name</th>
                    <td>{{ $team->name }}</td>
                        </tr><tr><th>Team Image</th>
                    <td>@if($team->logo!= '')<img src="{{ asset('uploads/thumb/'.$team->logo) }}">@endif</td>
                        </tr><tr><th>Description</th>
                    <td>{{ $team->description }}</td>
                        </tr><tr><th>Specialty</th>
                    <td>{{ $team->spical->name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('teams.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop