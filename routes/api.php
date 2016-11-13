<?php

    Route::group(['prefix' => '/api/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

        Route::resource('languages', 'LanguagesController');

        Route::resource('site_settings', 'SiteSettingsController');

        Route::resource('sliders', 'SlidersController');

        Route::resource('how_it_dos', 'HowItDosController');

        Route::resource('people_says', 'PeopleSaysController');

        Route::resource('countries', 'CountriesController');

        Route::resource('cities', 'CitiesController');

        Route::resource('statuses', 'StatusesController');

        Route::resource('types', 'TypesController');

        Route::resource('bid_types', 'BidTypesController');

        Route::resource('spicals', 'SpicalsController');

        Route::resource('skills', 'SkillsController');

        Route::resource('genders', 'GendersController');

        Route::resource('teams', 'TeamsController');

        Route::resource('prorfolios', 'ProrfoliosController');

        Route::resource('team_members', 'TeamMembersController');

        Route::resource('jobs', 'JobsController');

        Route::resource('bids', 'BidsController');

        Route::resource('recruits', 'RecruitsController');

        Route::resource('users_profiles', 'UsersProfilesController');

        Route::resource('top_bars', 'TopBarsController');

});
