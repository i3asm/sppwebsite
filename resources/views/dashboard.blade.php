@extends('layouts.app')

@section('head')
    <style>
        body {
            direction: rtl;
        }

        .bg-warning {
            padding: 8px;
            margin: 8px;
        }

        .rtl {
            text-align: right;
        }

        .form-contents {
            background: #c7eed8;
            padding: 15px;
            margin: 8px;
            border-radius: 9px;
        }

        .row {
            margin-bottom: 20px;
        }

        .seperator {
            height: 2px;
            margin: 19px;
            background-color: #95999c;
        }

    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header rtl">لوحة التحكم</div>
                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach($years as $year)
                            <div class="form-contents">
                                <h3 class="rtl">
                                    @if ($year >= 1800)
                                        {{$year+1}}-{{$year}} م :
                                    @else
                                        {{$year+1}}-{{$year}} هـ :
                                    @endif
                                </h3>
                                @foreach($persons as $person)
                                    @if ($year == $person->year)

                                        <form class="rtl" method="POST"
                                              action="{{route('admin.update',['id'=>$person->id])}}">
                                            @csrf
                                            @method('PUT')
                                            <label class="rtl">السنة:
                                                <input type="number" class="form-control" name="year" min="1350"
                                                       max="2050" step="1"
                                                       value="{{$person->year}}">
                                            </label>
                                            <label class="rtl">الاسم:
                                                <input type="text" class="form-control" name="name"
                                                       value="{{$person->name}}">
                                            </label>
                                            <label class="rtl">المنصب:
                                                <input type="text" class="form-control" name="position"
                                                       value="{{$person->position}}">
                                            </label>
                                            <br>
                                            <button type="submit" class="btn btn-primary">تحديث البيانات</button>
                                            <a href="{{route('admin.delete',[$person->id])}}" class="btn btn-danger"
                                               role="button">حذف</a>
                                        </form>

                                    @endif
                                @endforeach
                            </div>
                        @endforeach
                        <div class="seperator"></div>
                        @component('dashboard.addArchive') @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header rtl">تعديل الحسابات
                        <div class="bg-warning">
                            <h2 class="text-danger rtl">
                                خاصية تعديل الحسابات هي على مسؤليتك الشخصية.
                            </h2>
                            <h5 class="text-danger rtl">
                                كل حساب تضيفه تصبح له كل الصلاحيات الممكنة في التعديل والحذف والإضافة، لا يمكن التراجع عن أي تغيير.
                            </h5>
                        </div>
                    </div>

                    <div class="card-body">
                        @component('dashboard.users', ['users' => $users]) @endcomponent
                    </div>

                </div>
            </div>
        </div>
    </div>

{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-9">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header rtl">تعديل الحسابات--}}
{{--                        <div class="bg-warning">--}}
{{--                            <h2 class="text-danger rtl">--}}
{{--                                خاصية تعديل الحسابات هي على مسؤليتك الشخصية.--}}
{{--                            </h2>--}}
{{--                            <h5 class="text-danger rtl">--}}
{{--                                كل حساب تضيفه تصبح له كل الصلاحيات الممكنة في التعديل والحذف والإضافة--}}
{{--                            </h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        @component('dashboard.register') @endcomponent--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
