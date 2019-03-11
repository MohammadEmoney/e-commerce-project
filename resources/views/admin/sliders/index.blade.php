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
                <th style="float: right"><i class="icon-bullhorn"></i>نام سلایدر</th>
                <th class="hidden-phone"><i class="icon-question-sign"></i>لینک</th>
                <th class="hidden-phone"><i class="icon-question-sign"></i>تصویر </th>
                {{--<th><i class="icon-bookmark"></i>تصویر</th>--}}
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sliders as $slider)
                <tr>
                    <td><a href="#">{{$slider->title}}</a></td>
                    <td class="hidden-phone">{{$slider->url}}</td>
                    <td><img src="{{$slider->image}}" alt="" height="50px"></td>
                    <td>
                        &nbsp;
                        <a href="{{ route('sliders.edit', ["id" => $slider->id]) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                        <form action="{{ route('sliders.destroy', ["id" => $slider->id]) }}" method="post" style="float:left">
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
    <a type="button" href="{{ route('sliders.create') }}" class="btn btn-success btn-lg btn-block plus" >Add <i class="fa fa-plus"></i></a>
@endsection