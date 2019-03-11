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
                <th style="float: right"><i class="icon-bullhorn"></i>نام محصول</th>
                <th class="hidden-phone"><i class="icon-question-sign"></i>برند</th>
                <th><i class="icon-bookmark"></i>تصویر</th>
                <th><i class=" icon-edit"></i>قیمت</th>
                <th><i class=" icon-edit"></i>وضعیت</th>
                <th><i class=" icon-edit"></i>گالری</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td><a href="#">{{$product->name}}</a></td>
                    <td class="hidden-phone">{{$product->brand}}</td>
                    <td><img src="{{$product->image}}" alt="" width="50px"></td>
                    <td>{{number_format($product->price)}} تومان </td>
                    <td>
                        @if($product->status == 1)
                            <i class="fa fa-check-circle"></i>   وجود دارد
                            @else
                            <i class="fa fa-times-circle"></i> وجود ندارد
                        @endif
                    </td>
                    <td>
                        <a href="/admin/gallery?id={{ $product->id }}" class="btn btn-info btn-xs">گالری تصاویر</a>
                    </td>
                    <td>
                        &nbsp;
                        {{--@can('view', $product)--}}
                        <a href="{{ route('products.edit', ["id" => $product->id]) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                        <form action="{{ route('products.destroy', ["id" => $product->id]) }}" method="post" style="float:left">
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
    <a type="button" href="{{ route('products.create') }}" class="btn btn-success btn-lg btn-block plus" >Add <i class="fa fa-plus"></i></a>

@endsection