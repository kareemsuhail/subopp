@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">How It Do</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Title</th>
                    <td>{{ $how_it_do->title }}</td>
                        </tr><tr><th>Short Info</th>
                    <td>{{ $how_it_do->short_info }}</td>
                        </tr><tr><th>description</th>
                    <td>{{ $how_it_do->Description }}</td>
                        </tr><tr><th>Image</th>
                    <td>@if($how_it_do->image!= '')<img src="{{ asset('uploads/thumb/'.$how_it_do->image) }}">@endif</td>
                        </tr><tr><th>Video Url</th>
                    <td>{{ $how_it_do->video_url }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('how_it_dos.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop