<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Page;

class PageController extends Controller
{
    public static function get_meta_tags($path){
        $page = Page::where('link', $path)->first();
        return $page;
    }

    public function index(){

        return view('index');
    }
}
