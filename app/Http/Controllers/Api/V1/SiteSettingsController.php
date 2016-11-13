<?php

namespace App\Http\Controllers\Api\V1;

use App\SiteSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSiteSettingsRequest;
use App\Http\Requests\UpdateSiteSettingsRequest;

class SiteSettingsController extends Controller
{
    public function index()
    {
        return SiteSetting::all();
    }

    public function show($id)
    {
        return SiteSetting::findOrFail($id);
    }

    public function update(UpdateSiteSettingsRequest $request, $id)
    {
        $sitesetting = SiteSetting::findOrFail($id);
        $sitesetting->update($request->all());

        return $sitesetting;
    }

    public function store(StoreSiteSettingsRequest $request)
    {
        $sitesetting = SiteSetting::create($request->all());

        return $sitesetting;
    }

    public function destroy($id)
    {
        $sitesetting = SiteSetting::findOrFail($id);
        $sitesetting->delete();
        return '';
    }
}
