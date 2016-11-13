<?php

Route::get('/', 'LandingPageController@index');
Route::get('/app', 'Apps\HomeController@index');
Route::get('/app/team/{id}', 'Apps\TeamsController@team');
Route::get('/app/myteam', 'Apps\TeamsController@myteam');
Route::post('/app/updatemyteam', 'Apps\TeamsController@updatebyajax');
Route::get('/app/teams', 'Apps\TeamsController@index');
Route::post('/app/create/job', 'Apps\JobsController@store');
Route::get('/app/selectcity/{id}', 'Apps\CitiesController@showbycountry');
Route::get('/app/selectskills/{id}', 'Apps\UsersProfilesController@showskills');
Route::get('/app/myjobs', 'Apps\JobsController@myjobs');
Route::get('/app/mybids','Apps\JobsController@mybids');
Route::get('/app/bids/{id}','Apps\BidsController@bids');
Route::post('/app/creat/team', 'Apps\TeamsController@store');
Route::get('/app/jobs','Apps\JobsController@index');
Route::get('/app/users', 'Apps\UsersController@index');
Route::get('/app/creatprofile', 'Apps\UsersProfilesController@create');
Route::post('/app/sroreprofile', 'Apps\UsersProfilesController@store');
Route::get('/app/myprofile', 'Apps\UsersProfilesController@myprofile');
Route::post('/app/updatemyprofile', 'Apps\UsersProfilesController@updatebyajax');
Route::post('/app/updatemyskillsprofile', 'Apps\UsersProfilesController@updateskillsbyajax');
Route::post('/app/creat/bid','Apps\BidsController@store');
Route::get('app/adduserprotfolio', 'Apps\ProrfoliosController@createuserprorfolio');
Route::post('app/storeuserprotfolio', 'Apps\ProrfoliosController@store');
Route::post('app/sendrequest', 'RequestController@store');


Route::get('/admin', function () {
    return redirect('/admin');
});
// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->get('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
$this->post('register', 'Auth\RegisterController@register')->name('auth.register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('auth.password.email');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

    Route::get('contact', 
  ['as' => 'contact', 'uses' => 'MailController@create']);
    Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'MailController@store']);
    


Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {
    Route::get('/', 'admin\HomeController@index');

    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('genral_magnes', 'Admin\GenralMagnesController');
    Route::post('genral_magnes_mass_destroy', ['uses' => 'Admin\GenralMagnesController@massDestroy', 'as' => 'genral_magnes.mass_destroy']);
    Route::resource('languages', 'Admin\LanguagesController');
    Route::post('languages_mass_destroy', ['uses' => 'Admin\LanguagesController@massDestroy', 'as' => 'languages.mass_destroy']);
    Route::resource('site_settings', 'Admin\SiteSettingsController');
    Route::post('site_settings_mass_destroy', ['uses' => 'Admin\SiteSettingsController@massDestroy', 'as' => 'site_settings.mass_destroy']);
    Route::resource('langing_pages', 'Admin\LangingPagesController');
    Route::post('langing_pages_mass_destroy', ['uses' => 'Admin\LangingPagesController@massDestroy', 'as' => 'langing_pages.mass_destroy']);
    Route::resource('sliders', 'Admin\SlidersController');
    Route::post('sliders_mass_destroy', ['uses' => 'Admin\SlidersController@massDestroy', 'as' => 'sliders.mass_destroy']);
    Route::resource('how_it_dos', 'Admin\HowItDosController');
    Route::post('how_it_dos_mass_destroy', ['uses' => 'Admin\HowItDosController@massDestroy', 'as' => 'how_it_dos.mass_destroy']);
    Route::resource('people_says', 'Admin\PeopleSaysController');
    Route::post('people_says_mass_destroy', ['uses' => 'Admin\PeopleSaysController@massDestroy', 'as' => 'people_says.mass_destroy']);
    Route::resource('constants', 'Admin\ConstantsController');
    Route::post('constants_mass_destroy', ['uses' => 'Admin\ConstantsController@massDestroy', 'as' => 'constants.mass_destroy']);
    Route::resource('countries', 'Admin\CountriesController');
    Route::post('countries_mass_destroy', ['uses' => 'Admin\CountriesController@massDestroy', 'as' => 'countries.mass_destroy']);
    Route::resource('cities', 'Admin\CitiesController');
    Route::post('cities_mass_destroy', ['uses' => 'Admin\CitiesController@massDestroy', 'as' => 'cities.mass_destroy']);
    Route::resource('statuses', 'Admin\StatusesController');
    Route::post('statuses_mass_destroy', ['uses' => 'Admin\StatusesController@massDestroy', 'as' => 'statuses.mass_destroy']);
    Route::resource('job_statuses', 'Admin\JobStatusesController');
    Route::post('job_statuses_mass_destroy', ['uses' => 'Admin\JobStatusesController@massDestroy', 'as' => 'job_statuses.mass_destroy']);
    Route::resource('types', 'Admin\TypesController');
    Route::post('types_mass_destroy', ['uses' => 'Admin\TypesController@massDestroy', 'as' => 'types.mass_destroy']);
    Route::resource('bid_types', 'Admin\BidTypesController');
    Route::post('bid_types_mass_destroy', ['uses' => 'Admin\BidTypesController@massDestroy', 'as' => 'bid_types.mass_destroy']);
    Route::resource('spical_&_skills', 'Admin\Spical&SkillsController');
    Route::post('spical_&_skills_mass_destroy', ['uses' => 'Admin\Spical&SkillsController@massDestroy', 'as' => 'spical_&_skills.mass_destroy']);
    Route::resource('spicals', 'Admin\SpicalsController');
    Route::post('spicals_mass_destroy', ['uses' => 'Admin\SpicalsController@massDestroy', 'as' => 'spicals.mass_destroy']);
    Route::resource('skills', 'Admin\SkillsController');
    Route::post('skills_mass_destroy', ['uses' => 'Admin\SkillsController@massDestroy', 'as' => 'skills.mass_destroy']);
    Route::resource('genders', 'Admin\GendersController');
    Route::post('genders_mass_destroy', ['uses' => 'Admin\GendersController@massDestroy', 'as' => 'genders.mass_destroy']);
    Route::resource('member_&_teams', 'Admin\Member&TeamsController');
    Route::post('member_&_teams_mass_destroy', ['uses' => 'Admin\Member&TeamsController@massDestroy', 'as' => 'member_&_teams.mass_destroy']);
    Route::resource('teams', 'Admin\TeamsController');
    Route::post('teams_mass_destroy', ['uses' => 'Admin\TeamsController@massDestroy', 'as' => 'teams.mass_destroy']);
    Route::resource('jobs_management_s', 'Admin\JobsManagementsController');
    Route::post('jobs_management_s_mass_destroy', ['uses' => 'Admin\JobsManagementsController@massDestroy', 'as' => 'jobs_management_s.mass_destroy']);
    Route::resource('user_managements', 'Admin\UserManagementsController');
    Route::post('user_managements_mass_destroy', ['uses' => 'Admin\UserManagementsController@massDestroy', 'as' => 'user_managements.mass_destroy']);
    Route::resource('prorfolios', 'Admin\ProrfoliosController');
    Route::post('prorfolios_mass_destroy', ['uses' => 'Admin\ProrfoliosController@massDestroy', 'as' => 'prorfolios.mass_destroy']);
    Route::resource('team_members', 'Admin\TeamMembersController');
    Route::post('team_members_mass_destroy', ['uses' => 'Admin\TeamMembersController@massDestroy', 'as' => 'team_members.mass_destroy']);
    Route::resource('jobs', 'Admin\JobsController');
    Route::post('jobs_mass_destroy', ['uses' => 'Admin\JobsController@massDestroy', 'as' => 'jobs.mass_destroy']);
    Route::resource('bids', 'Admin\BidsController');
    Route::post('bids_mass_destroy', ['uses' => 'Admin\BidsController@massDestroy', 'as' => 'bids.mass_destroy']);
    Route::resource('recruits', 'Admin\RecruitsController');
    Route::post('recruits_mass_destroy', ['uses' => 'Admin\RecruitsController@massDestroy', 'as' => 'recruits.mass_destroy']);
    Route::resource('users_profiles', 'Admin\UsersProfilesController');
    Route::post('users_profiles_mass_destroy', ['uses' => 'Admin\UsersProfilesController@massDestroy', 'as' => 'users_profiles.mass_destroy']);
    Route::resource('top_bars', 'Admin\TopBarsController');
    Route::post('top_bars_mass_destroy', ['uses' => 'Admin\TopBarsController@massDestroy', 'as' => 'top_bars.mass_destroy']);


    
});

//Auth::routes();
