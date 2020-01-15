@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Dashboard</div>

					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif


						@foreach($years as $year)
							<h3 class="year">{{$year}}:</h3>
							@foreach($persons as $person)
								@if ($year == $person->year)

									<form method="POST" action="/dashboard">
										@csrf
										@method('PUT')
										<input type="hidden" name="id" value="{{$person->id}}">
										<input type="number" name="year" min="2008" max="2030" step="1"
											   value="{{$person->year}}">
										<input type="text" name="name" value="{{$person->name}}">
										<input type="text" name="position" value="{{$person->position}}">
										<button type="submit">تحديث البيانات</button>
									</form>
									<form method="post" action="dashboard">
										@csrf
										@method('DELETE')
										<input type="hidden" name="id" value="{{$person->id}}">
										<button type="submit">حذف البيانات</button>
									</form>

									<br>
								@endif
							@endforeach
							<br>
						@endforeach

						@component('dashboard.addArchive') @endcomponent


					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
