<?php

namespace App\Http\Controllers\Apps;
use App\Http\Controllers\Apps\Controller;

use App\Team;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use App\UsersProfile;
use App\Spical;
use App\Skill;
use Auth;

class UsersController extends Controller
{

    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::where('user_id',Auth::user()->id)->get();
        $sitetitle="الأعضاء";
        $spicals=Spical::get();
        $skills=Skill::get();
        $userid=Auth::user()->id;
        $UserProfile =UsersProfile::where('user_id',$userid)->first();
        $users=UsersProfile::orderBy('id', 'desc')->paginate(5);
        $users->setPath('users');

        return view('apps.users', compact('sitetitle','skills','spicals','UserProfile','users','team'));

    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'roles' => \App\Role::get()->pluck('title', 'id')->prepend('Please select', ''),
            
        ];

        
        return view('admin.users.create', compact('') + $relations);
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsersRequest $request)
    {
        User::create($request->all());

        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'roles' => \App\Role::get()->pluck('title', 'id')->prepend('Please select', ''),
            
        ];

        
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user', '') + $relations);
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsersRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('users.index');
    }

    /**
     * Display User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'roles' => \App\Role::get()->pluck('title', 'id')->prepend('Please select', ''),
            
        ];

        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user') + $relations);
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = User::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
