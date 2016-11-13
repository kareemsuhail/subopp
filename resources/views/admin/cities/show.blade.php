@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Cities</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Name Of City</th>
                    <td>{{ $city->name }}</td>
                        </tr><tr><th>Its state</th>
                    <td>{{ $city->country->name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('cities.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop