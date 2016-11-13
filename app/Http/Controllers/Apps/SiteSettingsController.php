<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\SiteSetting;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSiteSettingsRequest;
use App\Http\Requests\UpdateSiteSettingsRequest;

class SiteSettingsController extends Controller
{

    /**
     * Display a listing of SiteSetting.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $site_settings = SiteSetting::all();

        return view('admin.site_settings.index', compact('site_settings'));
    }

    /**
     * Show the form for creating new SiteSetting.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'languages' => \App\Language::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        return view('admin.site_settings.create', compact('') + $relations);
    }

    /**
     * Store a newly created SiteSetting in storage.
     *
     * @param  \App\Http\Requests\StoreSiteSettingsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSiteSettingsRequest $request)
    {
        SiteSetting::create($request->all());

        return redirect()->route('site_settings.index');
    }

    /**
     * Show the form for editing SiteSetting.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'languages' => \App\Language::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        
        $sitesetting = SiteSetting::findOrFail($id);
        return view('admin.site_settings.edit', compact('sitesetting', '') + $relations);
    }

    /**
     * Update SiteSetting in storage.
     *
     * @param  \App\Http\Requests\UpdateSiteSettingsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSiteSettingsRequest $request, $id)
    {
        $sitesetting = SiteSetting::findOrFail($id);
        $sitesetting->update($request->all());

        return redirect()->route('site_settings.index');
    }

    /**
     * Display SiteSetting.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'languages' => \App\Language::get()->pluck('name', 'id')->prepend('Please select', ''),
            
        ];

        $sitesetting = SiteSetting::findOrFail($id);
        return view('admin.site_settings.show', compact('sitesetting') + $relations);
    }

    /**
     * Remove SiteSetting from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sitesetting = SiteSetting::findOrFail($id);
        $sitesetting->delete();

        return redirect()->route('site_settings.index');
    }

    /**
     * Delete all selected SiteSetting at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = SiteSetting::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
