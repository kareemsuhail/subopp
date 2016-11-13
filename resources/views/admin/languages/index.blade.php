@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Language</h3>

    <p>
        <a href="{{ route('languages.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($languages) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Language Name </th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($languages) > 0)
                        @foreach ($languages as $language)
                            <tr data-entry-id="{{ $language->id }}">
                                <td></td>
                                <td>{{ $language->name }}</td>
                        
                                <td>
                                    <a href="{{ route('languages.show',[$language->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('languages.edit',[$language->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['languages.destroy', $language->id])) !!}
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
        window.route_mass_crud_entries_destroy = '{{ route('languages.mass_destroy') }}';
    </script>
@endsection