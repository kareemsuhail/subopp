@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Users Profiles</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['users_profiles.store'], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Create
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('user_id', 'User', ['class' => 'control-label']) !!}
                    {!! Form::select('user_id', $users, old('user_id'), ['class' => 'form-control']) !!}
                    <p class="help-block">ALaa Sami</p>
                    @if($errors->has('user_id'))
                        <p class="help-block">
                            {{ $errors->first('user_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('jobtitle', 'Job Title', ['class' => 'control-label']) !!}
                    {!! Form::text('jobtitle', old('jobtitle'), ['class' => 'form-control', 'placeholder' => 'Devloper']) !!}
                    <p class="help-block">Devloper</p>
                    @if($errors->has('jobtitle'))
                        <p class="help-block">
                            {{ $errors->first('jobtitle') }}
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
                    {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
                    {!! Form::file('image', old('image'), ['class' => 'form-control']) !!}
                    {!! Form::hidden('image_max_size', 100) !!}
                    {!! Form::hidden('image_max_width', 500) !!}
                    {!! Form::hidden('image_max_height', 500) !!}
                    <p class="help-block">image</p>
                    @if($errors->has('image'))
                        <p class="help-block">
                            {{ $errors->first('image') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('birthday', 'Birth Day', ['class' => 'control-label']) !!}
                    {!! Form::text('birthday', old('birthday'), ['class' => 'form-control date', 'placeholder' => '12/08/1990']) !!}
                    <p class="help-block">12/08/1990</p>
                    @if($errors->has('birthday'))
                        <p class="help-block">
                            {{ $errors->first('birthday') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
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