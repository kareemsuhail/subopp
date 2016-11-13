<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title> {{ $sitetitle }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



    <!-- main.js -->
    <script src="{{ url('landingpage') }}/js/main.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel='stylesheet prefetch' href="{{ url('landingpage') }}/css/jasny-bootstrap.min.css">
<link rel='stylesheet prefetch' href="{{ url('landingpage') }}/css/star-rating.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('landingpage') }}/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('landingpage') }}/css/bootstrap-rtl.min.css">
   <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.8.5/css/selectize.default.css'>

<link rel="stylesheet" type="text/css" href="{{ url('landingpage') }}/css/normalize.css">
<link rel="stylesheet" type="text/css" href="{{ url('landingpage') }}/css/animate-fonts.css">
<link rel="stylesheet" href="{{ url('landingpage') }}/css/aos.css">

<link rel="stylesheet" type="text/css" href="{{ url('landingpage') }}/css/custom.css">
    <!-- x-editable (bootstrap version) -->

     <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
            <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
            
<link href="{{url('landingpage')}}/select2/select2-bootstrap.css" rel="stylesheet" type="text/css">   

<link href="{{url('landingpage')}}/select2/select2.css" rel="stylesheet" type="text/css"> 

<script src="{{url('landingpage')}}/select2/select2.full.js"></script>    



</head>
<body class="gray-bg">


<!-- Trigger the modal with a button -->

<!-- Modal : creat team -->
<div id="CreatTeam-popup" class="modal fade main-modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

                <form method="post" action="/app/creat/team" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                    <div class=" col-md-3">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width:132px; height: 132px;">
                                <img src="{{ url('landingpage') }}/img/avatar.png" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"
                                 style="max-width: 132px; max-height: 132px;"></div>
                            <div>
                                <span class="btn btn-default btn-file main-bg"><span
                                        class="fileinput-new">إختيار صورة </span><span
                                        class="fileinput-exists">تغيير</span>
                                        <input type="file" name="logo"> 
                    {!! Form::file('logo', old('logo'), ['class' => 'form-control']) !!}
                                        </span>
                    {!! Form::hidden('logo_max_size', 50) !!}
                    {!! Form::hidden('logo_max_width', 500) !!}
                    {!! Form::hidden('logo_max_height', 500) !!}

                                <a href="#" class="btn btn-default fileinput-exists main-bg" data-dismiss="fileinput">إزالة</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <input type="text" required="required" class="form-control" name="name" placeholder="اسم الفريق">
                        </div>
                        <div class="form-group">
                            <textarea name="description" required="required" class="form-control" rows="2" id="comment"
                                      placeholder="نبذة عن الفريق"></textarea>
                        </div>
                        <div class="form-group text-right ">
                            <div class="form-group text-right  ">


                       <select name="spical_id[]" multiple placeholder="المهارات المطلوبة">
                            @foreach($skills as $skill)
                                <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                            @endforeach
                            </select>
                            
                            </div>

                        </div>
                    </div>

                    <button type="submit" class="btn  main-bg">إنشاء</button>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- #Modal : creat team -->


<!-- Modal : addJop  -->
<div id="AddJop-popup" class="modal fade main-modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h3 class="text-right bold-font">إضافة وظيفـة</h3>

                <form method="post" action="/app/create/job" >
                    {{ csrf_field() }}
                <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                    <div class="form-group col-sm-4">
                        <input type="text" class="form-control" value="" name="title" id="record_id" placeholder="عنوان الوظيفة">
                    </div>
                    <div class="form-group col-sm-4">
                        <input type="number" class="form-control" id="testid" name="price" placeholder="السعر">
                    </div>
                    <div class="form-group col-sm-4">
                        <input type="number" name="length" class="form-control" placeholder="المدة">
                    </div>
                    <div class="form-group col-xs-12">
                        <textarea class="form-control" name="description" rows="2" id="comment2" placeholder="حاول ان تشرح المطلوب بكلمات واضحة ومفهومة ومختصرة"></textarea>
                    </div>
                    <div class="form-group text-right  col-xs-12">
                        <div class=" text-right ">

                            <select name="skills[]" multiple placeholder="المهارات المطلوبة">
                            @foreach($skills as $skill)
                                <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                            @endforeach
                            </select>

                        </div>

                    </div>
                    <button type="submit" class="btn  main-bg fade1">إضافـة</button>

                    <div class="pull-right"><label class="btn main-bg fade1" for="my-file-selector">
                        <input name="file" id="my-file-selector" type="file" style="display:none;"
                               onchange="$('#upload-file-info').html($(this).val());">
                        <i class="fa fa-paperclip" aria-hidden="true"></i>
                        إرفاق ملف
                    </label>
                        <span class='label label-info' id="upload-file-info"></span>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- #Modal : addJop -->


<div id="ptotofileTeam1" class="modal fade main-modal ptotofile-modal" role="dialog">
    <div class="modal-dialog ">

        <!-- Modal content-->
        <div class="modal-content" align="right">
            <div class="modal-header">
                <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
                <ul class="list-inline " style="padding-top: 30px">
                    <li><h4 class="modal-title main-color ">تطبيق جوال للايفون</h4></li>
                    <li class="pull-left text-left">
                        08 / 10 /2016
                        <i class="fa fa-calendar " aria-hidden="true"></i>
                    </li>
                </ul>
                <p class="text-justify">
                    هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن
                    يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق
                </p>

                <ul class="list-inline ">
                    <li>
                        <ul class="list-inline lable-skills">
                            <li><span class="label label-default">frontend</span></li>
                            <li><span class="label label-default">frontend</span></li>
                            <li><span class="label label-default">frontend</span></li>
                            <li><span class="label label-default">frontend</span></li>
                            <li><span class="label label-default">frontend</span></li>
                            <li><span class="label label-default">frontend</span></li>
                        </ul>
                    </li>
                    <li class="pull-left">
                        <button class="btn main-bg "> رابط المشروع</button>
                    </li>
                </ul>
            </div>
            <div class="modal-body">
                <img src="img/gallery1.png" class="img-responsive" height="60%" alt="">
            </div>

        </div>

    </div>
</div>
