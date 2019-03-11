<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Filter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filters = Filter::get();
        return view('admin.filters.index', compact('filters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::get();
        $filters = Filter::where('parent_id', 0)->get();
        return view('admin.filters.create', compact('cats', 'filters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat_id = $request->get('cat_id');
        $names = $request->get('name');
        $en_names = $request->get('en_name');
        $types = $request->get('type');
        if (is_array($names)){
            foreach ($names as $key => $value){
                $en_name = array_key_exists($key, $en_names) ? $en_names[$key] : '-';
                $type = array_key_exists($key, $types) ? $types[$key] : 1;

                Filter::create([
                    'name'      => $value,
                    'en_name'   => $en_name,
                    'type'      => $type,
                    'cat_id'    => $cat_id,
                    'parent_id' => 0
                ]);

            }
        }
        return redirect(route('filters.create'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function show(Filter $filter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function edit(Filter $filter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filter $filter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filter $filter)
    {
        //
    }
}
