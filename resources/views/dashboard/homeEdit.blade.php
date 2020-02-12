<div class="row justify-content-center">
    <div class="col-md-9">

        <div class="rtl">
            <p>العناوين المقبولة:</p>
            <p class="text-danger">العناوين لازم تكتبها بالانجليزي وهي تلقائياً بتصير عربي</p>
            <p>aboutUs = من نحن؟</p>
            <p>vision = رؤيتنا</p>
            <p>message = رسالتنا</p>
            <p>goals = أهدافنا</p>
            <p>الفرق:</p>
            <p>media = الفريق الاعلامي</p>
            <p>pr = العلاقات العامة</p>
            <p>hr = الموارد البشرية</p>
            <p>oas = التنظيم والدعم</p>
            <p>quality = الجودة</p>
        </div>

        @foreach($homes as $home)
            <form class="rtl" method="POST"
                  action="{{route('home.edit', ['id'=>$home->id])}}">
                @csrf

                <div class="form-group rtl">
                    <label for="title">العنوان</label>
                    <input type="text" name="title" id="title" value="{{$home->title}}"/>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
                {{--                <label class="rtl">العنوان الحالي:--}}
                {{--                    {{$home->title}}--}}
                {{--                </label>--}}

                <div class="form-group rtl">
                    <label class="rtl">النص:
                        <textarea type="text" name="body" class="form-control"
                                  rows="5" cols="70">{!! (e($home->body)) !!}</textarea>
                        @error('body')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </label>
                </div>
                <button class="btn btn-primary" type="submit" name="action" value="update">update</button>
                <button class="btn btn-danger" type="submit" name="action" value="delete">delete</button>
            </form>
            <br>
        @endforeach
    </div>
</div>

{{--                    <select class="form-control" id="title" name="title" form="home" required>--}}
{{--                        <option>aboutUs</option>--}}
{{--                        <option>vision</option>--}}
{{--                        <option>message</option>--}}
{{--                        <option>goals</option>--}}
{{--                        <option>media</option>--}}
{{--                        <option>pr</option>--}}
{{--                        <option>hr</option>--}}
{{--                        <option>oas</option>--}}
{{--                        <option>quality</option>--}}
{{--                    </select>--}}
