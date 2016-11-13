@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Users Profiles</h3>

    <p>
        <a href="{{ route('users_profiles.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($users_profiles) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>User</th>
                    <th>Job Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Birth Day</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($users_profiles) > 0)
                        @foreach ($users_profiles as $users_profile)
                            <tr data-entry-id="{{ $users_profile->id }}">
                                <td></td>
                                <td>{{ $users_profile->user->name or '' }}</td>
                        <td>{{ $users_profile->jobtitle }}</td>
                        <td>{{ $users_profile->description }}</td>
                        <td>@if($users_profile->image!= '')<img src="{{ asset('uploads/thumb/'.$users_profile->image) }}">@endif</td>
                        <td>{{ $users_profile->birthday }}</td>
                        
                                <td>
                                    <a href="{{ route('users_profiles.show',[$users_profile->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('users_profiles.edit',[$users_profile->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['users_profiles.destroy', $users_profile->id])) !!}
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
        window.route_mass_crud_entries_destroy = '{{ route('users_profiles.mass_destroy') }}';
    </script>
@endsection