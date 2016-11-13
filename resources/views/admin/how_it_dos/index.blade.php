@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">How It Do</h3>

    <p>
        <a href="{{ route('how_it_dos.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($how_it_dos) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Title</th>
                    <th>Short Info</th>
                    <th>description</th>
                    <th>Image</th>
                    <th>Video Url</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($how_it_dos) > 0)
                        @foreach ($how_it_dos as $how_it_do)
                            <tr data-entry-id="{{ $how_it_do->id }}">
                                <td></td>
                                <td>{{ $how_it_do->title }}</td>
                        <td>{{ $how_it_do->short_info }}</td>
                        <td>{{ $how_it_do->Description }}</td>
                        <td>@if($how_it_do->image!= '')<img src="{{ asset('uploads/thumb/'.$how_it_do->image) }}">@endif</td>
                        <td>{{ $how_it_do->video_url }}</td>
                        
                                <td>
                                    <a href="{{ route('how_it_dos.show',[$how_it_do->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('how_it_dos.edit',[$how_it_do->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['how_it_dos.destroy', $how_it_do->id])) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('how_it_dos.mass_destroy') }}';
    </script>
@endsection