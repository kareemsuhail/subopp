@extends('apps.master')

@section('content')


<div class="col-md-9 ">
    <div class="wight-bg JobsPage">

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


        <div class="table-responsive-vertical shadow-z-1table-responsive-vertical shadow-z-1">
        @if (session()->has('erorrmsg'))
        <div class="alert alert-danger" style=" border-radius: 0px;">
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

            <table id="table" class="table  ">
                <tbody id="accordion">
            @foreach($jobs as $job)

                <tr data-toggle="collapse" data-parent="#accordion" href="#collapse-job{{ $job->id}}">

                    <td class="text-right">

                        <h2>
                            {{ $job->title }}
                        </h2>
                        <ul class="list-inline">
                            <li>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                        <span>
                                            بواسطة:
                                        </span>
                                {{ $job->user->name or 'erorr' }}
                            </li>
                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>
                                منذ {{ $job->created_at}}
                            </li>
                            @if ($job->file != '')

                            <li>

                            <i class="fa fa-paperclip" aria-hidden="true"></i>
                                <a target="_blank" href="{{ url('landingpage') }}/file/{{ $job->file }}">ملفات مرفقة</a>

                            </li>

                            @else
                            
                            @endif
                        </ul>

                    </td>
                    <td class="text-center">
                        <ul class="list-unstyled list2">
                            <li>الســعر</li>
                            <li>{{ $job->price}}$</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <ul class="list-unstyled list2">
                            <li>المدة</li>
                            <li>{{ $job->length}}<span>يوم</span></li>
                        </ul>
                    </td>

                </tr>

                <!-- collapse:more info-->

                <tr >
                    <td colspan="6" class="hiddenRow">
                        <div id="collapse-job{{$job->id}}" class="panel-collapse collapse @if ($job->id === 49) in @else @endif ">
                            <div class=" table-responsive-vertical shadow-z-1table-responsive-vertical shadow-z-1">
                                <table class="table  ">
                                    <tr>
                                        <td class="text-right " style="width: 69%">
                                            <p>
                                {{ $job->description}}
                                            </p>
                                            <ul class="list-inline lable-skills">
                                            
                                            @foreach ($job->jobSkills as $jobskill)
                                                <li>
                                                <a href="">
                                                 <span class="label label-default">{{$jobskill->name}}
                                                 </span>
                                                 </a>
                                                </li>

                                                @endforeach
                                             
                                            </ul>
                                        </td>
                                        
                                        <td class="text-center">
                                        @if (in_array($job->id,$bid))
                                        <button  class="btn  btn-default fade1">تم التقديم</button>
                                        @else
                                        <form method="post" action="/app/creat/bid">
                                            <input name="price" type="number" class="form-control" placeholder="سعر المشروع ">
                                        </td>
                                        <td class="text-center">
                                            <input name="length" type="number" class="form-control" placeholder=" مدة لمشروع">
                                             <input name="job_id" type="hidden" value="{{ $job->id}}">
                                             {{ csrf_field() }}
                                             <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                                             <input type="hidden" value="1" name="status_id">
                                             <input type="hidden" value="2" name="type_id">
                                            <button type="submit" class="btn  main-bg fade1">تقدم</button>
                                             </form> 
                                             @endif  
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </td>

                </tr>

            @endforeach
                </tbody>
            </table>
        </div>

        <ul class="pagination " >
        {{ $jobs->links() }}
        </ul>


    </div>
</div>




@stop
