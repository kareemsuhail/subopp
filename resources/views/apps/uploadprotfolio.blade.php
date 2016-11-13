    @extends('apps.master')

    @section('content')
        <div class="col-md-9 ">
            <div class="wight-bg upload-page">
                <div class="row">
                <form action="{{url('/app/storeuserprotfolio')}}" method="post" enctype="multipart/form-data">
                 {{ csrf_field() }}
                <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                <input type="hidden" value="2" name="type_id">

                    <div class="col-md-4">

                        <div class="form-group text-right">
                            <label>عـنوان المشروع</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group text-right">
                            <label>رابط المشروع</label>
                            <input name="url" type="url" class="form-control">
                        </div>

                        <div class="form-group text-right">
                            <label>وصـف المشروع</label>

                            <textarea name="description" class="form-control" rows="5" id="comment"></textarea>
                        </div>

                    </div>
                    <div class="col-md-8"></div>
                    <!--
                    <div class="form-group text-right col-md-11">
                        <label>
                            المهـارات المستخـدمة

                        </label> <select multiple>
                        <option value="0">Zero</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                    </select>

                    </div>
                    <div class="col-md-1"></div>
                    -->
                    <div class="form-group text-right col-md-11">
                        <label class=" control-label ">
                            صورة العمل 
                        </label>

                        <div class="browse-btn">
                            <span class="btn btn-default btn-file">
                                <input id="input-2" name="image" type="file" class="file" >
                            </span>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div>
                        <button type="submit" class="btn btn-default upload">رفع</button>
                    </div>

                </div>

                </form>
            </div>
        </div>
    @stop
