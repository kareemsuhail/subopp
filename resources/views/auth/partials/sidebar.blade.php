@inject('request', 'Illuminate\Http\Request')
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">
            <li class="{{ $request->segment(2) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">SUBOPP PANEL</span>
                </a>
            </li>

            <li>
                        <a href="#">
                            <i class="fa fa-gears"></i>
                            <span class="title">Spical & Skills</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                                <li class="{{ $request->segment(2) == 'spicals' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('spicals.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Spical
                                        </span>
                                    </a>
                                </li>
                                <li class="{{ $request->segment(2) == 'skills' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('skills.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Skills
                                        </span>
                                    </a>
                                </li>
                                </ul>
                    </li>
                                    <li>
                        <a href="#">
                            <i class="fa fa-gears"></i>
                            <span class="title">Constants</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                                <li class="{{ $request->segment(2) == 'countries' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('countries.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Countries
                                        </span>
                                    </a>
                                </li>
                                <li class="{{ $request->segment(2) == 'cities' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('cities.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Cities
                                        </span>
                                    </a>
                                </li>
                                <li class="{{ $request->segment(2) == 'statuses' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('statuses.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Status
                                        </span>
                                    </a>
                                </li>
                                <li class="{{ $request->segment(2) == 'job_statuses' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('job_statuses.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Job Status
                                        </span>
                                    </a>
                                </li>
                                <li class="{{ $request->segment(2) == 'types' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('types.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Type
                                        </span>
                                    </a>
                                </li>
                                <li class="{{ $request->segment(2) == 'bid_types' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('bid_types.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Bid Type
                                        </span>
                                    </a>
                                </li>
                                <li class="{{ $request->segment(2) == 'genders' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('genders.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Gender
                                        </span>
                                    </a>
                                </li>
                                </ul>
                    </li>
                                    <li>
                        <a href="#">
                            <i class="fa fa-gears"></i>
                            <span class="title">Langing Page</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                                <li class="{{ $request->segment(2) == 'sliders' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('sliders.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Slider
                                        </span>
                                    </a>
                                </li>
                                <li class="{{ $request->segment(2) == 'how_it_dos' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('how_it_dos.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            How It Do
                                        </span>
                                    </a>
                                </li>
                                <li class="{{ $request->segment(2) == 'people_says' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('people_says.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            People Say
                                        </span>
                                    </a>
                                </li>
                                <li class="{{ $request->segment(2) == 'top_bars' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('top_bars.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Top Bars
                                        </span>
                                    </a>
                                </li>
                                </ul>
                    </li>
                                    <li>
                        <a href="#">
                            <i class="fa fa-gears"></i>
                            <span class="title">Genral Magne</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                                <li class="{{ $request->segment(2) == 'languages' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('languages.index') }}">
                                        <i class="fa fa-language"></i>
                                        <span class="title">
                                            Language
                                        </span>
                                    </a>
                                </li>
                                <li class="{{ $request->segment(2) == 'site_settings' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('site_settings.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Site Setting
                                        </span>
                                    </a>
                                </li>
                                </ul>
                    </li>
                                    <li>
                        <a href="#">
                            <i class="fa fa-gears"></i>
                            <span class="title">Member & Teams</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                                <li class="{{ $request->segment(2) == 'teams' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('teams.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Teams
                                        </span>
                                    </a>
                                </li>
                                <li class="{{ $request->segment(2) == 'team_members' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('team_members.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Team Members
                                        </span>
                                    </a>
                                </li>
                                <li class="{{ $request->segment(2) == 'users_profiles' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('users_profiles.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Users Profiles
                                        </span>
                                    </a>
                                </li>
                                <li class="{{ $request->segment(2) == 'prorfolios' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('prorfolios.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Prorfolio
                                        </span>
                                    </a>
                                </li>
                                </ul>
                    </li>
                                    <li>
                        <a href="#">
                            <i class="fa fa-gears"></i>
                            <span class="title">Jobs Management </span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                                <li class="{{ $request->segment(2) == 'jobs' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('jobs.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Jobs
                                        </span>
                                    </a>
                                </li>
                                <li class="{{ $request->segment(2) == 'bids' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('bids.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Bids
                                        </span>
                                    </a>
                                </li>
                                <li class="{{ $request->segment(2) == 'recruits' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('recruits.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Recruit
                                        </span>
                                    </a>
                                </li>
                                </ul>
                    </li>
                                    <li>
                        <a href="#">
                            <i class="fa fa-gears"></i>
                            <span class="title">User Management</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                                <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('roles.index') }}">
                                        <i class="fa fa-key"></i>
                                        <span class="title">
                                            Roles
                                        </span>
                                    </a>
                                </li>
                                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('users.index') }}">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">
                                            Users
                                        </span>
                                    </a>
                                </li>
                                </ul>
                    </li>
                                    

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">Logout</button>
{!! Form::close() !!}