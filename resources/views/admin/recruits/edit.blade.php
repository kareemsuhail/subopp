@extends('admin.layouts.app')

@section('admin.content')

    <h3 class="page-title">Recruit</h3>
    
    {!! Form::model($recruit, ['method' => 'PUT', 'route' => ['recruits.update', $recruit->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('job_id', 'Jobs have bid', ['class' => 'control-label']) !!}
                    {!! Form::select('job_id', $jobs, old('job_id'), ['class' => 'form-control']) !!}
                    <p class="help-block">الوظيفة التي تم التقديم عليها</p>
                    @if($errors->has('job_id'))
                        <p class="help-block">
                            {{ $errors->first('job_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('user_id', 'User', ['class' => 'control-label']) !!}
                    {!! Form::select('user_id', $users, old('user_id'), ['class' => 'form-control']) !!}
                    <p class="help-block">المستخدم الذي تم توظيفه</p>
                    @if($errors->has('user_id'))
                        <p class="help-block">
                            {{ $errors->first('user_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('end_date', 'End Date', ['class' => 'control-label']) !!}
                    {!! Form::text('end_date', old('end_date'), ['class' => 'form-control date', 'placeholder' => 'تاريخ انتهاء الوظيفة']) !!}
                    <p class="help-block">تاريخ انتهاء الوظيفة</p>
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