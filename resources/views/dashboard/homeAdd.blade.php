<h2 class="rtl">إضافة محتوى:</h2>

<div class="row justify-content-center">
    <div class="col-md-9">

        <form method="POST" action="{{ route('home.store') }}" id="home">
            @csrf
            @method('put')

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

            <div class="form-group rtl">
                <div class="form-group">
                    <label class="rtl">النص:
                        <textarea type="text" name="body" class="form-control" rows="5" cols="70"></textarea>
                    </label>
                    @error('body')
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('إضافة عنوان جديد، غالباً ما راح يشتغل، بس حطيته عشان اضيفها في البداية.') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
