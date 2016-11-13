@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Teams</h3>

    <p>
        <a href="{{ route('teams.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($teams) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Team Name</th>
                    <th>Team Image</th>
                    <th>Description</th>
                    <th>Specialty</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($teams) > 0)
                        @foreach ($teams as $team)
                            <tr data-entry-id="{{ $team->id }}">
                                <td></td>
                                <td>{{ $team->name }}</td>
                        <td>@if($team->logo!= '')<img src="{{ asset('uploads/thumb/'.$team->logo) }}">@endif</td>
                        <td>{{ $team->description }}</td>
                        <td>{{ $team->spical->name or '' }}</td>
                        
                                <td>
                                    <a href="{{ route('teams.show',[$team->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('teams.edit',[$team->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['teams.destroy', $team->id])) !!}
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
        window.route_mass_crud_entries_destroy = '{{ route('teams.mass_destroy') }}';
    </script>
@endsection