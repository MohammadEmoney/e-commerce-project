<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function __construct()
    {
//        auth()->loginUsingId(1);
    }

    public function uploadImage($file, $className)
    {
        $className = str_replace("\\", "/", $className);
        $fileName = time() . "-" . $file->getClientOriginalName();
        $path = public_path("/uploads/$className/");
        $file->move($path, $fileName);
        return "/uploads/$className/" . $fileName;
    }
}

