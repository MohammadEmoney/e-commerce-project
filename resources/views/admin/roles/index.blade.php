@extends('layouts.admin')

@section('content')
    <section class="panel">
        <header class="panel-heading">
            <h1>
                لیست سطوح دسترسی
            </h1>

        </header>
        <table class="table table-striped table-advance table-hover">
            <thead>
            <tr>
                <th style="float: right"><i class="icon-bullhorn"></i>نام سطوح دسترسی</th>
                <th class="hidden-phone"><i class="icon-question-sign"></i>عنوان سطوح دسترسی</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr>
                    <td><a href="#">{{$role->name}}</a></td>
                    <td class="hidden-phone">{{$role->title}}</td>

                    <td>
                        <a href="{{ route('roles.edit', ["id" => $role->id]) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                        <form action="{{ route('roles.destroy', ["id" => $role->id]) }}" method="post" style="float:left">
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