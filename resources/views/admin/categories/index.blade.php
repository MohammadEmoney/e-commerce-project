@extends('layouts.admin')

@section('content')
    <section class="panel">
        <header class="panel-heading">
            <h1>
                لیست دسته بندی ها
            </h1>

        </header>
        <table class="table table-striped table-advance table-hover">
            <thead>
            <tr>
                <th style="float: right"><i class="icon-bullhorn"></i>نام دسته بندی</th>
                <th class="hidden-phone"><i class="icon-question-sign"></i>نام فارسی</th>
                <th class="hidden-phone"><i class="icon-question-sign"></i>تصویر </th>
                {{--<th><i class="icon-bookmark"></i>تصویر</th>--}}
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td><a href="#">{{$category->title}}</a></td>
                    <td class="hidden-phone">{{$category->title_fa}}</td>
                    <td><img src="{{$category->image}}" alt="" width="50px"></td>
                    <td>
                        &nbsp;
                        <a href="{{ route('categories.edit', ["id" => $category->id]) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                        <form action="{{ route('categories.destroy', ["id" => $category->id]) }}" method="post" style="float:left">
                            @csrf
                            @method('DELETE')
                            {{--<input type="submit" value="delete">--}}
                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </section>
    <a type="button" href="{{ route('categories.create') }}" class="btn btn-success btn-lg btn-block plus" >Add <i class="fa fa-plus"></i></a>
@endsection