@extends('auth.layouts.app')
@section('content')


<div class="container reg-page" align="center">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">

                <form  role="form" method="POST" action="{{ url('/register') }}">
                 {{ csrf_field() }}
                    <div class="form-group">
                        <h2 class="bold-font">إنشــاء حسـاب جديد</h2>
                    </div>
                   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="signupName" type="text" maxlength="50" class="form-control"  name="name" value="{{ old('name') }}" placeholder="الأسم">

                                                        @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                    </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input id="signupEmail" type="email" maxlength="50" class="form-control" name="email" value="{{ old('email') }}" placeholder="البريد الإلكتروني ">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <input id="signupPassword" type="password" name="password"  maxlength="25" class="form-control" placeholder="كلمة المرور" length="40">

                                                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                    </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                        <input id="signupPasswordagain" type="password" maxlength="25" name="password_confirmation" class="form-control" placeholder="تأكيد كلمة المرور">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif

                    </div>

                    <div class="form-group">
                        <button id="signupSubmit" type="submit" class="btn  btn-block col-md-4 fade1 reg-btn">ســجل</button>
                    </div>

                </form>

            </div>
        <div class="col-md-4"></div>

    </div>
</div>

@endsection
