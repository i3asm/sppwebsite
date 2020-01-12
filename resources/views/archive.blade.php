@extends('mainStyle')

@section('head')
	<style>
		.year {

		}

		.person {

		}
	</style>
@endsection

@section('body')

	@foreach($years as $year)
		<h3 class="year">{{$year}}:</h3>
		@foreach($persons as $person)
			@if ($year == $person->year)
				<p class="person name">الاسم: {{$person->name}}</p>
				<p class="person position">المنصب: {{$person->position}}</p>
			@endif
		@endforeach
	@endforeach

@endsection
