@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Prorfolio</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Name</th>
                    <td>{{ $prorfolio->name }}</td>
                        </tr><tr><th>Url</th>
                    <td>{{ $prorfolio->url }}</td>
                        </tr><tr><th>Image</th>
                    <td>@if($prorfolio->image!= '')<img src="{{ asset('uploads/thumb/'.$prorfolio->image) }}">@endif</td>
                        </tr><tr><th>Type</th>
                    <td>{{ $prorfolio->type->name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('prorfolios.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop