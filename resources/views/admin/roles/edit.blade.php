@extends('layouts.admin')

@section('content')
    <section class="panel">
        <header class="panel-heading">
            ویرایش {{ $role->name }}

        </header>
        <div class="panel-body">
            <form class="form-horizontal tasi-form" method="post" enctype="multipart/form-data" action="{{route('roles.update',['id'=>$role->id])}}">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام سطح دسترسی</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="{{ $role->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">عنوان سطح دسترسی</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" value="{{ $role->title }}">
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