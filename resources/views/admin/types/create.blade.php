@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Type</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['types.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Create
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Type', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'type']) !!}
                    <p class="help-block">type</p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

