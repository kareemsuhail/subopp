@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Job Status</h3>

    <p>
        <a href="{{ route('job_statuses.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($job_statuses) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Name Of Job Status</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($job_statuses) > 0)
                        @foreach ($job_statuses as $job_status)
                            <tr data-entry-id="{{ $job_status->id }}">
                                <td></td>
                                <td>{{ $job_status->name }}</td>
                        
                                <td>
                                    <a href="{{ route('job_statuses.show',[$job_status->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('job_statuses.edit',[$job_status->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['job_statuses.destroy', $job_status->id])) !!}
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
        window.route_mass_crud_entries_destroy = '{{ route('job_statuses.mass_destroy') }}';
    </script>
@endsection