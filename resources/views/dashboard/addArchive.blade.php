{{--@extends('mainStyle')--}}

{{--@section('body')--}}
<h2 class="rtl">إضافة أشخاص:</h2>

<div class="row justify-content-center">
    <div class="col-md-9">


        <form method="POST" action="{{ route('admin.store') }}">
            @csrf

            <div class="form-group row">
                <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('السنة') }}</label>
                <div class="col-md-6">
                    <input id="year" type="number" class="form-control @error('year') is-invalid @enderror" name="year"
                           required min="1350" max="2050">

                    @error('year')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('الاسم') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                           required autocomplete="name">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('المنصب') }}</label>

                <div class="col-md-6">
                    <input id="position" type="text" class="form-control @error('position') is-invalid @enderror"
                           name="position" required>

                    @error('position')
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('add to archive') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
