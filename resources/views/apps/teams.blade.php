   @extends('apps.master')

    @section('content')


        <div class="col-md-9  text-right">
            <div class="wight-bg teams">
            	@foreach ($teams as $team )

                <div class="teams-info row">
                    <div class="col-md-3 left-border">
                        <div class="teams-logo" style="background: url({{url('uploads')}}/{{ $team->logo }}) center ; "></div>
                        <h4 class="bold-font">{{ $team->name }}</h4>
                        <!-- star rating-->
                        <form class="ltr-dir" style="display: table ">
                            <input type="text" class="kv-fa rating-loading" value="2" dir="rtl" data-size="xs"
                                   title="">

                            <div class="clearfix"></div>
                        </form>
                        <!--#star rating -->
                        <button class="btn main-bg fade1">طلـب إنضمام</button>
                    </div>
                    <div class="col-md-8">
                        <h4 class="bold-font text-right">مـهارات الفـريق</h4>
                        <ul class="list-inline lable-skills text-right">

  

                                @foreach ($team->teamSkills as $teamskill)
                                    <li>
                                    <a href="">
                                     <span class="label label-default">{{ $teamskill->name }}
                                     </span>
                                     </a>
                                    </li>
                                @endforeach

                        </ul>
                        <h4 class="bold-font text-right">أعضاء الفريق</h4>
                        <ul class="list-inline team-list">
                            <li>
                                <a href="">
                                    <div class="team-img" style="background: url(img/img2.png)  center"
                                         data-toggle="tooltip" title="" data-original-title="محمد أبوعويضة">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="team-img" style="background: url(img/team1.png)  center"
                                         data-toggle="tooltip" title="" data-original-title="سائد ابو معليلق">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="team-img" style="background: url(img/team2.png)  center"
                                         data-toggle="tooltip" title="" data-original-title="امجد ابوعويضة">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="team-img" style="background: url(img/team3.png)  center"
                                         data-toggle="tooltip" title="" data-original-title="محمد ">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="team-img" style="background: url(img/team1.png)  center"
                                         data-toggle="tooltip" title="" data-original-title="text">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                @endforeach

 

            </div>
        </div>



    @stop
        