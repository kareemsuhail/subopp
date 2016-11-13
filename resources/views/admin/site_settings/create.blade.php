@extends('admin.layouts.app')

@section('admin.content')

    <h3 class="page-title">Site Setting</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['site_settings.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Create
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'WebSite Name', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'WebSite Name']) !!}
                    <p class="help-block">WebSite Name</p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('language_id', 'WebSite Language', ['class' => 'control-label']) !!}
                    {!! Form::select('language_id', $languages, old('language_id'), ['class' => 'form-control']) !!}
                    <p class="help-block">Language</p>
                    @if($errors->has('language_id'))
                        <p class="help-block">
                            {{ $errors->first('language_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('meta_tag', 'Description', ['class' => 'control-label']) !!}
                    {!! Form::textarea('meta_tag', old('meta_tag'), ['class' => 'form-control ', 'placeholder' => 'Description']) !!}
                    <p class="help-block">Description</p>
                    @if($errors->has('meta_tag'))
                        <p class="help-block">
                            {{ $errors->first('meta_tag') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('url', 'WebSite Url', ['class' => 'control-label']) !!}
                    {!! Form::text('url', old('url'), ['class' => 'form-control', 'placeholder' => 'Our Domain']) !!}
                    <p class="help-block">Our Domain</p>
                    @if($errors->has('url'))
                        <p class="help-block">
                            {{ $errors->first('url') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

