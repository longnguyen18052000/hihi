<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeContentController extends Controller
{
    //
    public function icon_index(){
        $icon = DB::table('icon')->select('*')->get();
        return view('HomeContent.icon', compact('icon'));
    }

    public function like_index(){
        $like = DB::table('like')->select('*')->get();
        return view('HomeContent.like', compact('like'));
    }

    public function technology_index(){
        $technology = DB::table('technology')->select('*')->get();
        return view('HomeContent.technology', compact('technology'));
    }

    public function accessory_index(){
        $accessory = DB::table('accessory')->select('*')->get();
        return view('HomeContent.accessory', compact('accessory'));
    }

    public function watch_index(){
        $watch = DB::table('watch')->select('*')->get();
        return view('HomeContent.watch', compact('watch'));
    }

    public function banner_index(){
        $banner = DB::table('banner')->select('*')->get();
        return view('HomeContent.banner', compact('banner'));
    }

    public function slide_index(){
        $slide = DB::table('slide')->select('*')->get();
        return view('HomeContent.slide', compact('slide'));
    }

    public function telephone_index(){
        $telephone = DB::table('telephone')->select('*')->get();
        return view('HomeContent.telephone', compact('telephone'));
    }
}
