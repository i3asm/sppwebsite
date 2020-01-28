<div class="row justify-content-center">
    <div class="col-md-9">

        @foreach($homes as $home)
            <form class="rtl" method="POST"
                  action="{{route('home.edit', ['id'=>$home->id])}}" id="home">
                @csrf
                <div class="form-group rtl">
                    <label for="title">العنوان</label>
                    <select class="form-control" id="title" name="title" form="home" required>
                        <option>aboutUs</option>
                        <option>vision</option>
                        <option>message</option>
                        <option>goals</option>
                        <option>media</option>
                        <option>pr</option>
                        <option>hr</option>
                        <option>oas</option>
                        <option>quality</option>
                    </select>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
                <label class="rtl">العنوان الحالي:
                    {{$home->title}}
                </label>

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
