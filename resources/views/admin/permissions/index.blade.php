@extends('layouts.admin')

@section('content')
    <section class="panel">
        <header class="panel-heading">
            <h1>
               لیست دسترسی ها
            </h1>

        </header>
        <table class="table table-striped table-advance table-hover">
            <thead>
            <tr>
                <th style="float: right"><i class="icon-bullhorn"></i>نام دسترسی</th>
                <th class="hidden-phone"><i class="icon-question-sign"></i>عنوان دسترسی</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($permissions as $permission)
                <tr>
                    <td><a href="#">{{$permission->name}}</a></td>
                    <td class="hidden-phone">{{$permission->title}}</td>

                    <td>
                        <a href="{{ route('permissions.edit', ["id" => $permission->id]) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                        <form action="{{ route('permissions.destroy', ["id" => $permission->id]) }}" method="post" style="float:left">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection