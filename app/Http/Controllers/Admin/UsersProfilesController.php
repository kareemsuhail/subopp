<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\UsersProfile;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsersProfilesRequest;
use App\Http\Requests\UpdateUsersProfilesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use DB;
class UsersProfilesController extends Controller
{
    use FileUploadTrait;


    /**
     * Display a listing of UsersProfile.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users_profiles = UsersProfile::all();

        return view('admin.users_profiles.index', compact('users_profiles'));
    }

    /**
     * Show the form for creating new UsersProfile.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        return view('admin.users_profiles.create', compact('') + $relations);
    }

    /**
     * Store a newly created UsersProfile in storage.
     *
     * @param  \App\Http\Requests\StoreUsersProfilesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsersProfilesRequest $request)
    {
        $request = $this->saveFiles($request);
        UsersProfile::create($request->all());

        return redirect()->route('users_profiles.index');
    }

    /**
     * Show the form for editing UsersProfile.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        $users_profile = UsersProfile::findOrFail($id);
        return view('admin.users_profiles.edit', compact('users_profile', '') + $relations);
    }

    /**
     * Update UsersProfile in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersProfilesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsersProfilesRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $usersprofile = UsersProfile::findOrFail($id);
        $usersprofile->update($request->all());

        return redirect()->route('users_profiles.index');
    }

    /**
     * Display UsersProfile.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        $users_profile = UsersProfile::findOrFail($id);
        return view('admin.users_profiles.show', compact('users_profile') + $relations);
    }

    /**
     * Remove UsersProfile from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usersprofile = UsersProfile::findOrFail($id);
        $usersprofile->delete();

        return redirect()->route('users_profiles.index');
    }

    /**
     * Delete all selected UsersProfile at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = UsersProfile::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
