@extends('layouts.panel')
<?php  /** @var \Illuminate\Support\ViewErrorBag $errors */  ?>
@section('panel')
    <div class="panel-heading container-fluid">
        <div class="form-group">
            <a class="btn btn-info btn-xs col-md-1 col-sm-2 col-xs-2" href="{{route('genre.index')}}">
                <i class="fa fa-backward" aria-hidden="true"></i> Back
            </a>
            <h1>Edit Size: <b>{{$genre->name}}</b></h1>

        </div>
    </div>

    <div class="panel-body">
        {!! Form::model($genre, ['route' => ['genre.update', $genre->id], 'method' => 'PUT']) !!}

        @include('genre._form')

        <div class="form-group">
            {!! Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
                <div class="pull-right">
                    {{Form::open(['class' => 'confirm-delete', 'route' => ['genre.destroy', $genre->id], 'method' => 'DELETE'])}}
                    {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
                    {{Form::close()}}
                </div>
    </div>

    {{--@include('layouts.errors')--}}

@endsection