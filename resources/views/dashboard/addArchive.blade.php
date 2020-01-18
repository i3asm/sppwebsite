{{--@extends('mainStyle')--}}

{{--@section('body')--}}
<h2 class="rtl">إضافة أشخاص:</h2>

<form class="rtl" method="POST" action="{{route('home.store')}}">
  @csrf
  <div class="form-group">
    <label>السنة:
      <input type="number" class="form-control" name="year" min="1350" max="2050" step="1" required>
    </label>
  </div>
  <div class="form-group">
    <label>الاسم:
      <input type="text" class="form-control" name="name" required>
    </label>
  </div>
  <div class="form-group">
    <label>المنصب:
      <input type="text" class="form-control" name="position" required>
    </label>
  </div>
  <button type="submit" class="btn btn-success">إرسال</button>
</form>
