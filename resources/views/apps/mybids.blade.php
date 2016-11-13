
    @extends('apps.master')

    @section('content')

 
        <div class="col-md-9 ">
            <div class="wight-bg JobsPage">

                <h4 class="text-right bold-font ">
                    العروض الخاصة بي
                </h4>
                <hr>
                <div id="exTab1">
                    <ul class="list-inline text-right projectTap">
                        <li class="active">
                            <a href="#1a" class="fade1" data-toggle="tab">الجاهزة</a>
                        </li>
                        <li><a href="#2a"  class="fade1"  data-toggle="tab">بإنتظار الموافقة</a>
                        </li>
                        <li><a href="#3a"  class="fade1"   data-toggle="tab">منتهي</a>
                        </li>
                        <li><a href="#4a"  class="fade1" data-toggle="tab">مستبعد</a>
                        </li>
                    </ul>


                    <div class="tab-content clearfix">

                        <div class="tab-pane active" id="1a">
                            <div class="table-responsive-vertical shadow-z-1table-responsive-vertical shadow-z-1">

                                <table class="table jopbstable">
                                    <tbody>
                                @foreach ($finishjobs as $finishjob)
                                    <tr>
                                        <td>
                                            <h4>{{ $finishjob->id }}</h4>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled list2">
                                                <li>الســعر</li>
                                                <li>{{ $finishjob->price }}$</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled list2">
                                                <li>المدة</li>
                                                <li>{{ $finishjob->length }}<span>يوم</span></li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane" id="2a">
                            <div class="table-responsive-vertical shadow-z-1table-responsive-vertical shadow-z-1">

                                <table class="table jopbstable">
                                    <tbody>
                                @foreach ($waitinggobs as $waitjob)
                                    <tr>
                                        <td>
                                            <h4>{{ $waitjob->title }}</h4>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled list2">
                                                <li>الســعر</li>
                                                <li>{{ $waitjob->price }}$</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled list2">
                                                <li>المدة</li>
                                                <li>{{ $waitjob->length }}<span>يوم</span></li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane" id="3a">
                            <div class="table-responsive-vertical shadow-z-1table-responsive-vertical shadow-z-1">

                                <table class="table jopbstable">
                                    <tbody>
                                @foreach ($endjobs as $endjob)
                                    <tr>
                                        <td>
                                            <h4>{{ $endjob->title }}</h4>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled list2">
                                                <li>الســعر</li>
                                                <li>{{ $endjob->price }}$</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled list2">
                                                <li>المدة</li>
                                                <li>{{ $endjob->length }}<span>يوم</span></li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane" id="4a">
                            <div class="table-responsive-vertical shadow-z-1table-responsive-vertical shadow-z-1">

                                <table class="table jopbstable">
                                    <tbody>
                                @foreach ($excludedjobs as $excludedjob)
                                    <tr>
                                        <td>
                                            <h4>{{ $excludedjob->title }}</h4>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled list2">
                                                <li>الســعر</li>
                                                <li>{{ $excludedjob->price }}$</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled list2">
                                                <li>المدة</li>
                                                <li>{{ $excludedjob->length }}<span>يوم</span></li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>


    @stop
        