{{--@extends('mainStyle')--}}

{{--@section('body')--}}
	<style>
		body{
			direction: rtl;
		}
	</style>
	<h2>إضافة أشخاص:</h2>
	<form method="POST" action="/dashboard">
		@csrf
		<p class="year"> السنة : </p>
		<input type="number" name="year" min="2008" max="2030" step="1">
		<br>

		<p class="name"> الاسم : </p>
		<input type="text" name="name">
		<br>

		<p class="name"> المنصب : </p>
		<input type="text" name="position" placeholder="ننصح باستخدم اسم موحد لكل منصب">

		<br>
		<button type="submit">إرسال</button>
	</form>



{{--	<h2>add new person to the archive</h2>--}}
{{--	<form method="POST" action="/dashboard">--}}
{{--		@csrf--}}
{{--		<p class="year"> السنة : </p>--}}
{{--		<input type="number" name="year" min="2008" max="2030" step="1">--}}
{{--		<br>--}}

{{--		<p class="name"> الاسم : </p>--}}
{{--		<input type="text" name="name">--}}
{{--		<br>--}}

{{--		<p class="name"> المنصب : </p>--}}
{{--		<input type="text" name="position" placeholder="ننصح باستخدم اسم موحد لكل منصب">--}}

{{--		<br>--}}
{{--		<button type="submit">إرسال</button>--}}
{{--	</form>--}}

{{--@endsection--}}
