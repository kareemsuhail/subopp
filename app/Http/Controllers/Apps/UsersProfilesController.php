<?php

namespace App\Http\Controllers\Apps;
use App\Http\Controllers\Apps\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUsersProfilesRequest;
use App\Http\Requests\UpdateUsersProfilesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Jobskill;
use Auth;
use App\Job;
use App\UsersProfile;
use App\user;
use App\Spical;
use App\Skill;
use App\Team;
use App\Userskill;
use App\Bid;
use App\Country;
use App\Prorfolio;
use Response;


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

    public function myprofile()
    {
        

        $sitetitle=Auth::user()->name;
        $spicals=Spical::get();
        $skills=Skill::get();
        $userid=Auth::user()->id;
        $UserProfile =UsersProfile::where('user_id','=',$userid)->first();
        $UserProfileSkillsIds=$UserProfile->userProfileSkills->pluck('id','name');
        $prorfolios = Prorfolio::get()->where('user_id','=',$userid);
        $Bid=Bid::where('user_id','=',$userid)->get();
        $bids=$Bid->count();
        $userspical=Spical::get()->where('id','=',$UserProfile->spical_id)->first();
        $waitingbids=$Bid->where('bidtype_id','=','1')->count(); //بانتظار الموافقة
        $finishbids=$Bid->where('bidtype_id','=','2')->count(); //جاهزة
        $endbids=$Bid->where('bidtype_id','=','3')->count(); //منتهية        
        $excludedbids=$Bid->where('bidtype_id','=','4')->count(); //مستبعدة


        return view('apps.userprofile', compact('UserProfileSkillsIds','sitetitle','skills','spicals','UserProfile','users','userspical','bids','waitingbids','finishbids','endbids','excludedbids','prorfolios'));
    }
    public function updateskillsbyajax(Request $request){

        $id = $request->get('pk');
        $skills = $request->get('value');
        $skill=explode(',', $skills);

        foreach ($skill as $value) {
        $userskill=Userskill::create([
            'users_profile_id'=>$id,
            'skill_id'=>$value
            ]);
       // $userskill->save();
        }
                    return "ok";  

    }
    /**
     * Show the form for creating new UsersProfile.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userid=Auth::user()->id;
        $profile=UsersProfile::where('user_id','=',$userid)->count();
        if($profile != 0 )
          return redirect('app/');
        $relations = [
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),

        ];
        $countres = Country::get(); 
        $spicals  = Spical::get();   

        
        return view('apps.creatprofile', compact('countres','spicals') + $relations);
    }
    
    public function showskills($id)
    {
         $results = Skill::where('spical_id','=', $id)->pluck('name', 'id');
         return Response::make($results);

    }
    /**
     * Store a newly created UsersProfile in storage.
     *
     * @param  \App\Http\Requests\StoreUsersProfilesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $skills=$request->get('skills');
        $request = $this->saveFiles($request);
        $UsersProfile=UsersProfile::create($request->all());

        foreach ($skills as $value) {
        Userskill::create([
            'users_profile_id'=>$UsersProfile->id,
            'skill_id'=>$value
            ]);
        }
        //dd($request->get('city_id'));
        return redirect()->route('jobs.index');
        //return back();

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

        
        $usersprofile = UsersProfile::findOrFail($id);
        return view('admin.users_profiles.edit', compact('usersprofile', '') + $relations);
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

   public function updatebyajax(Request $request)
    {   

            // catching pk id:
            $id = $request->get('pk');

            // catching the new comment
           // $comment = $request->get('value');

         $updateUsersProfile=UsersProfile::find($request->get('pk'))->update([$request->get('name') => $request->get('value')]);
  
                    return 'تم التعديل بنجاح';     
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

        $usersprofile = UsersProfile::findOrFail($id);
        return view('admin.users_profiles.show', compact('usersprofile') + $relations);
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
