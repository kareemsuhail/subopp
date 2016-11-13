@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Countries</h3>
    
    {!! Form::model($country, ['method' => 'PUT', 'route' => ['countries.update', $country->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name Of Country', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Name Of Country']) !!}
                    <p class="help-block">Name Of Country</p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

