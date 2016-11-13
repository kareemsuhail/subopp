@extends('admin.layouts.app')

@section('admin.content')

    <h3 class="page-title">Site Setting</h3>

    <p>
        <a href="{{ route('site_settings.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($site_settings) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>WebSite Name</th>
                    <th>WebSite Language</th>
                    <th>Description</th>
                    <th>WebSite Url</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($site_settings) > 0)
                        @foreach ($site_settings as $site_setting)
                            <tr data-entry-id="{{ $site_setting->id }}">
                                <td></td>
                                <td>{{ $site_setting->name }}</td>
                        <td>{{ $site_setting->language->name or '' }}</td>
                        <td>{{ $site_setting->meta_tag }}</td>
                        <td>{{ $site_setting->url }}</td>
                        
                                <td>
                                    <a href="{{ route('site_settings.show',[$site_setting->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('site_settings.edit',[$site_setting->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['site_settings.destroy', $site_setting->id])) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('site_settings.mass_destroy') }}';
    </script>
@endsection