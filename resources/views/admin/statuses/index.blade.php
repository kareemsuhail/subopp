@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Status</h3>

    <p>
        <a href="{{ route('statuses.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($statuses) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Name Of Status</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($statuses) > 0)
                        @foreach ($statuses as $status)
                            <tr data-entry-id="{{ $status->id }}">
                                <td></td>
                                <td>{{ $status->name }}</td>
                        
                                <td>
                                    <a href="{{ route('statuses.show',[$status->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('statuses.edit',[$status->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['statuses.destroy', $status->id])) !!}
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
        window.route_mass_crud_entries_destroy = '{{ route('statuses.mass_destroy') }}';
    </script>
@endsection