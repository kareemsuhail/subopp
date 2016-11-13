@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Teams</h3>
    
    {!! Form::model($team, ['method' => 'PUT', 'route' => ['teams.update', $team->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Team Name', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'team name']) !!}
                    <p class="help-block">team name</p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('logo', 'Team Image', ['class' => 'control-label']) !!}
                    {!! Form::file('logo', old('logo'), ['class' => 'form-control']) !!}
                    {!! Form::hidden('logo_max_size', 50) !!}
                    {!! Form::hidden('logo_max_width', 500) !!}
                    {!! Form::hidden('logo_max_height', 500) !!}
                    <p class="help-block">logo of the team</p>
                    @if($errors->has('logo'))
                        <p class="help-block">
                            {{ $errors->first('logo') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
                    {!! Form::textarea('description', old('description'), ['class' => 'form-control ', 'placeholder' => 'description']) !!}
                    <p class="help-block">description</p>
                    @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('spical_id', 'Specialty', ['class' => 'control-label']) !!}
                    {!! Form::select('spical_id', $spicals, old('spical_id'), ['class' => 'form-control']) !!}
                    <p class="help-block">Specialty</p>
                    @if($errors->has('spical_id'))
                        <p class="help-block">
                            {{ $errors->first('spical_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('user_id', 'User', ['class' => 'control-label']) !!}
                    {!! Form::select('user_id', $users, old('user_id'), ['class' => 'form-control']) !!}
                    <p class="help-block">user who crate the team</p>
                    @if($errors->has('user_id'))
                        <p class="help-block">
                            {{ $errors->first('user_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

