<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::latest()->paginate(10);
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
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
           'title' => 'required',
           'image' => 'required|image',
        ]);

        $file = $request['image'];
        $className = Slider::class;
        $img = $this->uploadImage($file, $className);
        Slider::create([
            'title' => $request['title'],
            'url' => $request['url'],
            'image' => $img,
        ]);
        return redirect(route('sliders.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $this->validate(request(),[
            'title' => 'required',
            'image' => 'image',
        ]);

        if ($request['image']){
            unlink(ltrim($slider->image, "/"));
            $file = $request['image'];
            $className = Slider::class;
            $img = $this->uploadImage($file, $className);
        }else{
            $img = $slider->image;
        }

        $sliders = $request->all();
        $sliders['image'] = $img;
        $slider->update($sliders);
        return redirect(route('sliders.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
