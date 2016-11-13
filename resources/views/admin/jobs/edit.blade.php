@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Jobs</h3>
    
    {!! Form::model($job, ['method' => 'PUT', 'route' => ['jobs.update', $job->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title', 'Name oF the Jop', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'عنوان الوظيفة']) !!}
                    <p class="help-block">عنوان الوظيفة</p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('user_id', 'User Added', ['class' => 'control-label']) !!}
                    {!! Form::select('user_id', $users, old('user_id'), ['class' => 'form-control']) !!}
                    <p class="help-block">المستخدم الذي أضاف الوظيفة </p>
                    @if($errors->has('user_id'))
                        <p class="help-block">
                            {{ $errors->first('user_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('price', 'Price', ['class' => 'control-label']) !!}
                    {!! Form::number('price', old('price'), ['class' => 'form-control', 'placeholder' => 'الميزانية']) !!}
                    <p class="help-block">الميزانية</p>
                    @if($errors->has('price'))
                        <p class="help-block">
                            {{ $errors->first('price') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('length', 'Length', ['class' => 'control-label']) !!}
                    {!! Form::number('length', old('length'), ['class' => 'form-control', 'placeholder' => 'المدة المتوقعة']) !!}
                    <p class="help-block">المدة المتوقعة</p>
                    @if($errors->has('length'))
                        <p class="help-block">
                            {{ $errors->first('length') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
                    {!! Form::textarea('description', old('description'), ['class' => 'form-control ', 'placeholder' => 'وصف الوظيفة']) !!}
                    <p class="help-block">وصف الوظيفة</p>
                    @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('specialty', 'Specialty', ['class' => 'control-label']) !!}
                    {!! Form::text('specialty', old('specialty'), ['class' => 'form-control', 'placeholder' => 'التخصصات المطلوبة في الوظيفة']) !!}
                    <p class="help-block">التخصصات المطلوبة في الوظيفة</p>
                    @if($errors->has('specialty'))
                        <p class="help-block">
                            {{ $errors->first('specialty') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('skills', 'Skills', ['class' => 'control-label']) !!}
                    {!! Form::text('skills', old('skills'), ['class' => 'form-control', 'placeholder' => 'المهارات المطلوبة في الوظيفة']) !!}
                    <p class="help-block">المهارات المطلوبة في الوظيفة</p>
                    @if($errors->has('skills'))
                        <p class="help-block">
                            {{ $errors->first('skills') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('file', 'File', ['class' => 'control-label']) !!}
                    {!! Form::file('file', old('file'), ['class' => 'form-control']) !!}
                    {!! Form::hidden('file_max_size', 50) !!}
                    <p class="help-block">ملفات مرفقة</p>
                    @if($errors->has('file'))
                        <p class="help-block">
                            {{ $errors->first('file') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('end_date', 'End Date', ['class' => 'control-label']) !!}
                    {!! Form::text('end_date', old('end_date'), ['class' => 'form-control date', 'placeholder' => 'تاريخ نهاية الوظيفة']) !!}
                    <p class="help-block">تاريخ نهاية الوظيفة</p>
                    @if($errors->has('end_date'))
                        <p class="help-block">
                            {{ $errors->first('end_date') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}"
        });
    </script>

@stop