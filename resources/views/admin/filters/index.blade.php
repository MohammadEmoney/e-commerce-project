@extends('layouts.admin')

@section('content')
    <section class="panel">
        <header class="panel-heading">
            <h1>
                لیست محصولات وب سایت
            </h1>
            <form >
                <div class="form-group search">
                    <input class="form-control" name="search" type="text" placeholder="Search">
                    <div class="icon"><i class="fa fa-search fa-2x" style="color: #000;" id="search"></i></div>
                </div>

            </form>


        </header>
        <table class="table table-striped table-advance table-hover">
            <thead>
            <tr>
                <th style="float: right"><i class="icon-bullhorn"></i>نام فیلتر</th>
                <th class="hidden-phone"><i class="icon-question-sign"></i>نام انگلیسی</th>
                <th><i class="icon-bookmark"></i>سرگروه</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($filters as $filter)
                <tr>
                    <td><a href="#">{{$filter->name}}</a></td>
                    <td class="hidden-phone">{{$filter->en_name}}</td>
                    <td>{{$filter->parent_id}}</td>
                    <td>
                        &nbsp;
                        {{--@can('view', $filter)--}}
                        <a href="{{ route('filters.edit', ["id" => $filter->id]) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                        <form action="{{ route('filters.destroy', ["id" => $filter->id]) }}" method="post" style="float:left">
                            @csrf
                            @method('DELETE')
                            {{--<input type="submit" value="delete">--}}
                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                        </form>
                        {{--@endcan--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
    <a type="button" href="{{ route('filters.create') }}" class="btn btn-success btn-lg btn-block plus" >Add <i class="fa fa-plus"></i></a>

@endsection