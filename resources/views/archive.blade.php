@extends('mainStyle')

@section('head')
	<style>
		.year{

		}
		.person{

		}
	</style>
@endsection

@section('body')

	@foreach($years as $year)
		<p class="year">{{$year}}:</p>

		@foreach($persons as $person)
			@if ($year == $person->year)
				<p class="person">{{$person->name}}</p>
			@endif

		@endforeach
	@endforeach

@endsection
