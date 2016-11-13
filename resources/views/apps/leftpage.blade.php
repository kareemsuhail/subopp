    @extends('apps.master')

    @section('content')

         <div class="col-md-9 profileTeam">

            <div class="wight-bg">

                <ul class="list-inline team-tit">

                    <li><h1 class="bold-font ">
                        فريق العمل الحر
                    </h1>
                    <li class="pull-left"><a href=""><i class="fa fa-comments fade1 " aria-hidden="true"></i></a></li>

                </ul>
                <div class="left-content ">
                    <div class="row ">
                        <div class="col-md-3">
                            <h3 class="text-right">تقيم الفريق</h3>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-3">
                            <!-- star rating-->
                            <form class="ltr-dir" style="display: table ">
                                <input type="text" class="kv-fa rating-loading" value="2" dir="rtl" data-size="xs"
                                       title="">

                                <div class="clearfix"></div>
                            </form>
                            <!--#star rating -->
                        </div>
                        <div class="col-md-3"></div>
                    </div>

                    <hr>

                    <div class="row  ">
                        <div class="col-md-3">
                            <h3 class="text-right">
                                أعضاء الفريق
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-inline team-list">
                                <li>
                                    <a href="">
                                        <div class="team-img" style="background: url(img/img2.png)  center"
                                             data-toggle="tooltip" title="محمد أبوعويضة">
                                            <div class="team-ovrelay fade1">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="team-img" style="background: url(img/team1.png)  center"
                                             data-toggle="tooltip" title="سائد ابو معليلق">
                                            <div class="team-ovrelay fade1">
                                                <i class="fa fa-trash" aria-hidden="true"></i></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="team-img" style="background: url(img/team2.png)  center"
                                             data-toggle="tooltip" title="امجد ابوعويضة">
                                            <div class="team-ovrelay fade1">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="team-img" style="background: url(img/team3.png)  center"
                                             data-toggle="tooltip" title="محمد ">
                                            <div class="team-ovrelay fade1">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="team-img" style="background: url(img/team1.png)  center"
                                             data-toggle="tooltip" title="text">
                                            <div class="team-ovrelay fade1">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="team-img" style="background:#32b38c">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-2"></div>

                    </div>

                    <hr>

                    <div class="row  text-right">
                        <h3 class="text-right">
                            نبذة
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                        </h3>


                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <p class="text-justify" contenteditable="true">
                                إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما
                                تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على
                                وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع
                            </p>
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>

                    <hr>

                    <div class="row  text-right">
                        <h3 class="text-right">
                            المهارات
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>

                        </h3>


                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <ul class="list-inline skills">
                                <li><span class="label label-default">photoshop</span></li>
                                <li><span class="label label-default">logo design</span></li>
                                <li><span class="label label-default">web design</span></li>
                                <li><span class="label label-default">deisgn</span></li>
                                <li><span class="label label-default">photoshop</span></li>
                                <li><span class="label label-default">photoshop</span></li>
                                <li><span class="label label-default">photoshop</span></li>
                                <li><span class="label label-default">photoshop</span></li>
                                <li><span class="label label-default">photoshop</span></li>
                            </ul>
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>

                    <hr>

                    <div class="row  text-right">
                        <h3 class="text-right">
                            العروض الخاصة بالفريق
                            <span>67</span>
                        </h3>

                        <div class="col-md-6">
                            <h5>
                                الجاهزة
                                <span>12</span>
                            </h5>

                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    70%
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5>بإنتظار الموافقة
                                <span>11</span>
                            </h5>

                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                    50%
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5>
                                منتهى
                                <span>22</span>
                            </h5>

                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                    90%
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5>
                                مستبعد
                                <span>22</span>
                            </h5>

                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                    30%
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn main-bg fade1 pull-left">
                        استعراض
                    </button>

                    <hr>

                    <div class="row  " align="center">
                        <h3 class="text-right ">
                            معرض أعمال الفريق
                            <a class="main-color" href=""> <i class="fa fa-plus-circle" aria-hidden="true"></i></a>

                        </h3>

                        <div class="galleryteam">
                            <div class="col-md-4">
                                <div class="portfolio-box ">
                                    <a href="##" data-toggle="modal" data-target="#ptotofileTeam1">
                                        <div class="portfolio-ovarlay fade1">
                                            <span> <img src="img/Link-48.png" alt=""/></span>

                                            <h3 class="bold-font">
                                                تطبيق جوال للايفون
                                            </h3>
                                        </div>
                                    </a>
                                    <img src="img/protfollio1.png" class="img-rounded" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="portfolio-box ">
                                    <a  href="##" data-toggle="modal" data-target="#ptotofileTeam1">
                                        <div class="portfolio-ovarlay fade1">
                                            <span> <img src="img/Link-48.png" alt=""/></span>

                                            <h3 class="bold-font">
                                                تطبيق جوال للايفون
                                            </h3>
                                        </div>
                                    </a>
                                    <img src="img/protfollio1.png" class="img-rounded" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="portfolio-box ">
                                    <a  href="##" data-toggle="modal" data-target="#ptotofileTeam1">
                                        <div class="portfolio-ovarlay fade1">
                                            <span> <img src="img/Link-48.png" alt=""/></span>

                                            <h3 class="bold-font">
                                                تطبيق جوال للايفون
                                            </h3>
                                        </div>
                                    </a>
                                    <img src="img/protfollio1.png" class="img-rounded" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="portfolio-box ">
                                    <a href="">
                                        <div class="portfolio-ovarlay fade1">
                                            <span> <img src="img/Link-48.png" alt=""/></span>

                                            <h3 class="bold-font">
                                                تطبيق جوال للايفون
                                            </h3>
                                        </div>
                                    </a>
                                    <img src="img/protfollio1.png" class="img-rounded" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="portfolio-box ">
                                    <a href="">
                                        <div class="portfolio-ovarlay fade1">
                                            <span> <img src="img/Link-48.png" alt=""/></span>

                                            <h3 class="bold-font">
                                                تطبيق جوال للايفون
                                            </h3>
                                        </div>
                                    </a>
                                    <img src="img/protfollio1.png" class="img-rounded" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="portfolio-box ">
                                    <a href="">
                                        <div class="portfolio-ovarlay fade1">
                                            <span> <img src="img/Link-48.png" alt=""/></span>

                                            <h3 class="bold-font">
                                                تطبيق جوال للايفون
                                            </h3>
                                        </div>
                                    </a>
                                    <img src="img/protfollio1.png" class="img-rounded" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="portfolio-box ">
                                    <a href="">
                                        <div class="portfolio-ovarlay fade1">
                                            <span> <img src="img/Link-48.png" alt=""/></span>

                                            <h3 class="bold-font">
                                                تطبيق جوال للايفون
                                            </h3>
                                        </div>
                                    </a>
                                    <img src="img/protfollio1.png" class="img-rounded" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="portfolio-box ">
                                    <a href="">
                                        <div class="portfolio-ovarlay fade1">
                                            <span> <img src="img/Link-48.png" alt=""/></span>

                                            <h3 class="bold-font">
                                                تطبيق جوال للايفون
                                            </h3>
                                        </div>
                                    </a>
                                    <img src="img/protfollio1.png" class="img-rounded" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="portfolio-box ">
                                    <a href="">
                                        <div class="portfolio-ovarlay fade1">
                                            <span> <img src="img/Link-48.png" alt=""/></span>

                                            <h3 class="bold-font">
                                                تطبيق جوال للايفون
                                            </h3>
                                        </div>
                                    </a>
                                    <img src="img/protfollio1.png" class="img-rounded" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>



    @stop
        