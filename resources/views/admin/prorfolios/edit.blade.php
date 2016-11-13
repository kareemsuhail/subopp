@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Prorfolio</h3>
    
    {!! Form::model($prorfolio, ['method' => 'PUT', 'route' => ['prorfolios.update', $prorfolio->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Web Site']) !!}
                    <p class="help-block">Web Site</p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('url', 'Url', ['class' => 'control-label']) !!}
                    {!! Form::text('url', old('url'), ['class' => 'form-control', 'placeholder' => 'www.subopp.com']) !!}
                    <p class="help-block">www.subopp.com</p>
                    @if($errors->has('url'))
                        <p class="help-block">
                            {{ $errors->first('url') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
                    {!! Form::file('image', old('image'), ['class' => 'form-control']) !!}
                    {!! Form::hidden('image_max_size', 100) !!}
                    {!! Form::hidden('image_max_width', 1000) !!}
                    {!! Form::hidden('image_max_height', 1000) !!}
                    <p class="help-block">example</p>
                    @if($errors->has('image'))
                        <p class="help-block">
                            {{ $errors->first('image') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('type_id', 'Type', ['class' => 'control-label']) !!}
                    {!! Form::select('type_id', $types, old('type_id'), ['class' => 'form-control']) !!}
                    <p class="help-block">فريق,شخص</p>
                    @if($errors->has('type_id'))
                        <p class="help-block">
                            {{ $errors->first('type_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('user_id', 'User', ['class' => 'control-label']) !!}
                    {!! Form::select('user_id', $users, old('user_id'), ['class' => 'form-control']) !!}
                    <p class="help-block">ALaa Samo</p>
                    @if($errors->has('user_id'))
                        <p class="help-block">
                            {{ $errors->first('user_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('team_id', 'Team', ['class' => 'control-label']) !!}
                    {!! Form::select('team_id', $teams, old('team_id'), ['class' => 'form-control']) !!}
                    <p class="help-block">SubOpp Team</p>
                    @if($errors->has('team_id'))
                        <p class="help-block">
                            {{ $errors->first('team_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

