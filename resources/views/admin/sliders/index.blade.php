@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Slider</h3>

    <p>
        <a href="{{ route('sliders.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($sliders) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Title</th>
                    <th>Image</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($sliders) > 0)
                        @foreach ($sliders as $slider)
                            <tr data-entry-id="{{ $slider->id }}">
                                <td></td>
                                <td>{{ $slider->title }}</td>
  
                        <td>@if($slider->image!= '')<img src="{{ asset('uploads/thumb/'.$slider->image) }}">@endif</td>
                        
                                <td>
                                    <a href="{{ route('sliders.show',[$slider->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('sliders.edit',[$slider->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['sliders.destroy', $slider->id])) !!}
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
        window.route_mass_crud_entries_destroy = '{{ route('sliders.mass_destroy') }}';
    </script>
@endsection