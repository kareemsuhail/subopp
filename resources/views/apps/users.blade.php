    @extends('apps.master')

    @section('content')
    
         <div class="col-md-9 ">
            <div class=" JobsPage member2">

                <div class="panel-group serach-panel" align="right">
                    <div class="panel ">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="text-right bold-font protfolio-tit search-collapss collapsed "
                                   data-toggle="collapse" href="#collapse1">
                                    بحث حسب
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label>الوقت الازم
                                            <select>
                                                <option value="0">
                                                    غير محدد
                                                </option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>الســعر
                                            <select>
                                                <option value="0">
                                                    غير محدد
                                                </option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                            </select>
                                        </label>
                                    </div>

                                    <div class="col-md-6">
                                        <label>وقت الأضافة
                                            <select>
                                                <option value="0">
                                                    غير محدد
                                                </option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                            </select>
                                        </label>
                                    </div>

                                    <div class="col-md-6">
                                        <label>المصدر
                                            <select>
                                                <option value="0">
                                                    غير محدد
                                                </option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                            </select>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row" align="center">
                        @foreach ($users as $user)
                    <div class="col-md-4">
                        <div class="members-box2">
                            <div style="background:url(img/member1.png) center ; border-radius: 50% ; width: 100px ; height: 100px;border:solid 3px #cccccc "></div>
                            <h3 class="main-color">
                                {{ $user->user->name }}
                            </h3>
                            <small>{{ $user->jobtitle }}</small>
                            <!-- star rating-->
                            <form class="ltr-dir" style="display: table; padding-top: 15px; ">
                                <input type="text" class="kv-fa rating-loading" value="2" dir="rtl" data-size="xs"
                                       title="">

                                <div class="clearfix"></div>
                            </form>
                            <!--#star rating -->
                            <h4>
                                عدد الوظائف المنجزة
                            </h4>

                            <h1 class="main-color bold-font">10</h1>
                            <ul class="list-inline lable-skills text-right">

                                @foreach ($user->userProfileSkills as $userskill)
                                    <li>
                                    <a href="">
                                     <span class="label label-default">{{ $userskill->name }}
                                     </span>
                                     </a>
                                    </li>
                                @endforeach

                            </ul>

                            <button class="btn main-bg fad1">رسالة</button>
                            <button class="btn blue-bg fade1">دعوة</button>
                        </div>
                    </div>

                        @endforeach



                </div>

            </div>
        </div>
        

    @stop
        