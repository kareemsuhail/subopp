<?php

namespace App\Http\Controllers\Api\V1;

use App\UsersProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUsersProfilesRequest;
use App\Http\Requests\UpdateUsersProfilesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class UsersProfilesController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        return UsersProfile::all();
    }

    public function show($id)
    {
        return UsersProfile::findOrFail($id);
    }

    public function update(UpdateUsersProfilesRequest $request, $id)
    {
        $request = $this->saveFiles($request->all());
        $usersprofile = UsersProfile::findOrFail($id);
        $usersprofile->update($request->all());

        return $usersprofile;
    }

    public function store(StoreUsersProfilesRequest $request)
    {
        $request = $this->saveFiles($request->all());
        $usersprofile = UsersProfile::create($request->all());

        return $usersprofile;
    }

    public function destroy($id)
    {
        $usersprofile = UsersProfile::findOrFail($id);
        $usersprofile->delete();
        return '';
    }
}
