@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Bids</h3>

    <p>
        <a href="{{ route('bids.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($bids) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Jobs have bid</th>
                    <th>Price</th>
                    <th>Length</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($bids) > 0)
                        @foreach ($bids as $bid)
                            <tr data-entry-id="{{ $bid->id }}">
                                <td></td>
                                <td>{{ $bid->job->title or '' }}</td>
                        <td>{{ $bid->price }}</td>
                        <td>{{ $bid->length }}</td>
                        
                                <td>
                                    <a href="{{ route('bids.show',[$bid->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('bids.edit',[$bid->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['bids.destroy', $bid->id])) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('bids.mass_destroy') }}';
    </script>
@endsection