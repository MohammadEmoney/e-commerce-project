@extends('layouts.admin')

@section('content')
    <section class="panel">
        <header class="panel-heading">
            <h1>
                لیست کاربران
            </h1>

        </header>
        <table class="table table-striped table-advance table-hover">
            <thead>
            <tr>
                <th style="float: right"><i class="icon-bullhorn"></i>نام کاربر</th>
                <th style="float: right"><i class="icon-bullhorn"></i>سطح دسترسی</th>
                <th class="hidden-phone"><i class="icon-question-sign"></i>تصویر</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td><a href="#">{{$user->name}}</a></td>
                    <td class="hidden-phone">{{$user->title}}</td>
                    <td></td>
                    <td class="hidden-phone">
                        @foreach($roles as $role)
                            <ul><li>{{ $role->title }}</li></ul>
                        @endforeach
                    </td>
                    <td><img src="{{ $user->image }}" alt="" width="50"></td>

                    <td>
                        <a href="{{ route('users.edit', ["id" => $user->id]) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                        <form action="{{ route('users.destroy', ["id" => $user->id]) }}" method="post" style="float:left">
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