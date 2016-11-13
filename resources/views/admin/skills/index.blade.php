@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Skills</h3>

    <p>
        <a href="{{ route('skills.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($skills) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Skill Name</th>
                    <th>Specialty</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($skills) > 0)
                        @foreach ($skills as $skill)
                            <tr data-entry-id="{{ $skill->id }}">
                                <td></td>
                                <td>{{ $skill->name }}</td>
                        <td>{{ $skill->spical->name or '' }}</td>
                        
                                <td>
                                    <a href="{{ route('skills.show',[$skill->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('skills.edit',[$skill->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['skills.destroy', $skill->id])) !!}
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
        window.route_mass_crud_entries_destroy = '{{ route('skills.mass_destroy') }}';
    </script>
@endsection