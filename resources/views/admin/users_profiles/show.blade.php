@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Users Profiles</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>User</th>
                    <td>{{ $users_profile->user->name or '' }}</td>
                        </tr><tr><th>Job Title</th>
                    <td>{{ $users_profile->jobtitle }}</td>
                        </tr><tr><th>Description</th>
                    <td>{{ $users_profile->description }}</td>
                        </tr><tr><th>Image</th>
                    <td>@if($users_profile->image!= '')<img src="{{ asset('uploads/thumb/'.$users_profile->image) }}">@endif</td>
                        </tr><tr><th>Birth Day</th>
                    <td>{{ $users_profile->birthday }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('users_profiles.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop