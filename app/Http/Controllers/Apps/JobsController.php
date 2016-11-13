<?php

namespace App\Http\Controllers\Apps;
use App\Http\Controllers\Apps\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\StoreJobsRequest;
use App\Http\Requests\UpdateJobsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Jobskill;
use Auth;
use App\Job;
use App\UsersProfile;
use App\user;
use App\Spical;
use App\Skill;
use App\Team;
use App\Bid;
class JobsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Job.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sitetitle="الوظائف";
        $spicals=Spical::get();
        $skills=Skill::get();
        $userid=Auth::user()->id;
        $UserProfile =UsersProfile::where('user_id',$userid)->first();
        $jobs=Job::orderBy('id', 'desc')->paginate(5);
        $jobs->setPath('jobs');
        $bids=Bid::where([
            ['user_id', '=', $userid],
            ])->get();
        $bid=array_pluck($bids,'job_id');
          
        return view('apps.jobs', compact('sitetitle','skills','spicals','UserProfile','jobs','bid'));
        }


   public function myjobs()
    {
        $sitetitle="وظائفي";
        $spicals=Spical::get();
        $skills=Skill::get();
        $userid=Auth::user()->id;
        $UserProfile =UsersProfile::where('user_id',$userid)->first();
        $jobs=Job::where('user_id',$userid)->orderBy('id', 'desc')->paginate(5);
        $jobs->setPath('myjobs');
        return view('apps.myjobs', compact('sitetitle','skills','spicals','UserProfile','jobs'));
        }
   public function mybids()
    {
        $sitetitle="عروضي";
        $spicals=Spical::get();
        $skills=Skill::get();
        $userid=Auth::user()->id;
        $UserProfile =UsersProfile::where('user_id',$userid)->first();
        $jobs=Job::where('user_id',$userid)->orderBy('id', 'desc')->paginate(5);
        $jobs->setPath('myjobs');
        $Bid=Bid::where('user_id','=',$userid)->get();

        $waitingbids=$Bid->where('bidtype_id','=','1'); //بانتظار الموافقة
        $waitinggobs=Job::whereIn('id',array_pluck($waitingbids ,'job_id'))->get();

        $finishbids=$Bid->where('bidtype_id','=','2'); //جاهزة
        $finishjobs=Job::whereIn('id',array_pluck($finishbids ,'job_id'))->get();

        $endbids=$Bid->where('bidtype_id','=','3'); //منتهية  
        $endjobs=Job::whereIn('id',array_pluck($endbids ,'job_id'))->get();

        $excludedbids=$Bid->where('bidtype_id','=','4'); //مستبعدة
        $excludedjobs=Job::whereIn('id',array_pluck($excludedbids ,'job_id'))->get();

        return view('apps.mybids', compact('sitetitle','skills','spicals','UserProfile','waitinggobs','finishjobs','endjobs','excludedjobs'));
        }


    /**
     * Show the form for creating new Job.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
        ];

        return view('admin.jobs.create', compact('') + $relations);
    }

    /**
     * Store a newly created Job in storage.
     *
     * @param  \App\Http\Requests\StoreJobsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $skills=$request->get('skills');
       
        $request = $this->saveFiles($request);
        $job=Job::create($request->all());

        foreach ($skills as $value) {
        Jobskill::create([
            'job_id'=>$job->id,
            'skill_id'=>$value
            ]);
        }
        //return redirect()->route('jobs.index');
        return back();
    }

    /**
     * Show the form for editing Job.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
        ];

        
        $job = Job::findOrFail($id);
        return view('admin.jobs.edit', compact('job', '') + $relations);
    }

    /**
     * Update Job in storage.
     *
     * @param  \App\Http\Requests\UpdateJobsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobsRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $job = Job::findOrFail($id);
        $job->update($request->all());

        return redirect()->route('jobs.index');
    }

    /**
     * Display Job.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        $job = Job::findOrFail($id);
        return view('admin.jobs.show', compact('job') + $relations);
    }

    /**
     * Remove Job from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('jobs.index');
    }

    /**
     * Delete all selected Job at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Job::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
