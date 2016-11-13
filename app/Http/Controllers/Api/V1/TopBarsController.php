<?php

namespace App\Http\Controllers\Api\V1;

use App\TopBar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTopBarsRequest;
use App\Http\Requests\UpdateTopBarsRequest;

class TopBarsController extends Controller
{
    public function index()
    {
        return TopBar::all();
    }

    public function show($id)
    {
        return TopBar::findOrFail($id);
    }

    public function update(UpdateTopBarsRequest $request, $id)
    {
        $topbar = TopBar::findOrFail($id);
        $topbar->update($request->all());

        return $topbar;
    }

    public function store(StoreTopBarsRequest $request)
    {
        $topbar = TopBar::create($request->all());

        return $topbar;
    }

    public function destroy($id)
    {
        $topbar = TopBar::findOrFail($id);
        $topbar->delete();
        return '';
    }
}
