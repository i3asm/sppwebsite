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
            background-color: #ddd;
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
                        @component('dashboard.archiveEdit', ['years' => $years, 'persons' => $persons])@endcomponent
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
                    <div class="card-header rtl">محتويات الصفحة الرئيسية</div>
                    <div class="card-body">
                        @component('dashboard.homeEdit', ['homes' => $homes])
                        @endcomponent

                        @component('dashboard.homeAdd')
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                كل حساب تضيفه تصبح له كل الصلاحيات الممكنة في التعديل والحذف والإضافة، لا يمكن التراجع
                                عن أي تغيير.
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

@endsection
