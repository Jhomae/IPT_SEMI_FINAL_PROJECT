@extends('layouts.app')

@section('content')

    <div class="container mt-4 w-50 border ">
        <h1 class="text-center">Create new Investor</h1>


        @if($message = Session::get('success'))


        <div class="alert alert-success alert-block text-center">
            {{-- <button type="button" class="close" data-dismiss="alert">X</button> --}}
                <strong>{{ $message }}</strong>
        </div>


        @endif

        {!! Form::open(['url' => ['store-investor'], 'method' => 'post']) !!}
            <div class="form-group">
                {{ Form::label('name','Name') }}
                {{ Form::text('name',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('address','Address') }}
                {{ Form::text('address',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('phone','Phone') }}
                {{ Form::text('phone',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group">
                {{ Form::label('investment','Investment') }}
                {{ Form::text('investment',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group shadow-none">
                {!! Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-success']) !!}

            </div>
        {!! Form::close() !!}

    </div>

@endsection
