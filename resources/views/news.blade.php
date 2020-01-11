@extends('mainStyle')

@section('title')
	<title>Hi</title>
@endsection

@section('style')
	{{-- here you can put the styles of this page --}}
@endsection

@section('head')
	{{-- here you can put head elements for this page --}}
@endsection

@section('content')
        <h1>today's news</h1>
        <p>{{$person->position}}</p>
@endsection
