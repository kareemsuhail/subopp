@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">People Say</h3>

    <p>
        <a href="{{ route('people_says.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($people_says) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Title</th>
                    <th>Job Title</th>
                    <th>Say</th>
                    <th>Image</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($people_says) > 0)
                        @foreach ($people_says as $people_say)
                            <tr data-entry-id="{{ $people_say->id }}">
                                <td></td>
                                <td>{{ $people_say->title }}</td>
                        <td>{{ $people_say->jobtitle }}</td>
                        <td>{{ $people_say->say }}</td>
                        <td>@if($people_say->image!= '')<img src="{{ asset('uploads/thumb/'.$people_say->image) }}">@endif</td>
                        
                                <td>
                                    <a href="{{ route('people_says.show',[$people_say->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('people_says.edit',[$people_say->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['people_says.destroy', $people_say->id])) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('people_says.mass_destroy') }}';
    </script>
@endsection