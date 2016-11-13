@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Skills</h3>
    
    {!! Form::model($skill, ['method' => 'PUT', 'route' => ['skills.update', $skill->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Skill Name', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'skill name']) !!}
                    <p class="help-block">skill name</p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
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
            
        </div>
    </div>

    {!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

