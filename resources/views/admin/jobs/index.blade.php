@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Jobs</h3>

    <p>
        <a href="{{ route('jobs.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($jobs) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Name oF the Jop</th>
                    <th>User Added</th>
                    <th>Price</th>
                    <th>Length</th>
                    <th>Description</th>
                    <th>File</th>
                    <th>End Date</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($jobs) > 0)
                        @foreach ($jobs as $job)
                            <tr data-entry-id="{{ $job->id }}">
                                <td></td>
                                <td>{{ $job->title }}</td>
                                <td>{{ $job->user->name or '' }}</td>
                                <td>{{ $job->price }}</td>
                                <td>{{ $job->length }}</td>
                                <td>{{ $job->description }}</td>

                                <td><a href="{{ asset('uploads/'.$job->file) }}">Download file</a></td>
                                <td>{{ $job->end_date }}</td>
                        
                                <td>
                                    <a href="{{ route('jobs.show',[$job->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('jobs.edit',[$job->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['jobs.destroy', $job->id])) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('jobs.mass_destroy') }}';
    </script>
@endsection