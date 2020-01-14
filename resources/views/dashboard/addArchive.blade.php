{{--@extends('mainStyle')--}}

{{--@section('body')--}}
	<style>
		body{
		}
	</style>
	<h2>إضافة أشخاص:</h2>
	<form method="POST" action="/dashboard">
		@csrf
		<p class="year"> السنة : </p>
		<input type="number" name="year" min="1350" max="2050" step="1" required>
{{--		<p class="help is-danger">{{ $errors->first()}}</p>--}}

		<p class="name"> الاسم : </p>
		<input type="text" name="name" required>
{{--		<p class="help is-danger">{{ $errors->first()}}</p>--}}

		<p class="name"> المنصب : </p>
		<input type="text" name="position" placeholder="ننصح باستخدم اسم موحد لكل منصب" required>
{{--		<p class="help is-danger">{{ $errors->first()}}</p>--}}
		<button type="submit">إرسال</button>
	</form>
