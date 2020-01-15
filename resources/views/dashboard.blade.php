@extends('layouts.app')

@section('head')
    <style>
        .form-contents {
            background: #c7eed8;
            padding: 12px;
            margin: 10px;
        }

    </style>
@endsection

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
                            <div class="form-contents">
                                <h3 class="year">{{$year}}:</h3>
                                @foreach($persons as $person)
                                    @if ($year == $person->year)

                                        <input type="hidden" name="id" value="{{$person->id}}">
                                        <label>year:
                                            <input type="number" name="year" min="2008" max="2030" step="1" value="{{$person->year}}">
                                        </label>
                                        <label>name:
                                            <input type="text" name="name" value="{{$person->name}}">
                                        </label>
                                        <label>position:
                                            <input type="text" name="position" value="{{$person->position}}">
                                        </label>

                                        <form method="POST" action="/dashboard">
                                            @csrf
                                            @method('PUT')
{{--                                            <input type="hidden" name="id" value="{{$person->id}}">--}}
{{--                                            <input type="hidden" name="year" min="2008" max="2030" step="1" value="{{$person->year}}">--}}
{{--                                            <input type="hidden" name="name" value="{{$person->name}}">--}}
{{--                                            <input type="hidden" name="position" value="{{$person->position}}">--}}
                                            <button type="submit">تحديث البيانات</button>
                                        </form>

                                        <form method="post" action="dashboard">
                                            @csrf
                                            @method('DELETE')
{{--                                            <input type="hidden" name="id" value="{{$person->id}}">--}}
{{--                                            <input type="hidden" name="year" min="2008" max="2030" step="1" value="{{$person->year}}">--}}
{{--                                            <input type="hidden" name="name" value="{{$person->name}}">--}}
{{--                                            <input type="hidden" name="position" value="{{$person->position}}">--}}
                                            <button type="submit">حذف البيانات</button>
                                        </form>

                                    @endif
                                @endforeach
                            </div>
                        @endforeach

                        @component('dashboard.addArchive') @endcomponent


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
