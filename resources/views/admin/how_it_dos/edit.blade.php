@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">How It Do</h3>
    
    {!! Form::model($how_it_do, ['method' => 'PUT', 'route' => ['how_it_dos.update', $how_it_do->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'TItle']) !!}
                    <p class="help-block">TItle</p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('short_info', 'Short Info', ['class' => 'control-label']) !!}
                    {!! Form::text('short_info', old('short_info'), ['class' => 'form-control', 'placeholder' => 'Short Info']) !!}
                    <p class="help-block">Short Info</p>
                    @if($errors->has('short_info'))
                        <p class="help-block">
                            {{ $errors->first('short_info') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('Description', 'description', ['class' => 'control-label']) !!}
                    {!! Form::textarea('Description', old('Description'), ['class' => 'form-control ', 'placeholder' => 'Description']) !!}
                    <p class="help-block">Description</p>
                    @if($errors->has('Description'))
                        <p class="help-block">
                            {{ $errors->first('Description') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
                    {!! Form::file('image', old('image'), ['class' => 'form-control']) !!}
                    {!! Form::hidden('image_max_size', 500000) !!}
                    {!! Form::hidden('image_max_width', 3692) !!}
                    {!! Form::hidden('image_max_height', 1000) !!}
                    <p class="help-block">Image</p>
                    @if($errors->has('image'))
                        <p class="help-block">
                            {{ $errors->first('image') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('video_url', 'Video Url', ['class' => 'control-label']) !!}
                    {!! Form::text('video_url', old('video_url'), ['class' => 'form-control', 'placeholder' => 'Video Url']) !!}
                    <p class="help-block">Video Url</p>
                    @if($errors->has('video_url'))
                        <p class="help-block">
                            {{ $errors->first('video_url') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

