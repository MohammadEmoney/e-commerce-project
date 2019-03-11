@extends('layouts.admin')

@section('content')
    <section class="panel">
        <header class="panel-heading">
            اضافه کردن دسترسی

        </header>
        <div class="panel-body">
            <form class="form-horizontal tasi-form" method="post" enctype="multipart/form-data" action="{{route('permissions.store')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام دسترسی</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        @if($errors->has('name'))
                            <p class="alert alert-danger">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">عنوان دسترسی</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
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