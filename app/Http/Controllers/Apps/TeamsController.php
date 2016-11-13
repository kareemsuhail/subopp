<?php

namespace App\Http\Controllers\Apps;
use App\Http\Controllers\Apps\Controller;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTeamsRequest;
use App\Http\Requests\UpdateTeamsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\UsersProfile;
use App\user;
use App\Job;
use App\Spical;
use App\Skill;
use App\Team;
use App\Teamskill;

class TeamsController extends Controller
{
    use FileUploadTrait;


    /**
     * Display a listing of Team.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$team = Team::get();
        $userid=Auth::user()->id;
        $UserProfile =UsersProfile::where('user_id',$userid)->first();
        $spicals=Spical::get();
        $skills=Skill::get();
        $sitetitle="الفرق";
        $teams=Team::orderBy('id', 'desc')->get();
        return view('apps.teams', compact('sitetitle','skills','spicals','UserProfile','teams'));


    }

 public function team($id)
    {
        $team = Team::findOrFail($id);
        $userid=Auth::user()->id;
        $UserProfile =UsersProfile::where('user_id',$userid)->first();
        $spicals=Spical::get();
        $skills=Skill::get();
        $sitetitle=$team->name;
        return view('apps.teamprofile', compact('sitetitle','skills','spicals','UserProfile','team'));


    }

 public function myteam()
    {
        
        $userid=Auth::user()->id;
        $team = Team::where('user_id',$userid )->orderBy('id', 'desc')->first();
        $UserProfile =UsersProfile::where('user_id',$userid)->first();
        $spicals=Spical::get();
        $skills=Skill::get();

        $sitetitle=$team->name;
        return view('apps.teamprofile', compact('sitetitle','skills','spicals','UserProfile','team'));


    }


    /**
     * Show the form for creating new Team.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'spicals' => \App\Spical::get()->pluck('name', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
        ];

        
        return view('admin.teams.create', compact('') + $relations);
    }

    /**
     * Store a newly created Team in storage.
     *
     * @param  \App\Http\Requests\StoreTeamsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
       
        $spical_id= implode(",", $request->get('spical_id'));

        $skills=$request->get('spical_id');

        $request = $this->saveFiles($request);
        $team=Team::create($request->all());

        foreach ($skills as $value) {
        Teamskill::create([
            'team_id'=>$team->id,
            'skill_id'=>$value
            ]);
        }

        return back();
    
        //return redirect()->route('teams.index');
    }

    /**
     * Show the form for editing Team.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'spicals' => \App\Spical::get()->pluck('name', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        $team = Team::findOrFail($id);
        return view('admin.teams.edit', compact('team', '') + $relations);
    }

    /**
     * Update Team in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamsRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $team = Team::findOrFail($id);
        $team->update($request->all());
        return redirect()->route('teams.index');
    }

    public function updatebyajax(Request $request)
    {   

            // catching pk id:
            $id = $request->get('pk');

            // catching the new comment
           // $comment = $request->get('value');

         $updateTeam=Team::find($request->get('pk'))->update([$request->get('name') => $request->get('value')]);
  
                    return 'تم التعديل بنجاح';     
    }

    /**
     * Display Team.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'spicals' => \App\Spical::get()->pluck('name', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        $team = Team::findOrFail($id);
        return view('admin.teams.show', compact('team') + $relations);
    }

    /**
     * Remove Team from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->route('teams.index');
    }

    /**
     * Delete all selected Team at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Team::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
