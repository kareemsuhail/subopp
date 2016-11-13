    @extends('apps.master')

    @section('content')

 
        <div class="col-md-9 ">
            <div class="wight-bg JobsPage">

                <div class="table-responsive-vertical shadow-z-1table-responsive-vertical shadow-z-1">
                    <table id="table" class="table  ">
                        <tbody id="accordion">
                    @foreach($jobs as $job)

                        <tr data-toggle="collapse" data-parent="#accordion" href="#collapse-job{{ $job->id}}">

                            <td class="text-right">

                                <h2>
                                    {{ $job->title }}
                                </h2>
                                <ul class="list-inline">

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
                                <div id="collapse-job{{ $job->id}}" class="panel-collapse collapse @if ($job->id === 49) in @else @endif ">
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
                                                 
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ url('bids').'/'.$job->id}}" class="btn  main-bg fade1"> العروض المقدمة </a>

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
        