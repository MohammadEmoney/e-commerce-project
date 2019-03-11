@extends('layouts.admin')

@section('content')
    <section class="panel">
        <header class="panel-heading">
            اضافه کردن گالری به {{ $product->name }}

        </header>

        <div class="panel-body">
            <form action="{{ url('/admin/gallery?id='. $product->id) }}" class="dropzone" method="post">
                @csrf
                <div class="fallback">
                    <input name="file" type="file" multiple />
                </div>
            </form>
        </div>
    </section>
@endsection

@section('script')
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
@endsection