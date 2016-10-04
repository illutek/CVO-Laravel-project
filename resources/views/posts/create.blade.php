@extends('main')

@section('title' ,'| Create a new post')

@section('stylesheets')
    {{-- de Html kan enkel door de toevoeging aliases bij config/app.php --}}
    {{-- toevoeging van Laravel Collective https://laravelcollective.com/docs/5.3/html--}}
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            {{-- parsley stukken is een javascript lib voor validation --}}
            {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array('class' => 'form-control', 'required' =>'', 'maxlength' => '255')) }}
            {{ Form::label('body', 'Postbody:') }}
            {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}
            <div class="btn-wrap">
                {{ Form::submit('Create Post', array('class' => 'btn-success btn-lg btn-block')) }}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection