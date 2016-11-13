@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Bids</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['bids.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Create
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
                    {!! Form::label('price', 'Price', ['class' => 'control-label']) !!}
                    {!! Form::number('price', old('price'), ['class' => 'form-control', 'placeholder' => 'السعر المقدم']) !!}
                    <p class="help-block">السعر المقدم</p>
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
                    {!! Form::text('length', old('length'), ['class' => 'form-control', 'placeholder' => 'المدة المقدمة']) !!}
                    <p class="help-block">المدة المقدمة</p>
                    @if($errors->has('length'))
                        <p class="help-block">
                            {{ $errors->first('length') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('type_id', 'Type', ['class' => 'control-label']) !!}
                    {!! Form::select('type_id', $types, old('type_id'), ['class' => 'form-control']) !!}
                    <p class="help-block">نوع التقديم</p>
                    @if($errors->has('type_id'))
                        <p class="help-block">
                            {{ $errors->first('type_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('user_id', 'User Bid', ['class' => 'control-label']) !!}
                    {!! Form::select('user_id', $users, old('user_id'), ['class' => 'form-control']) !!}
                    <p class="help-block">المستخدم المقدم للوظيفة</p>
                    @if($errors->has('user_id'))
                        <p class="help-block">
                            {{ $errors->first('user_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('team_id', 'Team Bid', ['class' => 'control-label']) !!}
                    {!! Form::select('team_id', $teams, old('team_id'), ['class' => 'form-control']) !!}
                    <p class="help-block">الفريق المقدم</p>
                    @if($errors->has('team_id'))
                        <p class="help-block">
                            {{ $errors->first('team_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('status_id', 'Status', ['class' => 'control-label']) !!}
                    {!! Form::select('status_id', $statuses, old('status_id'), ['class' => 'form-control']) !!}
                    <p class="help-block">حالة الوظيفة</p>
                    @if($errors->has('status_id'))
                        <p class="help-block">
                            {{ $errors->first('status_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('bidtype_id', 'Bid Type', ['class' => 'control-label']) !!}
                    {!! Form::select('bidtype_id', $bidtypes, old('bidtype_id'), ['class' => 'form-control']) !!}
                    <p class="help-block">حالة التقديم</p>
                    @if($errors->has('bidtype_id'))
                        <p class="help-block">
                            {{ $errors->first('bidtype_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

