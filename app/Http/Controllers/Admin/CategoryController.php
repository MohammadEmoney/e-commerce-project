<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(20);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories_head = Category::where('chid', 0)->get();
        return view('admin.categories.create', compact('categories_head'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request['image'];
        $className = Category::class;
        $img = $this->uploadImage($file, $className);

        Category::create([
            'title' => $request['title'],
            'title_fa' => $request['title_fa'],
            'image' => $img,
        ]);
        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categories_head = Category::where('chid', 0)->get();
        return view('admin.categories.edit', compact('category','categories_head'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if($requestp['image']){
            $file = $request['image'];
            $img = $this->uploadImage($file, Product::class);
            unlink(ltrim($category->image, "/"));
        }else{
            $img = $category->image;
        }
        $categories = $request->all();
        $categories['image'] = $img;
        $category->update($categories);
        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        unlink(ltrim($category->image, "/"));
        return redirect(route('categories.index'));
    }
}
