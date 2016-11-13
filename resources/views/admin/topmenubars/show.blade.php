
@extends('admin.layouts.app')

@section('admin.content')

    <h3 class="page-title">Top Bars</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Name Of Item</th>
                    <td>{{ $top_bar->title }}</td>
                        </tr><tr><th>Link Of Item</th>
                    <td>{{ $top_bar->Url }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('top_bars.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop