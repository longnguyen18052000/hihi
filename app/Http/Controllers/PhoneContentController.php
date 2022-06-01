<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Shoppingphone;
use Illuminate\Contracts\Session\Session as SessionSession;
use Session;

class PhoneContentController extends Controller
{
    //
    public function manager(){
        $manager = DB::table('shoppingphone')->select('*')->get();
        return view('phonecontent.manager', compact('manager'));
    }

    public function manager_store(Request $request){
        if ($request->has('image_shopping_phone_file')) {
            $file = $request->image_shopping_phone_file;
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('upload'), $file_name);
        }
        $request->merge(['image_shopping_phone' => $file_name]);

        if(Shoppingphone::create($request->all())){
            return redirect()->route("phonecontent.manager");
        }
    }

    public function manager_delete($id){
        Shoppingphone::where('id', $id)->delete();
        return redirect()->route('phonecontent.manager');
    }

    public function phonecontent_phone0_index(Request $request){
        $manager = DB::table('shoppingphone')->select('*')->get()->toArray();
        $values = $manager[0];
        $value = [];
        array_push($value, $values);
        session()->put('key', $value);
        return view('phonecontent.phone0', compact('manager'))->with('success', 'Thêm sản phẩm thành công');
    }

    public function phonecontent_phone1_index(){
        $manager = DB::table('shoppingphone')->select('*')->get()->toArray();
        $values = $manager[1];
        $value = [];
        array_push($value, $values);
        session()->put('key', $value);
        return view('phonecontent.phone1', compact('manager'));
    }

    public function phonecontent_phone2_index(){
        return view('phonecontent.phone2');
    }

    public function phonecontent_phone3_index(){
        return view('phonecontent.phone3');
    }

    public function phonecontent_phone4_index(){
        return view('phonecontent.phone4');
    }

    public function phonecontent_phone5_index(){
        return view('phonecontent.phone5');
    }

    public function phonecontent_phone6_index(){
        return view('phonecontent.phone6');
    }

    public function phonecontent_phone7_index(){
        return view('phonecontent.phone7');
    }

    public function phonecontent_phone8_index(){
        return view('phonecontent.phone8');
    }

    public function phonecontent_phone9_index(){
        return view('phonecontent.phone9');
    }

    public function shoppingCart_index(Request $request){
        $value = session()->get('key');
        return view('phonecontent.shoppingCart', compact('value'));
    }

}
