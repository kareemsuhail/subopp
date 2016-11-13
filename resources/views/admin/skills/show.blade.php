@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Skills</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Skill Name</th>
                    <td>{{ $skill->name }}</td>
                        </tr><tr><th>Specialty</th>
                    <td>{{ $skill->spical->name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('skills.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop