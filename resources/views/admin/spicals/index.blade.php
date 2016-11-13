@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Spical</h3>

    <p>
        <a href="{{ route('spicals.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($spicals) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Specialty Name</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($spicals) > 0)
                        @foreach ($spicals as $spical)
                            <tr data-entry-id="{{ $spical->id }}">
                                <td></td>
                                <td>{{ $spical->name }}</td>
                        
                                <td>
                                    <a href="{{ route('spicals.show',[$spical->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('spicals.edit',[$spical->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['spicals.destroy', $spical->id])) !!}
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
        window.route_mass_crud_entries_destroy = '{{ route('spicals.mass_destroy') }}';
    </script>
@endsection