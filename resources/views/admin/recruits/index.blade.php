@extends('admin.layouts.app')

@section('admin.content')

    <h3 class="page-title">Recruit</h3>

    <p>
        <a href="{{ route('recruits.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($recruits) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Jobs have bid</th>
                    <th>End Date</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($recruits) > 0)
                        @foreach ($recruits as $recruit)
                            <tr data-entry-id="{{ $recruit->id }}">
                                <td></td>
                                <td>{{ $recruit->job->title or '' }}</td>
                        <td>{{ $recruit->end_date }}</td>
                        
                                <td>
                                    <a href="{{ route('recruits.show',[$recruit->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('recruits.edit',[$recruit->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['recruits.destroy', $recruit->id])) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('recruits.mass_destroy') }}';
    </script>
@endsection