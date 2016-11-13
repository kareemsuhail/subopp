
@extends('apps.master')

@section('content')



<div class="col-md-9 member">
    <div class="wight-bg">
        <div class="left-content">
            <div class="row" align="center">

                <div class="table-responsive-vertical shadow-z-1table-responsive-vertical shadow-z-1">

                    <table class="table">
                        <tbody>
	@foreach($bids as $bid)
	    <tr>
	        <td>
	            <div class="media">
	                <a class="media-left" href="#">
	                    <img class="media-object img-circle" src="{{ url('')}}/uploads/{{$bid->user->UsersProfile->image }}" alt=""
	                         width="62" height="62">
	                </a>

	                <div class="media-body text-right">
	                    <ul class="list-inline freelancer-info">
	                        <li>
	                        <h4 class="media-heading">

	                        {{ $bid->user->name }}

	                        </h4>
	                         <small> 
	                         {{ $bid->user->UsersProfile->jobtitle }}
	                         </small>
	                        </li>
	                        <li>
	                            <form class="ltr-dir" style="display: table ">
	                                <input type="text" class="kv-fa rating-loading"
	                                       value="2" dir="rtl" data-size="xs" title="">

	                                <div class="clearfix"></div>
	                            </form>
	                        </li>
	                        <li class="pull-left">
	                                <span>
	                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
	                                    {{ $bid->created_at }}
	                                </span>
	                        </li>
	                    </ul>
	                </div>
	            </div>

	            <ul class="list-inline lable-skills">
                @foreach ($bid->userProfileSkills as $userkill)
                    <li>
                    <a href="">
                     <span class="label label-default">{{$userkill->name}}
                     </span>
                     </a>
                    </li>

                    @endforeach	

	            </ul>

	        </td>
	        <td>
	            <ul class="list-unstyled list2">
	                <li>السعر</li>
	                <li>{{ $bid->price }}$</li>
	                <li>
	                <form action="" method="post">
	                
	                    <button type="submit" class="btn  main-bg fade1">توظيف</button>
	                </form>
	                </li>
	            </ul>
	        </td>
	        <td>
	            <ul class="list-unstyled list2">
	                <li>المدة</li>
	                <li>{{ $bid->length }}<span>يوم</span></li>
	                <li>
	                    <button type="submit" class="btn  main-bg fade1">رسالة</button>
	                </li>
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

@stop    