<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>حسابك الشخصي </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('landingpage') }}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('landingpage') }}/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('landingpage') }}/css/custom.css">
    <link rel="stylesheet" type="text/css" href="{{ url('landingpage') }}/css/animate-fonts.css">
    <link rel="stylesheet" href="{{ url('landingpage') }}/css/aos.css"/>
    <link rel="stylesheet" href="{{ url('landingpage') }}/css/fileinput.css"/>
    <link rel="stylesheet" href="{{ url('landingpage') }}/css/bootstrap-datetimepicker.css"/>
    <link rel='stylesheet prefetch'
          href='http://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.8.5/css/selectize.default.css'>


</head>
<body class="gray-bg">

<!--nav-->
<div id="menu2">
    <nav class="navbar navbar-inverse">
        <div class="container" align="center">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{ url('landingpage') }}/img/wight-logo.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="divider-right hidden-sm hidden-xs"></li>

                    
                    <li>
                        <div class="form-group inner-addon right-addon">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </li>
                    <li class="divider-right hidden-sm hidden-xs"></li>
                    <li><a href="#"><span class="notify"></span><img src="{{ url('landingpage') }}/img/notafication-icoc.png" alt=""/></a></li>
                    <li><a href="#"><span class="notify"></span><img src="{{ url('landingpage') }}/img/message-icon.png" alt=""/></a></li>
                    <li class="divider-left hidden-sm hidden-xs"></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"> {{auth()->user()->name}} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </l{{ url('landingpage') }}/i>
                    <li><a href="#" style="padding-left:0"><img src="img/user1.png" class="img-circle" width="46"
                                                                height="46" alt=""/></a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!--#nav-->
<!--page content-->
<div class="container" align="center">
                @if (session()->has('erorrmsg'))
                <div class="alert alert-danger" style="border-radius: 0px;">
                 <strong>خطأ!!</strong> <br>
                 {{session()->get('erorrmsg')}}
                </div>
                @elseif (session()->has('sucsessmsg'))
                <div class="alert alert-success" style=" border-radius: 0px;">
                 <strong>جيد !!</strong> <br>
                 {{session()->get('sucsessmsg')}}
                </div>
                @else
                @endif

    <div class="row">
        <div class="col-md-3 ">
            <div class="wight-bg user-list">
                <!--#star rating -->

                    <div class="list-group list-group-root well">

                        <a href="#item-1" class="list-group-item bold-font" data-toggle="collapse">

                            حسابي الشخصي
                            <i class="glyphicon glyphicon-chevron-left pull-left"></i>
                        </a>

                        <div class="list-group collapse" id="item-1">
                            <a class="list-group-item" href="/app/myprofile">حسابي الشخصي </a>
                            <a class="list-group-item" href="/app/myjobs">وظائفي</a>
                            <a class="list-group-item" href="/app/myteam">فريقي</a>
                            <a class="list-group-item" href="">حسابي المالي</a>

                        </div>

                        <a href="#item-2" class="list-group-item bold-font" data-toggle="collapse">
                            الوظائف
                            <i class="glyphicon glyphicon-chevron-left pull-left"></i>
                        </a>

                        <div class="list-group collapse" id="item-2">

                            <a class="list-group-item" href="">المهام</a>
                            <a class="list-group-item" href="/app/jobs">المشاريع</a>
                        </div>

                        <a href="#item-3" class="list-group-item bold-font" data-toggle="collapse">
                            الأعضاء
                            <i class="glyphicon glyphicon-chevron-left pull-left"></i>
                        </a>

                        <div class="list-group collapse" id="item-3">

                            <a class="list-group-item" href="/app/users">الأعضاء</a>

                        </div>

                        <a href="/app/teams" class="list-group-item bold-font" data-toggle="collapse">
                            الفرق
                            <i class="glyphicon glyphicon-chevron-left pull-left "></i>
                        </a>


                        <!--<a href="#item-5" class="list-group-item bold-font" data-toggle="collapse">
                            المجتمعات
                            <i class="glyphicon glyphicon-chevron-left pull-left"></i>
                        </a>

                        <div class="list-group collapse" id="item-5">

                            <a class="list-group-item" href="">Item 1.1</a>
                            <a class="list-group-item" href="">Item 1.1</a>
                            <a class="list-group-item" href="">Item 1.1</a>

                        </div> 
        
                        <a href="#item-6" class="list-group-item bold-font" data-toggle="collapse">
                            عنوان
                            <i class="glyphicon glyphicon-chevron-left pull-left"></i>
                        </a>

                        <div class="list-group collapse" id="item-6">

                            <a class="list-group-item" href="">Item 1.1</a>
                            <a class="list-group-item" href="">Item 1.1</a>
                            <a class="list-group-item" href="">Item 1.1</a>

                        </div>-->


                    </div>
                    
            </div>
        </div>
        <div class="col-md-9 ">
            <div class="wight-bg upload-page">
                <div class="row">
                    <div class="col-md-11">
                        <form action="{{url('/app/sroreprofile')}}" method="post" enctype="multipart/form-data" >  
                        {{ csrf_field() }}
                        <div class="form-group text-right">
                            <label>
                                الإسم
                            </label>
                            <div class="form-control" >
                           {{auth()->user()->name}}
                           <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                           </div>
                        </div>
                        <div class="form-group text-right">
                            <label>
                                عنوان الوظيفة
                            </label>
                            <input type="text" name="jobtitle" class="form-control">
                        </div>

                        <div class="form-group text-right">
                            <label>
                                نبذة قصيرة عنك
                            </label>
                            <textarea class="form-control" name="description" rows="5" id="comment"></textarea>
                        </div>

                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-8"></div>
                    <div class="col-md-4"></div>
                    <div class="form-group text-right col-md-11">
                        <label class=" control-label ">
                            الصورة الشخصية
                        </label>

                        <div class="browse-btn">
                            <span class="btn btn-default btn-file">
                                <input name="image" type="file" >
                    {!! Form::hidden('image_max_size', 500) !!}
                    {!! Form::hidden('image_max_width', 500) !!}
                    {!! Form::hidden('image_max_height', 500) !!}                                       
                            </span>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="form-group text-right col-md-11">
                        <label class=" control-label ">
                            صورة الغلاف
                        </label>

                        <div class="browse-btn">
                            <span class="btn btn-default btn-file">
                                <input  name="coverimage" type="file" >
                    {!! Form::hidden('coverimage_max_size', 500) !!}
                    {!! Form::hidden('coverimage_max_width', 500) !!}
                    {!! Form::hidden('coverimage_max_height', 500) !!}
                            </span>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-11">
                        <div class="form-group" align="right">
                            <label class="control-label text-right">
                                تاريخ الميلاد
                            </label>

                            <div class="input-group date" >
                                <input type="text" name="birthday" class="form-control"/> 
                                <span class="input-group-addon"><span
                                    class="glyphicon-calendar glyphicon"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="clearfix"></div>
                    <div class="control-group">
                     <div class="col-md-11">
                        <div class="form-group text-right">
                            <label>
الدولة
                            </label> 
                                                <div class="clearfix"></div>
                       
                            <select class=" col-md-11" id="selectCountry" name="country_id">

                        <option value="" selected="selected">(يرجى اختيار الدولة)</option>
                        @foreach ($countres as $country)
                        <option value="{{ $country->id }}" >{{ $country->name }}</option>
                        @endforeach

                            </select>
                        </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-11">

                        <div class="form-group text-right">
                            <label>
المدينة
                            </label>
                                                <div class="clearfix"></div>

                          <select id="model" name="city_id" class=" col-md-11" >
                        <option value="" selected="selected">(يرجى اختيار المدينة)</option>
                           </select>
                            </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="control-group">
                     <div class="col-md-11">
                        <div class="form-group text-right">
                            <label>
التخصص
                            </label> 
                                                <div class="clearfix"></div>
                       
                            <select class="col-md-11" name="spical_id">

                        <option value="" selected="selected">(يرجى اختيار التخصص)</option>
                        @foreach ($spicals as $spical)
                        <option value="{{ $spical->id }}" >{{ $spical->name }}</option>
                        @endforeach
                            </select>
                        </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="form-group text-right col-md-11">
                        <label>
المهارات

                        </label> 
                    <select name="skills[]" multiple>
                        <option value="">اختر مهاراتك</option>

                    </select>

                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="clearfix">
                    <button type="submit" class="btn btn-default upload">حفظ بياناتك</button>
                </div>
            </form>
            </div>


        </div>
    </div>
</div>
</div>

<!--#page content-->

<script src="{{ url('landingpage') }}/js/jquery.js"></script>
<script src="{{ url('landingpage') }}/js/bootstrap.min.js"></script>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.8.5/js/standalone/selectize.min.js'></script>
<script src="{{ url('landingpage') }}/js/fileinput.js"></script>


<script src="{{ url('landingpage') }}/js/moment-with-locales.js"></script>
<script src="{{ url('landingpage') }}/js/bootstrap-datetimepicker.js"></script>


<script type="text/javascript">
    $(document).ready(function() {

        //$('select[name="skills"]').selectize({});
        $('select[name="country_id"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '{{url('app/selectcity')}}/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        
                        $('select[name="city_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="city_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });

                    }
                });
            }else{
                $('select[name="city_id"]').empty();
            }
        });

        $('select[name="spical_id"]').on('change', function() {
            var spicalID = $(this).val();
            if(spicalID) {
                $.ajax({
                    url: '{{url('app/selectskills')}}/'+spicalID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        
                        $('select[name="skills[]"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="skills[]"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });

                    }
                });
            }else{
                $('select[name="skills[]"]').empty();
            }
        });
    });
</script>


<script type="text/javascript">
    $(function () {
        // Bootstrap DateTimePicker v4
        $('#datetimepicker1').datetimepicker({
            format: 'DD/MM/YYYY'
        });
        $('#datetimepicker2').datetimepicker({
            format: 'DD/MM/YYYY'
        });
    });
</script>
<script>


    $('.browse-btn').find('.hidden-xs').css('colo', 'red');
    $(function () {

        $('.list-group-item').on('click', function () {
            $('.glyphicon', this)
                    .toggleClass('glyphicon-chevron-right')
                    .toggleClass('glyphicon-chevron-down');
        });

    });
</script>

<footer>
    <div class="footer" align="center">
        <ul class="list-inline">
            <li class="soical-icon soical-icon1 "></li>
            <li class="soical-icon soical-icon2"></li>
            <li class="soical-icon soical-icon3"></li>
            <li class="soical-icon soical-icon4"></li>
        </ul>
        <ul class="list-inline ">
            <li><img src="{{ url('landingpage') }}/img/v1.png" class="pay" alt=""></li>
            <li><img src="{{ url('landingpage') }}/img/v2.png" class="pay" alt=""></li>
            <li><img src="{{ url('landingpage') }}/img/v3.png" class="pay" alt=""></li>
        </ul>
        <p>
            © 2016 subopp. All rights reserved.
        </p>
    </div>
</footer>
</body>
</html>