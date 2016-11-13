<!--modal :login-->
<div id="popupBottom" class="popover " align="center">
    <div class="arrow"></div>
    <h4 class="text-center">سجل دخولك</h4>
                    <form method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

    <div class="popover-content col-md-12 ">
        <div class="inner-addon right-addon form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <i class="glyphicon glyphicon-user"></i>
            <input type="text" class="form-control" placeholder="البريد الإلكتروني" name="email" value="{{ old('email') }}" />
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

        </div>
        <div class="inner-addon right-addon form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <i class="glyphicon  glyphicon-lock"></i>
            <input type="password" name="password" class="form-control" placeholder="كلمة المرور"/>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif      

        </div>

        <div class="checkbox">
            <label><input type="checkbox" name="remember" value="" >تذكرني</label>
        </div>
        <div class="text-center">
            <button type="submit" class="text-center sing-btn-lg btn">
                دخول
            </button>           
                
        </div>

        <ul class="list-inline  text-center">
            <li><a class="fade1" href="{{ url('/password/reset') }}">
                نسيت كلمة المرور ؟
            </a></li>
            <li><a class="fade1" href="{{ url('/register') }}">
                تسجيل مستخدم جديد
            </a></li>
        </ul>

    </div>

    </form>
</div>
<!--#modal :login-->

<div id="menue1">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{ url('landingpage') }}/img/Logo.png" alt=""></a>
            </div>

            <div class="collapse navbar-collapse pull-left" id="myNavbar">
                <ul class="nav navbar-nav">


                	 @foreach ($menuitems as $item)

                    <li class="">
                    	<a href="#">  {{ $item->title }} </a>
                    </li>

                    @endforeach


                   <li>
                        <a href="#">
                            <form action="" class="search-form">
                                <div class="form-group has-feedback">
                                    <label for="search" class="sr-only">Search</label>
                                    <input type="text" class="form-control search" name="search" id="search" placeholder="بحث">
                                    <span class="glyphicon glyphicon-search form-control-feedback "></span>
                                </div>
                            </form>
                        </a>
                    </li>



                    <li>
                        <a  class="sing-btn"   href="#popupBottom" role="button"
                           data-toggle="modal-popover" data-placement="bottom">
                            دخول
                        </a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>
</div>