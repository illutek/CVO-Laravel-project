@extends('main')

@section('title', '| Edit Post')

@section('content')
    <div class="row">
        {{--Om de forms op te zetten een aantal dingen toevoegen die in de vorige versie van Laravel nog wel
            aanwezig waren (Laravel4)https://laravelcollective.com/docs/5.3/html
            een andere manier om de array te schrijven vanaf php 5.4
            array('route' => array('posts.update', $post->id)))
            ['route' => ['posts.update', $post->id]]
            --}}

        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
        <div class="col-md-8">

            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}

            {{ Form::label('body', 'Post Body', ['class' => 'form-spacing-top']) }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}

        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ date('j M, Y H:i', strtotime($post->created_at)) }}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Update At:</dt>
                    <dd>{{ date('j M, Y H:i', strtotime($post->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        {!! Html::linkRoute('posts.show', 'CANCEL', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                    <div class="col-md-6">
                        {{ Form::submit('SAVE', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>{{-- end of .row--}}

@endsection