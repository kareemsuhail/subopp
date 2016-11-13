@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Language</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Language Name </th>
                    <td>{{ $language->name }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('languages.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop