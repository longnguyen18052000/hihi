<?php

namespace App\Http\Controllers;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AppleController extends Controller
{

    public function apple_index($id)
    {
        $apple = DB::table('homeproduct')->where('home_product_id', $id)->get();
        return view('apple.apple0', compact('apple'));
    }

    // thêm sản phẩm vào giỏ hàng
    public function phonecontent_apple_post(Request $request, $id)
    {
        $apple = $request->session()->get('apple') ?? [];
        $appleInfo = DB::table('homeproduct')->where('home_product_id', $id)->get()->toArray();
        $appleInfo = (object) $appleInfo[0];
        if (isset($apple[$id])) {
            $apple[$id]->total++;
            $apple[$id]->price_money += $appleInfo->price;
        } else {
            $apple[$id] = $appleInfo;
            $apple[$id]->total = 1;
            $apple[$id]->price_money = $appleInfo->price;
        }

        $count = 0;
        foreach($apple as $tele){
            $count += $tele->price;
        }
        session()->put('apple', $apple);

        return view('apple.shoppingApple', compact('count'));
    }

    public function apple(Request $request)
    {
        $apple = $request->session()->get('apple');

        if ($apple == '') {
            echo 0;
        } else {
            return view('apple.shoppingApple', compact('apple'));
        }
    }

    // xóa giỏ hàng
    public function shoppingApple_delete(Request $request, $id)
    {
        $apple = $request->session()->get('apple');
        session()->put('deleteApple', $apple[$id]);
        if (isset($apple[$id])) {
            $request->session()->forget('deleteApple');
            unset($apple[$id]);
            // $request->session()->flush();
            // return redirect()->route('apple.shoppingApple');
            return view('apple.shoppingApple');
        } else {
            echo 'không còn sản phẩm nào';
        }
    }

    // increment
    public function shoppingApple_increment(Request $request, $id)
    {
        $value = $request->session()->get('apple');
        if (isset($value[$id])) {
            $value[$id]->total--;
            return view('apple.shoppingApple', compact($value));
        }
    }

    //decrment
    public function shoppingApple_decrement(Request $request, $id)
    {
        $value = $request->session()->get('apple');
        if (isset($value[$id])) {
            $value[$id]->total++;
            return view('apple.shoppingApple', compact($value));
        }
    }

    // button xác nhận đặt hàng trang shopping cart
    public function shoppingApple_post(Request $request){
        $value = $request->session()->get('apple');
        foreach($value as $values){
            $shoppingcart = new ShoppingCart([
                'username' => $request->username,
                'phone' => $request->phone,
                'email' => $request->email,
                'city'  => $request->city,
                'district' => $request->district,
                'address' => $request->address,
                'note' => $request->note,
                'image_product'=>$values->image_product,
                'name_product'=>$values->name_product,
                'price_product'=>$values->price,
            ]);
            $shoppingcart->save();
        }
        echo "bạn đã đặt hàng thành công";
    }
}
