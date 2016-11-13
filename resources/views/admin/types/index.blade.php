@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Type</h3>

    <p>
        <a href="{{ route('types.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($types) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Type</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($types) > 0)
                        @foreach ($types as $type)
                            <tr data-entry-id="{{ $type->id }}">
                                <td></td>
                                <td>{{ $type->name }}</td>
                        
                                <td>
                                    <a href="{{ route('types.show',[$type->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('types.edit',[$type->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['types.destroy', $type->id])) !!}
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
        window.route_mass_crud_entries_destroy = '{{ route('types.mass_destroy') }}';
    </script>
@endsection