@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">People Say</h3>
    
    {!! Form::model($people_say, ['method' => 'PUT', 'route' => ['people_says.update', $people_say->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                    <p class="help-block">Name</p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('jobtitle', 'Job Title', ['class' => 'control-label']) !!}
                    {!! Form::text('jobtitle', old('jobtitle'), ['class' => 'form-control', 'placeholder' => 'Job Title']) !!}
                    <p class="help-block">Job Title</p>
                    @if($errors->has('jobtitle'))
                        <p class="help-block">
                            {{ $errors->first('jobtitle') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('say', 'Say', ['class' => 'control-label']) !!}
                    {!! Form::textarea('say', old('say'), ['class' => 'form-control ', 'placeholder' => 'What he say']) !!}
                    <p class="help-block">What he say</p>
                    @if($errors->has('say'))
                        <p class="help-block">
                            {{ $errors->first('say') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
                    {!! Form::file('image', old('image'), ['class' => 'form-control']) !!}
                    {!! Form::hidden('image_max_size', 500000) !!}
                    {!! Form::hidden('image_max_width', 170) !!}
                    {!! Form::hidden('image_max_height', 170) !!}
                    <p class="help-block">Image</p>
                    @if($errors->has('image'))
                        <p class="help-block">
                            {{ $errors->first('image') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

