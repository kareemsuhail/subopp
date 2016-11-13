@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Spical</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['spicals.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Create
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Specialty Name', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'specialty name']) !!}
                    <p class="help-block">specialty name</p>
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

