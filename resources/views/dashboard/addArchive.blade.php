{{--@extends('mainStyle')--}}

{{--@section('body')--}}
<h2 class="rtl">إضافة أشخاص:</h2>

<div class="row justify-content-center">
    <div class="col-md-9">


        <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('السنة') }}</label>
                <div class="col-md-6">
                    <input id="year" type="number" class="form-control @error('year') is-invalid @enderror" name="year"
                           required min="1350" max="2050" value="{{old('year')}}">

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
                           required value="{{old('name')}}">

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
                           name="position" required value="{{old('position')}}">

                    @error('position')
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="twitter" class="col-md-4 col-form-label text-md-right">{{ __('twitter') }}</label>

                <div class="col-md-6">
                    <input id="twitter" type="text" class="form-control @error('twitter') is-invalid @enderror"
                           name="twitter" value="{{old('twitter')}}">

                    @error('twitter')
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="linkedin" class="col-md-4 col-form-label text-md-right">{{ __('linkedin') }}</label>

                <div class="col-md-6">
                    <input id="linkedin" type="text" class="form-control @error('linkedin') is-invalid @enderror"
                           name="linkedin" value="{{old('linkedin')}}">

                    @error('linkedin')
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>

                <div class="col-md-6">
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                           name="phone" value="{{old('phone')}}">

                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{old('email')}}">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                    @enderror
                </div>
            </div>

            <input class="form-control-file" type="file" name="avatar" id="avatar" aria-describedby="filehelp">
            <small id="filehelp" class="form-text text-muted">please upload a valid image file. size of image
                should not be more than 2mb.</small>
            @error('avatar')
            <p class="text-danger">try a real image file</p>
            @enderror

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
