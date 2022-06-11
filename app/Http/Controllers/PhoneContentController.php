<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Shoppingphone;
use App\Models\ShoppingCart;
use App\Models\Telephone;
use Illuminate\Contracts\Session\Session as SessionSession;


class PhoneContentController extends Controller
{
    //
    public function manager()
    {
        $manager = DB::table('shoppingphone')->select('*')->get();
        return view('phonecontent.manager', compact('manager'));
    }

    public function manager_store(Request $request)
    {
        if ($request->has('image_shopping_phone_file')) {
            $file = $request->image_shopping_phone_file;
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('upload'), $file_name);
        }
        $request->merge(['image_shopping_phone' => $file_name]);

        if (Shoppingphone::create($request->all())) {
            return redirect()->route("phonecontent.manager");
        }
    }

    public function manager_delete($id)
    {
        Shoppingphone::where('id', $id)->delete();
        return redirect()->route('phonecontent.manager');
    }

    // hiển thị trang phonecontent. phone0
    public function phonecontent_phone_index($id)
    {
        $manager = DB::table('telephone')->where('id', $id)->get();
        return view('phonecontent.phone0', compact('manager'));
    }

    // thêm sản phẩm vào giỏ hàng
    public function phonecontent_phone_post(Request $request, $id)
    {

        $telephone = $request->session()->get('telephone') ?? [];
        $telephoneInfo = DB::table('telephone')->find($id);

        $ar = array(','=>'');
        $price_telephone = strtr($telephoneInfo->price_telephone, $ar);
        if(isset($telephone[$id])){
            $telephone[$id]->total++;
            $telephone[$id]->price += $price_telephone;
        }else{
            $telephone[$id] = $telephoneInfo;
            $telephone[$id]->total = 1;
            $telephone[$id]->price = $price_telephone;
        }

        $count = 0;
        foreach($telephone as $tele){
            $count += $tele->price;
        }
        session()->put('telephone', $telephone);
        $value = $request->session()->get('telephone');
        return view('phonecontent.shoppingCart', compact('count', 'value'));
    }

    // button tiến hành đặt hàng trang phone 0
    public function phonecontent_product_post($id, Request $request)
    {
        $telephone = DB::table('telephone')->find($id);

        $image_telephone = $telephone->image_telephone;
        $name_telephone = $telephone->name_telephone;
        $price_telephone = $telephone->price_telephone;

        $shoppingcart = new ShoppingCart([
            'username' => $request->username,
            'phone' => $request->phone,
            'email' => $request->email,
            'city'  => $request->city,
            'district' => $request->district,
            'address' => $request->address,
            'note' => $request->note,

            'image_product'=>$image_telephone,
            'name_product'=>$name_telephone,
            'price_product'=>$price_telephone,
        ]);

        $shoppingcart->save();
        return redirect()->back()->with('success', 'bạn đã đặt hàng thành công');
    }


    // hiển thị trang shoppingCart
    public function shoppingCart_index(Request $request)
    {
        $value = $request->session()->get('telephone');
        if($value ==''){
            echo 0;
        }else{
            return view('phonecontent.shoppingCart', compact('value'));
        }
    }

    //xóa giỏ hàng trang shopping Cart
    public function shoppingCart_delete(Request $request, $id)
    {
        $value = $request->session()->get('telephone');
        session()->put('deletephone', $value[$id]);
        if(isset($value[$id])){
            $request->session()->forget('deletephone');
            $request->session()->flush();
            return view('phonecontent.shoppingCart', compact('value'));
        }
    }

    public function shoppingCart_increment(Request $request, $id)
    {
        $value = $request->session()->get('telephone');

        if(isset($value[$id])){
            $value[$id]->total--;
            return redirect()->route('phonecontent.shoppingCart');
        }
    }

    public function shoppingCart_decrement(Request $request, $id)
    {
        $value = $request->session()->get('telephone');
        if(isset($value[$id])){
            $value[$id]->total++;
        }
        return redirect()->route('phonecontent.shoppingCart');
    }

    // button xác nhận đặt hàng trang shopping cart
    public function shoppingCart_post(Request $request){
        $value = $request->session()->get('telephone');
        foreach($value as $values){
            $shoppingcart = new ShoppingCart([
                'shoppingcart_id' => $request->shoppingcart_id,
                'username' => $request->username,
                'phone' => $request->phone,
                'email' => $request->email,
                'city'  => $request->city,
                'district' => $request->district,
                'address' => $request->address,
                'note' => $request->note,
                'image_product'=>$values->image_telephone,
                'name_product'=>$values->name_telephone,
                'price_product'=>$values->price_telephone,
            ]);
            $shoppingcart->save();
        }
        echo "bạn đã đặt hàng thành công";
    }
}
