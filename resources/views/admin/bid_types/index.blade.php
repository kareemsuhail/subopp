@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Bid Type</h3>

    <p>
        <a href="{{ route('bid_types.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($bid_types) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Bid Type</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($bid_types) > 0)
                        @foreach ($bid_types as $bid_type)
                            <tr data-entry-id="{{ $bid_type->id }}">
                                <td></td>
                                <td>{{ $bid_type->name }}</td>
                        
                                <td>
                                    <a href="{{ route('bid_types.show',[$bid_type->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('bid_types.edit',[$bid_type->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['bid_types.destroy', $bid_type->id])) !!}
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
        window.route_mass_crud_entries_destroy = '{{ route('bid_types.mass_destroy') }}';
    </script>
@endsection