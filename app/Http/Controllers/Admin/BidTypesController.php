<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\BidType;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBidTypesRequest;
use App\Http\Requests\UpdateBidTypesRequest;

class BidTypesController extends Controller
{

    /**
     * Display a listing of BidType.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bid_types = BidType::all();

        return view('admin.bid_types.index', compact('bid_types'));
    }

    /**
     * Show the form for creating new BidType.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.bid_types.create', compact(''));
    }

    /**
     * Store a newly created BidType in storage.
     *
     * @param  \App\Http\Requests\StoreBidTypesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBidTypesRequest $request)
    {
        BidType::create($request->all());

        return redirect()->route('bid_types.index');
    }

    /**
     * Show the form for editing BidType.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $bid_type = BidType::findOrFail($id);
        return view('admin.bid_types.edit', compact('bid_type', ''));
    }

    /**
     * Update BidType in storage.
     *
     * @param  \App\Http\Requests\UpdateBidTypesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBidTypesRequest $request, $id)
    {
        $bidtype = BidType::findOrFail($id);
        $bidtype->update($request->all());

        return redirect()->route('bid_types.index');
    }

    /**
     * Display BidType.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bidtype = BidType::findOrFail($id);
        return view('admin.bid_types.show', compact('bidtype'));
    }

    /**
     * Remove BidType from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bidtype = BidType::findOrFail($id);
        $bidtype->delete();

        return redirect()->route('bid_types.index');
    }

    /**
     * Delete all selected BidType at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = BidType::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
