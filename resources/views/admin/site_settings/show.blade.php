@extends('admin.layouts.app')

@section('admin.content')

    <h3 class="page-title">Site Setting</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>WebSite Name</th>
                    <td>{{ $site_setting->name }}</td>
                        </tr><tr><th>WebSite Language</th>
                    <td>{{ $site_setting->language->name or '' }}</td>
                        </tr><tr><th>Description</th>
                    <td>{{ $site_setting->meta_tag }}</td>
                        </tr><tr><th>WebSite Url</th>
                    <td>{{ $site_setting->url }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('site_settings.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop