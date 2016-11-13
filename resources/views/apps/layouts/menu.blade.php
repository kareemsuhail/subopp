

<div id="menu2">
    <nav class="navbar navbar-inverse">
        <div class="container" align="center">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/app"><img src="{{ url('landingpage') }}/img/wight-logo.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="divider-right hidden-sm hidden-xs"></li>

                    <li><a href="#" data-toggle="modal" data-target="#CreatTeam-popup"><span><img
                            src="{{ url('landingpage') }}/img/team-icon.png" alt=""/></span>
                        إنشاء فريق
                    </a></li>
                    <li>
                    <a href="#" data-toggle="modal" data-id="20" class="add-job" data-target="#AddJop-popup">
                    <span><img src="{{ url('landingpage') }}/img/jop-icon.png" alt=""/></span>
                        إنشاء وظيفة
                    </a>
                    </li>
                    <li class="divider-left hidden-sm hidden-xs"></li>

                    <li>
                        <div class="form-group inner-addon right-addon">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </li>
                    <li class="divider-right hidden-sm hidden-xs"></li>

                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="notify"></span>
                    <img src="{{ url('landingpage') }}/img/notafication-icoc.png" alt=""/></a>

                    <ul class="dropdown-menu notification-menu " >
                        
                            <li class="notification">
                                <div class="media">
                                    <div class="media-left media-top">
                                        <div class="media-object">
                                            <img src="{{ url('landingpage') }}/img/user1.png" class="img-circle" height="52" width="52"
                                                 alt="Name">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="notification-desc">
قام
                                            <span>
                                                محمد ابو عويضة
                                            </span>
                                            بقبول طلبك لوظيفة
                                            <span>
                                                تصميم ويب
                                            </span>
هذا النص هو
                                        </p>


                                        <div class="notification-meta">
                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i>
    منذ عشر دقائق
                                           </span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                             
                        </ul>
                    </li>


                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="notify"></span><img src="{{ url('landingpage') }}/img/message-icon.png" alt=""/></a>

                        <ul class="dropdown-menu notification-menu " >
                            <li class="notification">
                                <div class="media">
                                    <div class="media-left media-top">
                                        <div class="media-object">
                                            <img src="{{ url('landingpage') }}/img/user1.png" class="img-circle" height="52" width="52"
                                                 alt="Name">
                                            <i class="fa fa-circle red-color status-postion red-color" aria-hidden="true"></i>

                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4>
                                            سائد أبو معيلق
                                        </h4>
                                        <p class="notification-desc">
                                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص...

                                        </p>


                                        <div class="notification-meta">
                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i>
    منذ عشر دقائق
                                           </span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </li>
                                        
                    <li class="divider-left hidden-sm hidden-xs"></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">{{auth()->user()->name}}<span class="caret"></span></a>
                        <ul class="dropdown-menu setting-menu">
                               <li><a href="{{ url('setting') }}"><i class="fa fa-cog" aria-hidden="true"></i>
                                الإعدادات
                            </a></li>
                            <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>
                                تسجيل الخروج
                            </a></li>
                        </ul>
                    </li>
                    <li><a href="#" style="padding-left:0"><img src="{{ url('landingpage') }}/img/user1.png" class="img-circle" width="46"
                                                                height="46" alt=""/></a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
