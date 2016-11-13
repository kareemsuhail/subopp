@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Gender</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Gender</th>
                    <td>{{ $gender->name }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('genders.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop