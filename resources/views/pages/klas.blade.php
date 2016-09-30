@extends('main')

@section('title' , '| Klasgenoten')


@section('content')
    <h2>De donderdag avond klas</h2>
    @if(empty($klasgenoten))
        <p>het is maar stil</p>
    @else
        <ul>
            @foreach($klasgenoten as $persoon)
                <li>{{ $persoon }}</li>
            @endforeach
        </ul>
    @endif

@endsection
