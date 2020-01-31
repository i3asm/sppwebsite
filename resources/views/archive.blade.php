@extends('mainStyle')

@section('head')
    <style>
        {{-- put iny style that is specificly made for this page --}}
        {{-- or source it from the public folder --}}
    </style>
@endsection

@section('body')

    @foreach($persons as $person)
        {{-- these are required in the database no need to check for it --}}
        <p class="person year">{{$person->year}}</p>
        <p class="person name">{{$person->name}}</p>
        <p class="person position">{{$person->position}}</p>

        {{-- these if() conditions is there to put anything related to the links inside it, like icons --}}
        @if($person->twitter != null)
            <a href="{{$person->twitter}}" class="person twitter ">{{$person->twitter}}</a>
        @endif
        @if($person->linkedin != null)
            <a href="{{$person->linkedin}}" class="person linkedin">{{$person->linkedin}}</a>
        @endif
        @if($person->phone != null)
            <a href="{{$person->phone}}" class="person phone ">{{$person->phone}}</a>
        @endif
        @if($person->email != null)
            <a href="mailto:{{$person->email}}" class="person email ">{{$person->email}}</a>
        @endif
        <img src="{{ asset('archives/'.$person->avatar) }}" style="max-width: 200px; max-height: 200px"
             alt="صورة {{$person->name}}" title="صورة {{$person->name}}">

    @endforeach

@endsection
