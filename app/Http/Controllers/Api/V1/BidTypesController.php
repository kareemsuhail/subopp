<?php

namespace App\Http\Controllers\Api\V1;

use App\BidType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBidTypesRequest;
use App\Http\Requests\UpdateBidTypesRequest;

class BidTypesController extends Controller
{
    public function index()
    {
        return BidType::all();
    }

    public function show($id)
    {
        return BidType::findOrFail($id);
    }

    public function update(UpdateBidTypesRequest $request, $id)
    {
        $bidtype = BidType::findOrFail($id);
        $bidtype->update($request->all());

        return $bidtype;
    }

    public function store(StoreBidTypesRequest $request)
    {
        $bidtype = BidType::create($request->all());

        return $bidtype;
    }

    public function destroy($id)
    {
        $bidtype = BidType::findOrFail($id);
        $bidtype->delete();
        return '';
    }
}
