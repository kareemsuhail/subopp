
@extends('admin.layouts.app')

@section('admin.content')

    <h3 class="page-title">Top Bars</h3>

   <p>

        <a href="{{ route('top_bars.create') }}" class="btn btn-success">Add new</a>

    </p>



    <div class="panel panel-default">

        <div class="panel-heading">

            List

        </div>



        <div class="panel-body">

            <table class="table table-bordered table-striped {{ count($top_bars) > 0 ? 'datatable' : '' }}">

                <thead>

                    <tr>

                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>

                        <th>Name</th>

                    <th>Url</th>

                    

                        <th>&nbsp;</th>

                    </tr>

                </thead>

                

                <tbody>

                    @if (count($top_bars) > 0)

                        @foreach ($top_bars as $menu_items_top)

                            <tr data-entry-id="{{ $menu_items_top->id }}">

                                <td></td>

                                <td>{{ $menu_items_top->title }}</td>

                        <td>{{ $menu_items_top->url }}</td>

                        

                                <td>

                                    <a href="{{ route('top_bars.show',[$menu_items_top->id]) }}" class="btn btn-xs btn-primary">View</a>

                                    <a href="{{ route('top_bars.edit',[$menu_items_top->id]) }}" class="btn btn-xs btn-info">Edit</a>

                                    {!! Form::open(array(

                'style' => 'display: inline-block;',

                'method' => 'DELETE',

                'onsubmit' => "return confirm('".trans("Are you sure?")."');",

                'route' => ['top_bars.destroy', $menu_items_top->id])) !!}

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

        window.route_mass_crud_entries_destroy = '{{ route('top_bars.mass_destroy') }}';

    </script>

@endsection