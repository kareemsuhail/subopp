<?php

namespace App\Http\Controllers\Api\V1;

use App\Bid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBidsRequest;
use App\Http\Requests\UpdateBidsRequest;

class BidsController extends Controller
{
    public function index()
    {
        return Bid::all();
    }

    public function show($id)
    {
        return Bid::findOrFail($id);
    }

    public function update(UpdateBidsRequest $request, $id)
    {
        $bid = Bid::findOrFail($id);
        $bid->update($request->all());

        return $bid;
    }

    public function store(StoreBidsRequest $request)
    {
        $bid = Bid::create($request->all());

        return $bid;
    }

    public function destroy($id)
    {
        $bid = Bid::findOrFail($id);
        $bid->delete();
        return '';
    }
}
