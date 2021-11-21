@extends('layouts.app')

@section('content')

    <div class="container mt-4 w-50 border ">
        <h1 class="text-center">Create new Visitor</h1>


        @if($message = Session::get('success'))


        <div class="alert alert-success alert-block text-center">
                <strong>{{ $message }}</strong>
        </div>


        @endif

        {!! Form::open(['url' => ['store-visitor'], 'method' => 'post']) !!}
            <div class="form-group">
                {{ Form::label('name','Name') }}
                {{ Form::text('name',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('phone','Phone') }}
                {{ Form::text('phone',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('purpose','Purpose') }}
                {{ Form::text('purpose',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group">
                {{ Form::label('time','Time') }}
                {{ Form::text('time',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group shadow-none">
                {!! Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-success']) !!}

            </div>
        {!! Form::close() !!}

    </div>

@endsection
