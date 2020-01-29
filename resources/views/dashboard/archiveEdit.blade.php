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
                      action="{{route('admin.update',['id'=>$person->id])}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <label class="rtl">السنة:
                        <input type="text" class="form-control" name="year" min="1350"
                               max="2050" step="1"
                               value="{{$person->year}}" required>
                    </label>
                    @error('year')
                    <p class="text-danger"> year must be a number from 1350 to 2050</p>
                    @enderror

                    <label class="rtl">الاسم:
                        <input type="text" class="form-control" name="name"
                               value="{{$person->name}}" required>
                    </label>
                    @error('name')
                    <p class="text-danger">PUT A NAME !!!</p>
                    @enderror

                    <label class="rtl">المنصب:
                        <input type="text" class="form-control" name="position"
                               value="{{$person->position}}" required>
                    </label>
                    @error('position')
                    <p class="text-danger">PUT A POSITION !!!</p>
                    @enderror

                    <label class="rtl">twitter URL:
                        <input type="text" class="form-control" name="twitter"
                               value="{{$person->twitter}}">
                    </label>
                    @error('twitter')
                    <p class="text-danger">put a link like https://x.com/username</p>
                    @enderror

                    <label class="rtl">linkedin:
                        <input type="text" class="form-control" name="linkedin"
                               value="{{$person->linkedin}}">
                    </label>
                    @error('linkedin')
                    <p class="text-danger">put a link like https://x.com/username</p>
                    @enderror

                    <label class="rtl">phone:
                        <input type="text" class="form-control" name="phone"
                               value="{{$person->phone}}">
                    </label>
                    @error('phone')
                    <p class="text-danger">put a link like https://x.com/username</p>
                    @enderror

                    <label class="rtl">email:
                        <input type="email" class="form-control" name="email"
                               value="{{$person->email}}">
                    </label>
                    @error('email')
                    <p class="text-danger">put a link like https://x.com/username</p>
                    @enderror

                    <img src="{{ asset('archives/'.$person->avatar) }}" style="max-width: 30%; max-height: 30%" alt=""
                         title="">
                    <input class="form-control-file" type="file" name="avatar" id="avatar" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image
                        should not be more than 2MB.</small>
                    @error('avatar')
                    <p class="text-danger">try a real image file</p>
                    @enderror

                    <br>
                    <button type="submit" class="btn btn-primary">تحديث البيانات</button>
                    <a href="{{route('admin.delete',[$person->id])}}" class="btn btn-danger"
                       role="button">حذف</a>
                </form>
                <br>

                {{--                <form action="{{route('avatar.update', ['id'=>$person->id])}}" method="post"--}}
                {{--                      enctype="multipart/form-data">--}}
                {{--                    @csrf--}}
                {{--                    <img src="{{ asset('archives/'.$person->avatar) }}" style="max-width: 30%; max-height: 30%" alt=""--}}
                {{--                         title="">--}}
                {{--                    <input class="form-control-file" type="file" name="avatar" id="avatar" aria-describedby="fileHelp">--}}
                {{--                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image--}}
                {{--                        should not be more than 2MB.</small>--}}
                {{--                    <button type="submit" class="btn btn-primary">Submit</button>--}}
                {{--                </form>--}}

            @endif
        @endforeach
    </div>
@endforeach
