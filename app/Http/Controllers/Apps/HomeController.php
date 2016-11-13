<?php

namespace App\Http\Controllers\Apps;
use App\Http\Controllers\Apps\Controller;
use App\Http\Requests;
use App\RequestsModel;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\UsersProfile;
use App\user;
use App\Job;
use App\Spical;
use App\Skill;
use App\Team;
use App\Bid;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
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
        $jobs->setPath('app/jobs');
        $bids=Bid::where([
            ['user_id', '=', $userid],
            ])->get();
        $bid=array_pluck($bids,'job_id');
        $profile=UsersProfile::where('user_id','=',$userid)->count();
        $requests = RequestsModel::where('reciver_id',Auth::user()->id)->where('status','pending')
            ->leftJoin('teams','teams.id','requests.team_id')
            ->leftJoin('users','users.id','requests.sender_id')->get();


        if($profile == 0 ){
          return redirect('app/creatprofile')->with('erorrmsg', 'يرجى ادخال بياناتك الشخصية حتى تستطيع استخدام مجتمع subopp ');
          }else{

        return view('apps.jobs', compact('sitetitle','skills','spicals','UserProfile','jobs','bid','requests'));
        }
    }



}
