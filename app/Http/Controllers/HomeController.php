<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Phone;
use App\Models\Icon;
use App\Models\Slide;
use App\Models\Banner;
use App\Models\Watch;
use App\Models\Accessory;
use App\Models\Technology;
use App\Models\Like;
use App\Models\Telephone;

class HomeController extends Controller
{
    //hiển thị view homeproduct và kết nối database
    public function home_product()
    {
        $homeproduct = DB::table('homeproduct')->select('*');
        $homeproduct = $homeproduct->get();

        $phone = DB::table('phone')->select('*');
        $phone = $phone->get();

        $icon = DB::table('icon')->select('*');
        $icon = $icon->get();

        $slide = DB::table('slide')->select('*');
        $slide = $slide->get();

        $banner = DB::table('banner')->select('*');
        $banner = $banner->get();

        $watch = DB::table('watch')->select('*');
        $watch = $watch->get();

        $accessory = DB::table('accessory')->select('*');
        $accessory = $accessory->get();

        $technology = DB::table('technology')->select('*');
        $technology = $technology->get();

        $like = DB::table('like')->select('*');
        $like = $like->get();

        $telephone = DB::table('telephone')->select('*');
        $telephone = $telephone->get();

        return view('homeProduct', compact('homeproduct', 'phone', 'icon', 'slide', 'banner', 'watch', 'accessory', 'technology', 'like', 'telephone'));
    }

    //hiển thị thông tin sản phẩm ra màn hình homeProduct
    public function homeproduct_index(Request $request)
    {
        if ($request->has('file_image_product')) {
            $file = $request->file_image_product;
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('upload'), $file_name);
        }
        if ($request->has('file_image_sale')) {
            $file_sale = $request->file_image_sale;
            $file_name_sale = $file_sale->getClientoriginalName();
            $file_sale->move(public_path('image_sale'), $file_name_sale);
        }

        $request->merge(['image_product' => $file_name]);
        $request->merge(['image_sale' => $file_name_sale]);

        if (Home::create($request->all())) {
            return redirect()->route('home_product');
        }
    }
    public function home_delete($id)
    {
        //lấy id
        Home::where('home_product_id', $id)->delete();
        return redirect()->route('home_product');
    }


    //header nav phone
    public function phone_index(Request $request)
    {
        if ($request->has('image_phone')) {
            $file_phone = $request->image_phone;
            $file_name_phone = $file_phone->getClientoriginalName();
            $file_phone->move(public_path('image_sale'), $file_name_phone);
        }
        $request->merge(['image' => $file_name_phone]);
        if (Phone::create($request->all())) {
            return redirect()->route('home_product');
        }
    }
    public function phone_delete($id)
    {
        //lấy id
        Phone::where('phone_id', $id)->delete();
        return redirect()->route('home_product');
    }


    // icon header nav
    public function icon_index(Request $request)
    {
        if (Icon::create($request->all())) {
            return redirect()->route('home_product');
        }
    }
    //edit header nav icon
    public function icon_edit($id)
    {
        $icon = Icon::where('id', $id)->get();
        return view('homeUpdate', compact('icon'));
    }

    public function icon_update(Request $request, $id)
    {
        $icon = Icon::find($id);
        $icon->name_icon = $request->name_icon;
        $icon->name_icon_product = $request->name_icon_product;
        $icon->save();
        return redirect()->route('home_product')->with('thongbao', 'update icon thành công');
    }

    public function icon_delete($id)
    {
        //lấy id
        Icon::where('id', $id)->delete();
        return redirect()->route('home_product');
    }


    public function slide_index(Request $request)
    {
        if ($request->has('slide_image_file')) {
            $file = $request->slide_image_file;
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('upload'), $file_name);
        }
        $request->merge(['slide_image' => $file_name]);
        if (Slide::create($request->all())) {
            return redirect()->route('home_product');
        }
    }

    public function slide_edit($id)
    {
        $slide = Slide::where('id', $id)->get();
        return view('slideUpdate', compact('slide'));
    }

    public function slide_update(Request $request, $id)
    {
        $slide = Slide::find($id);
        $slide->slide_image = $request->slide_image_file;
        $slide->save();
        return redirect()->route('home_product')->with('thongbao', 'update slide thành công');
    }

    public function slide_delete($id)
    {
        //lấy id
        Slide::where('id', $id)->delete();
        return redirect()->route('home_product');
    }

    public function banner_index(Request $request)
    {
        if ($request->has('banner_image_file')) {
            $file = $request->banner_image_file;
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('upload'), $file_name);
        }
        $request->merge(['banner_image' => $file_name]);
        if (Banner::create($request->all())) {
            return redirect()->route('home_product');
        }
    }

    public function banner_edit($id)
    {
        $banner = Banner::where('id', $id)->get();
        return view('bannerUpdate', compact('banner'));
    }

    public function banner_update(Request $request, $id)
    {
        $banner = Banner::find($id);
        $banner->banner_image_file = $request->banner_image_file;
        $banner->save();
        return redirect()->route('home_product')->with('thongbao', 'update slide thành công');
    }

    public function banner_delete($id)
    {
        //lấy id
        Banner::where('id', $id)->delete();
        return redirect()->route('home_product');
    }


    //hiển thị thông tin sản phẩm ra màn hình homeProduct
    public function watch_index(Request $request)
    {

        if ($request->has('file_image_watch')) {
            $file = $request->file_image_watch;
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('upload'), $file_name);
        }

        $request->merge(['watch_images' => $file_name]);

        if (Watch::create($request->all())) {
            return redirect()->route('home_product');
        }
    }
    public function watch_delete($id)
    {
        //lấy id
        Watch::where('id', $id)->delete();
        return redirect()->route('home_product');
    }


    public function accessory_index(Request $request)
    {
        if ($request->has('name_accessory_file')) {
            $file = $request->name_accessory_file;
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('upload'), $file_name);
        }

        $request->merge(['name_accessory' => $file_name]);
        if (Accessory::create($request->all())) {
            return redirect()->route('home_product');
        }
    }

    public function accessory_delete($id)
    {
        //lấy id
        Accessory::where('id', $id)->delete();
        return redirect()->route('home_product');
    }



    public function technology_index(Request $request)
    {
        if ($request->has('name_technology_file')) {
            $file = $request->name_technology_file;
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('upload'), $file_name);
        }

        $request->merge(['name_technology' => $file_name]);
        
        if (technology::create($request->all())) {
            return redirect()->route('home_product');
        }
    }

    public function technology_delete($id)
    {
        //lấy id
        Technology::where('id', $id)->delete();
        return redirect()->route('home_product');
    }


    public function like_index(Request $request)
    {

        if ($request->has('file_image_like')) {
            $file = $request->file_image_like;
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('upload'), $file_name);
        }

        $request->merge(['like_images' => $file_name]);

        if (Like::create($request->all())) {
            return redirect()->route('home_product');
        }
    }
    public function like_delete($id)
    {
        //lấy id
        Like::where('id', $id)->delete();
        return redirect()->route('home_product');
    }


    public function telephone_index(Request $request)
    {
        if ($request->has('file_telephone_product')) {
            $file = $request->file_telephone_product;
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('upload'), $file_name);
        }

        $request->merge(['image_telephone' => $file_name]);

        if (Telephone::create($request->all())) {
            return redirect()->route('home_product');
        }
    }
    public function telephone_delete($id)
    {
        //lấy id
        Telephone::where('id', $id)->delete();
        return redirect()->route('home_product');
    }


    //truyền dữ liệu sang màn hình home
    public function viewHome()
    {
        $homeproduct = DB::table('homeproduct')->select('*');
        $homeproduct = $homeproduct->get();

        $phone = DB::table('phone')->select('*');
        $phone = $phone->get();

        $icon = DB::table('icon')->select('*');
        $icon = $icon->get();

        $slide = DB::table('slide')->select('*');
        $slide = $slide->get();

        $banner = DB::table('banner')->select('*');
        $banner = $banner->get();

        $watch = DB::table('watch')->select('*');
        $watch = $watch->get();

        $accessory = DB::table('accessory')->select('*');
        $accessory = $accessory->get();

        $technology = DB::table('technology')->select('*');
        $technology = $technology->get();

        $like = DB::table('like')->select('*');
        $like = $like->get();

        $telephone = DB::table('telephone')->select('*');
        $telephone = $telephone->get();

        return view('home', compact('homeproduct', 'phone', 'icon', 'slide', 'banner', 'watch', 'accessory', 'technology', 'like', 'telephone'));
    }
}
