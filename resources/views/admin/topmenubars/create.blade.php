@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Top Bars</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['top_bars.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Create
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title', 'Name Of Item', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'Name Of Item']) !!}
                    <p class="help-block">Name Of Item</p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('Url', 'Link Of Item', ['class' => 'control-label']) !!}
                    {!! Form::text('Url', old('Url'), ['class' => 'form-control', 'placeholder' => 'Url Of Item']) !!}
                    <p class="help-block">Url Of Item</p>
                    @if($errors->has('Url'))
                        <p class="help-block">
                            {{ $errors->first('Url') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

