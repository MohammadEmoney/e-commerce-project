@extends('layouts.admin')

@section('content')
    <section class="panel">
        <header class="panel-heading">
            ویرایش {{ $user->name }}

        </header>
        <div class="panel-body">
            <form class="form-horizontal tasi-form" method="post" enctype="multipart/form-data" action="{{route('users.update',['id'=>$user->id])}}">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام کاربر</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">ایمیل</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">رمز عبور</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="form-group required">
                    <label for="input-confirm" class="col-sm-2 control-label">تکرار رمز عبور</label>
                    <div class="col-sm-10">
                        <input id="password-confirm" type="password" class="form-control" placeholder="تکرار رمز عبور" name="password_confirmation" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <img src="{{ $user->image }}" alt="{{ $user->name }}" width="100">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">تصویر</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control round-input">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"> دسترسی ها</label>
                    <div class="col-sm-10">
                        <select name="role_id[]" role="15" id="" multiple>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-danger" type="submit">Save</button>
                    <button class="btn btn-default" type="reset">Cancel</button>
                </div>
            </form>
        </div>
    </section>
@endsection