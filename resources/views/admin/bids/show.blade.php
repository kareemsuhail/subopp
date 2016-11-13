@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Bids</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Jobs have bid</th>
                    <td>{{ $bid->job->title or '' }}</td>
                        </tr><tr><th>Price</th>
                    <td>{{ $bid->price }}</td>
                        </tr><tr><th>Length</th>
                    <td>{{ $bid->length }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('bids.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop