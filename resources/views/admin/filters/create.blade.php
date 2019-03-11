@extends('layouts.admin')

@section('content')
    <section class="panel">
        <header class="panel-heading">
            افزودن فیلتر جدید

        </header>

        <div class="panel-body">
            <form class="form-horizontal tasi-form" method="post" enctype="multipart/form-data" action="{{route('filters.store')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">دسته بندی</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="cat_id" id="">
                            @foreach($cats as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->title_fa }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">فیلتر والد</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="parent_id" id="">
                            <option value="0">سر گروه</option>
                            @foreach($filters as $filter)
                                <option value="{{ $filter->id }}">{{ $filter->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        <button class="btn btn-danger" type="button" id="button"><i class="fa fa-plus fa-lg"></i></button>
                    </label>
                    <div class="col-sm-10" id="filter_field">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        <button class="btn btn-danger" type="button" id="minus-button"><i class="fa fa-minus fa-lg"></i></button>
                    </label>
                </div>


                <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-danger" type="submit">Save</button>
                    <button class="btn btn-default" type="reset">Cancel</button>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('script_code')
    <script>

        var button = document.querySelector("#button");
        var removeButton = document.querySelector("#minus-button");
        var count= 0;
        function addFilter() {
            count++;
            console.log("Count:"+ count);
            var form = "<div class=\"col-lg-12 filter_count\" style=\"margin-bottom: .8em\">" +
                "<div class=\"col-lg-5\">" +
                "<input type=\"text\" name=\"name["+ count+"]\" class=\"form-control\" value=\"{{ old('name') }}\">" +
                "</div>" +
                "<div class=\"col-lg-5\">" +
                "<input type=\"text\" name=\"en_name["+ count+"]\" class=\"form-control\" value=\"{{ old('en_name') }}\">" +
                "</div>" +
                "<div class=\"col-lg-2\">" +
                "<select class=\"form-control\" name=\"type["+ count+"]\" id=\"\">" +
                "<option value=\"1\">دکمه رادیویی</option>" +
                "<option value=\"2\">انتخاب رنگ</option>" +
                "</select>" +
                "</div>" +
                "</div>";
            document.querySelector("#filter_field").insertAdjacentHTML('beforeend', form);
        }

        function removeFilter(){
            let appendedForm = document.querySelector("#filter_field");
            appendedForm.lastElementChild.remove();
        }

        button.addEventListener("click", addFilter);
        removeButton.addEventListener("click", removeFilter);
    </script>
@endsection