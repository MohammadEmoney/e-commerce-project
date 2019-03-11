<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use App\ProductGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class ProductController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::search($request->all());
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required',
            'image' => 'image',
        ]);
        $file = $request['image'];
        $className = Product::class;
        $img = $this->uploadImage($file, $className);
        $user_id = auth()->user()->id;
        Product::create([
            'name' => $request['name'],
            'brand' => $request['brand'],
            'image' => $img,
            'price' => $request['price'],
            'status' => $request['status'],
            'body' => $request['body'],
            'discount' => $request['discount'],
            'user_id' => $user_id,
            'cat_id' => $request['cat_id'],
        ]);
        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::get();
        return view('admin.products.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate(request(),[
            'name' => 'required',
            'image' => 'image',
        ]);
        if($requestp['image']){
            $file = $request['image'];
            $img = $this->uploadImage($file, Product::class);
            unlink(ltrim($product->image, "/"));
        }else{
            $img = $product->image;
        }
        $data = $request->all();
        $data['image'] = $img;
        $product->update($data);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
//        return var_dump(__METHOD__);
        $product->delete();
        unlink(ltrim($product->image, "/"));
        return redirect(route('products.index'));
    }

    public function gallery(Request $request)
    {
        $id = $request->get('id');
        $product = Product::findOrFail($id);
        return view('admin.products.galleryCreate', compact('product'));
    }

    public function upload(Request $request, ProductGallery $productGallery)
    {
        $id = $request->get('id');
        $file = $request->file('file');
        $className = str_replace("\\", "/", Product::class);
        $fileName = rand() . "-" .$id. $file->getClientOriginalName();
        $path = public_path("uploads/$className/gallery/$id/");
        $file->move($path, $fileName);
        $images = "/uploads/$className/gallery/$id/" . $fileName;
        ProductGallery::create([
            'product_id' => $id,
            'image' => $images,
        ]);
        return redirect(route('products.index'));
    }
}
