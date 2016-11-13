@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Team Members</h3>

    <p>
        <a href="{{ route('team_members.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($team_members) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Team</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($team_members) > 0)
                        @foreach ($team_members as $team_member)
                            <tr data-entry-id="{{ $team_member->id }}">
                                <td></td>
                                <td>{{ $team_member->team->name or '' }}</td>
                        
                                <td>
                                    <a href="{{ route('team_members.show',[$team_member->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('team_members.edit',[$team_member->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['team_members.destroy', $team_member->id])) !!}
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
        window.route_mass_crud_entries_destroy = '{{ route('team_members.mass_destroy') }}';
    </script>
@endsection