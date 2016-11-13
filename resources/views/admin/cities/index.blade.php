@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Cities</h3>

    <p>
        <a href="{{ route('cities.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($cities) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Name Of City</th>
                    <th>Its state</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($cities) > 0)
                        @foreach ($cities as $city)
                            <tr data-entry-id="{{ $city->id }}">
                                <td></td>
                                <td>{{ $city->name }}</td>
                        <td>{{ $city->country->name or '' }}</td>
                        
                                <td>
                                    <a href="{{ route('cities.show',[$city->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('cities.edit',[$city->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['cities.destroy', $city->id])) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('cities.mass_destroy') }}';
    </script>
@endsection