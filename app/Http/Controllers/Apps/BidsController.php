<?php

namespace App\Http\Controllers\Apps;
use App\Http\Controllers\Apps\Controller;

use App\Bid;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBidsRequest;
use App\Http\Requests\UpdateBidsRequest;

use App\Jobskill;
use Auth;
use App\Job;
use App\UsersProfile;
use App\user;
use App\Spical;
use App\Skill;
use App\Team;

class BidsController extends Controller
{

    /**
     * Display a listing of Bid.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bids = Bid::all();

        return view('admin.bids.index', compact('bids'));
    }

    /**
     * Show the form for creating new Bid.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'jobs' => \App\Job::get()->pluck('title', 'id')->prepend('Please select', ''),
            'types' => \App\Type::get()->pluck('name', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            'teams' => \App\Team::get()->pluck('name', 'id')->prepend('Please select', ''),
            'statuses' => \App\Status::get()->pluck('name', 'id')->prepend('Please select', ''),
            'bidtypes' => \App\BidType::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        return view('admin.bids.create', compact('') + $relations);
    }

    public function bids($id)
    {

        $relations = [
            'jobs' => \App\Job::get()->pluck('title', 'id')->prepend('Please select', ''),
            'types' => \App\Type::get()->pluck('name', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            'teams' => \App\Team::get()->pluck('name', 'id')->prepend('Please select', ''),
            'statuses' => \App\Status::get()->pluck('name', 'id')->prepend('Please select', ''),
            'bidtypes' => \App\BidType::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        $bids = Bid::where('job_id',$id)->get();

        $sitetitle="العروض المقدمة";
        $spicals=Spical::get();
        $skills=Skill::get();
        $userid=Auth::user()->id;
        $UserProfile =UsersProfile::where('user_id',$userid)->first();
        return view('apps.bids', compact('sitetitle','skills','spicals','UserProfile','jobs','bids')+ $relations);
    }
    /**
     * Store a newly created Bid in storage.
     *
     * @param  \App\Http\Requests\StoreBidsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $inputs = $request->except('_method', '_token');
        $bids=Bid::where([
            ['user_id','=',$request->user_id],
            ['job_id','=',$request->job_id]
            ])->get()->first();
        if (!$bids) {
        $userbid=Bid::firstOrNew($inputs);
        $userbid->save();  
        return redirect()->back()->with('sucsessmsg', 'لقد تم اضافة العرض بنجاح');
            //return back()->withErrors([ 'لقد قمت بتقديم عرض لهذه الوظيفة من قبل ','لقد تم اضافة العرض بنجاح']);
        }else {
            return redirect()->back()->with('erorrmsg', 'لقد قمت بتقديم عرض لهذه الوظيفة من قبل ');
            //return back()->withErrors([ 'لقد قمت بتقديم عرض لهذه الوظيفة من قبل ','لقد تم اضافة العرض بنجاح']);
            
        }
       
      

       
    }

    /**
     * Show the form for editing Bid.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'jobs' => \App\Job::get()->pluck('title', 'id')->prepend('Please select', ''),
            'types' => \App\Type::get()->pluck('name', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            'teams' => \App\Team::get()->pluck('name', 'id')->prepend('Please select', ''),
            'statuses' => \App\Status::get()->pluck('name', 'id')->prepend('Please select', ''),
            'bidtypes' => \App\BidType::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        $bid = Bid::findOrFail($id);
        return view('admin.bids.edit', compact('bid', '') + $relations);
    }

    /**
     * Update Bid in storage.
     *
     * @param  \App\Http\Requests\UpdateBidsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBidsRequest $request, $id)
    {
        $bid = Bid::findOrFail($id);
        $bid->update($request->all());

        return redirect()->route('bids.index');
    }

    /**
     * Display Bid.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'jobs' => \App\Job::get()->pluck('title', 'id')->prepend('Please select', ''),
            'types' => \App\Type::get()->pluck('name', 'id')->prepend('Please select', ''),
            'users' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
            'teams' => \App\Team::get()->pluck('name', 'id')->prepend('Please select', ''),
            'statuses' => \App\Status::get()->pluck('name', 'id')->prepend('Please select', ''),
            'bidtypes' => \App\BidType::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        $bid = Bid::findOrFail($id);
        return view('admin.bids.show', compact('bid') + $relations);
    }

    /**
     * Remove Bid from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bid = Bid::findOrFail($id);
        $bid->delete();

        return redirect()->route('bids.index');
    }

    /**
     * Delete all selected Bid at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Bid::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
