@foreach($users as $user)
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="user">
                @if ($user->id != 1)
                    <form class="ltr" method="POST"
                          action="{{route('users.update',['id'=>$user->id])}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="username"
                                   class="col-md-4 col-form-label text-md-right">{{ __('الاسم') }}</label>
                            <div class="col-md-6">
                                <input type="text" id="username" class="form-control" name="name"
                                       value="{{$user->name}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('الايميل') }}</label>
                            <div class="col-md-6">
                                <input type="email" id="email" class="form-control" name="email"
                                       value="{{$user->email}}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('آدمن ؟') }}</label>
                            <div class="col-md-6">
                                <input type="number" id="role" class="form-control" name="role"
                                       value="{{$user->role}}" min="0" max="1">
                                @error('role')
                                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="text-muted rtl">
                            <h6>1: آدمن، له من الصلاحيات مثل ما لك</h6>
                            <h6>0: حساب غير آدمن، ليس له أي صلاحيات</h6>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">تحديث البيانات</button>
                        <a href="{{route('users.delete',[$user->id])}}" class="btn btn-danger"
                           role="button">حذف</a>
                    </form>

                @endif
            </div>
        </div>
    </div>
@endforeach
