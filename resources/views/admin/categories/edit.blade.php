@extends('layouts.admin')

@section('content')
    <section class="panel">
        <header class="panel-heading">
            ویرایش {{ $category->title_fa }}

        </header>
        <div class="panel-body">
            <form class="form-horizontal tasi-form" method="post" enctype="multipart/form-data" action="{{route('categories.update',['id'=>$category->id])}}">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام دسته بندی</label>
                    <div class="col-sm-10">
                        <input type="text" name="title_fa" class="form-control" value="{{ $category->title_fa }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام انگلیسی</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" value="{{ $category->title }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">تصویر</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control round-input">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">سرگروه</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="chid" id="">
                            @foreach($categories_head as $cat)
                                <option value="{{ $cat->id }}" {{ ($cat->id == $category->id)? "selected" : "" }}>{{ $cat->title_fa }}</option>
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