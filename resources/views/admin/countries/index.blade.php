@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Countries</h3>

    <p>
        <a href="{{ route('countries.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($countries) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Name Of Country</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($countries) > 0)
                        @foreach ($countries as $country)
                            <tr data-entry-id="{{ $country->id }}">
                                <td></td>
                                <td>{{ $country->name }}</td>
                        
                                <td>
                                    <a href="{{ route('countries.show',[$country->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('countries.edit',[$country->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['countries.destroy', $country->id])) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('countries.mass_destroy') }}';
    </script>
@endsection