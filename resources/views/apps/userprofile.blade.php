    @extends('apps.master')

    @section('content')

        <div class="col-md-9 profileTeam userprofile">
            <div class="wight-bg ">
                <div class="usercover" style="height:294px; ">
                    <div class="usercover-overlay"></div>
                    <div style=" height:294px;
                     background: url({{ url('') }}/uploads/{{$UserProfile->coverimage}}); background-size: cover ">

                        <div class="CoverContent" align="center"> 
                        @if ($UserProfile->user_id === auth()->user()->id )

                		@else 
                            <div class="user-img2" style="background: url({{ url('') }}/uploads/{{$UserProfile->image}}) center 0; ">
                                <div class="user-overlay fade1" align="center">
                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                </div>
                            </div>

                            <h3><i class="fa fa-user" aria-hidden="true" style="color: #fff"></i>
                      			  {{ $UserProfile->user->name or 'erorr' }}
                            </h3>
                            <ul class="list-inline">
                                <li>
                                    <i class="fa fa-suitcase" aria-hidden="true"></i>

			                       {{ $UserProfile->jobtitle or 'erorr' }}
                                </li>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    غزة - فلسطين
                                </li>
                            </ul>
  								@endif

                        </div>
                    </div>
                </div>
                <div class="left-content ">
                    <div class="row ">
                        <div class="col-md-3">
                            <!-- star rating-->
                            <form class="ltr-dir" style="display: table ">
                                <input type="text" class="kv-fa rating-loading" value="2" dir="rtl" data-size="xs"
                                       title="">

                                <div class="clearfix"></div>
                            </form>
                            <!--#star rating -->
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-3">
                            <div class="dropdown">
                                <button class="btn main-bg dropdown-toggle" type="button" data-toggle="dropdown">تواصل
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">HTML</a></li>
                                    <li><a href="#">CSS</a></li>
                                    <li><a href="#">JavaScript</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row  text-right">
                        <h3 class="text-right">
                            نبذة
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                        </h3>


                        <div class="col-md-1"></div>
                        <div class="col-md-10">


                        <div id="_token" class="hidden" data-token="{{ csrf_token() }}"></div>

                            <p class="text-justify" id="description" data-url="{{url('/app/updatemyprofile')}}"  data-pk="{{ $UserProfile->id }}" data-type="textarea" data-placement="right" data-name="description"
                        data-title="تعديل وصف المجموعة " >
                        {{ $UserProfile->description or ''}}

                        </p>
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>

                    <hr>

                    <div class="row  text-right">
                        <h3 class="text-right">
                            التخصص
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                        </h3>


                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <ul class="list-inline">
                                <li><img src="{{url('landingpage')}}/img/books-stack-of-three.png" alt="" height="35"></li>
                                <li><p class="text-justify" contenteditable="true">
                                    {{ $userspical->name or '' }}
                                </p></li>
                            </ul>
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


<script type="text/javascript">
$(document).ready(function() {
    // in case you don't want the modal
        //var tags = $("#tags").text().split(',')

        var $a= $.fn.editable.defaults.mode = 'inline';

      $.fn.editable.defaults.params = function (params) 
       {
        params._token = $("#_token").data("token");
        return params;
       };


$(function(){
    //local source
    $('#skills').editable({
        source: [
        @foreach ($skills as $userskill)
              {id: '{{ $userskill->id }}', text: '{{ $userskill->name }}'},
        @endforeach      
           ],
        select2: {
           multiple: true
        }
    });
         $('#skills').editable();

    $('#skills').editable({
                validate: function(value) {
                if($.trim(value) == '') 
                    return 'Value is required.';
                },
                ajaxOptions: {
                dataType: 'json',
                type: 'post'
                }} );

});  
      

});
</script>

            <div class="col-md-10">
                                  <div id="_token" class="hidden" data-token="{{ csrf_token() }}"></div>
                            <ul class="list-inline skills" 
                                    id="skills"
                             data-url="{{url('/app/updatemyskillsprofile')}}"
                             data-pk="{{ $UserProfile->id }}" 
                             data-type="select2" 
                             data-placement="right" 
                             data-name="skills"
                        	 data-title="تعديل وصف المجموعة " 
                        	 data-value="{{implode(',', array_values($UserProfileSkillsIds->toarray()))}}" >

                                @foreach ($UserProfile->userProfileSkills as $userskill)
                                    <li>
                                    <a href="" >
                                     <span class="label label-default">
                                     {{ $userskill->name }}
                                     </span>
                                     </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>

                    <hr>
                    @if($bids > 0 )
                    <div class="row  text-right">
                        <h3 class="text-right">
                           العروض 
                            <span>{{ $bids }}</span>
                        </h3>

                        <div class="col-md-6">
                            <h5>
                                الجاهزة
                                <span>{{ $finishbids }}</span>
                            </h5>

                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100" style="width:{{
                                    $finishbids/$bids*100
                                    }}%">
                                    %{{
                                    floor($finishbids/$bids*100)
                                    }}

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5>بإنتظار الموافقة
                                <span>{{ $waitingbids }}</span>
                            </h5>

                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100" style="width:{{
                                    $waitingbids/$bids*100
                                    }}%">
                                    %{{
                                    floor($waitingbids/$bids*100)
                                    }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5>
                                منتهى
                                <span>{{ $endbids }}</span>
                            </h5>

                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100" style="width:{{
                                    $endbids/$bids*100
                                    }}%">
                                    %{{
                                    floor($endbids/$bids*100)
                                    }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5>
                                مستبعد
                                <span>{{ $excludedbids }}</span>
                            </h5>

                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100" style="width:{{
                                    $excludedbids/$bids*100
                                    }}%">
                                    %{{
                                    floor($excludedbids/$bids*100)
                                    }}
                                </div>
                            </div>
                        </div>
                        <button class="btn main-bg fade1 pull-left" style="margin-left: 15px">
                            استعراض
                        </button>
                    </div>
                    @elseif($bids<=0)

                    @endif


                    <hr>

                    <div class="row  " align="center">
                        <h3 class="text-right ">
                            معرض أعمالي
                            <a class="main-color" href="{{ url('app/adduserprotfolio') }}">
                             <i class="fa fa-plus-circle" aria-hidden="true"></i>
                             </a>

                        </h3>

                        <div class="galleryteam">
                        @foreach($prorfolios as $prorfolio)
                            <div class="col-md-4">
                                <div class="portfolio-box ">
                                    <a href="##" data-toggle="modal" data-target="#ptotofileTeam{{ $prorfolio->id }}">
                                        <div class="portfolio-ovarlay fade1">
                                            <span> <img src="{{ url('landingpage')}}/img/Link-48.png" alt=""/></span>

                                            <h3 class="bold-font">
                                                {{ $prorfolio->name }}
                                            </h3>
                                        </div>
                                    </a>
                                    <img src="{{ url('uploads/'.$prorfolio->image)}}" class="img-rounded" alt=""/>
                                </div>
                            </div>
                        @endforeach    

                        </div>
                    </div>


                    <hr>

                    <div class="row  myteams" align="center">
                        <h3 class="text-right" >
                            فريقي
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                        </h3>

                        <div class="user-img2" style="background: url({{ url('landingpage') }}/img/myteam.png) center ;border-color: #ade1d1"></div>
                        <h4 class="bold-font" contenteditable="true">
                            الوسائط المتعددة
                        </h4>
                        <small contenteditable="true">
                            عدد الأعضاء 6
                        </small>
                    </div>

                </div>
            </div>
        </div>

    @stop
