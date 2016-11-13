@extends('admin.layouts.app')

@section('admin.content')
 
 <div class="panel panel-default">

        <div class="panel-heading">

            View

        </div>

        

        <div class="panel-body">

            <div class="row">

                <div class="col-md-6">

                    <table class="table table-bordered table-striped datatable">

                        <tr><th>Title</th>

                    <td>{{ $slider->title }}</td>

                        </tr><tr><th>Short Info</th>

                    <td>{{ $slider->short_info }}</td>

                        </tr><tr><th>Description</th>

                    <td>{{ $slider->description }}</td>

                        </tr><tr><th>Image</th>

                    <td>@if($slider->image!= '')<img src="{{ asset('uploads/thumb/'.$slider->image) }}">@endif</td>

                        </tr><tr><th>Video Url</th>

                    <td>{{ $slider->video_url }}</td>

                        </tr><tr><th>Active</th>

                    <td>{{ $slider->status->name or '' }}</td>

                        </tr>

                    </table>

                </div>

            </div>



            <p>&nbsp;</p>



            <a href="{{ route('sliders.index') }}" class="btn btn-default">Back to list</a>

        </div>

    </div>

@stop