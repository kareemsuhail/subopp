<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\Bid;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBidsRequest;
use App\Http\Requests\UpdateBidsRequest;

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

    /**
     * Store a newly created Bid in storage.
     *
     * @param  \App\Http\Requests\StoreBidsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBidsRequest $request)
    {
        Bid::create($request->all());

        return redirect()->route('bids.index');
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
