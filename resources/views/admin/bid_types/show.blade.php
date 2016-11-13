@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Bid Type</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Bid Type</th>
                    <td>{{ $bid_type->name }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('bid_types.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop