@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Prorfolio</h3>

    <p>
        <a href="{{ route('prorfolios.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($prorfolios) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Name</th>
                    <th>Url</th>
                    <th>Image</th>
                    <th>Type</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($prorfolios) > 0)
                        @foreach ($prorfolios as $prorfolio)
                            <tr data-entry-id="{{ $prorfolio->id }}">
                                <td></td>
                                <td>{{ $prorfolio->name }}</td>
                        <td>{{ $prorfolio->url }}</td>
                        <td>@if($prorfolio->image!= '')<img src="{{ asset('uploads/thumb/'.$prorfolio->image) }}">@endif</td>
                        <td>{{ $prorfolio->type->name or '' }}</td>
                        
                                <td>
                                    <a href="{{ route('prorfolios.show',[$prorfolio->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('prorfolios.edit',[$prorfolio->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['prorfolios.destroy', $prorfolio->id])) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('prorfolios.mass_destroy') }}';
    </script>
@endsection