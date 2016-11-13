@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Bid Type</h3>
    
    {!! Form::model($bid_type, ['method' => 'PUT', 'route' => ['bid_types.update', $bid_type->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Bid Type', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'bid type' or '']) !!}
                    <p class="help-block">bid type</p>
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

