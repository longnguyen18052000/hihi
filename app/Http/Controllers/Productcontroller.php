<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Productcontroller extends Controller
{
    public function view_product(Request $request)
    {
        $products = DB::table('tb_product')->select('*');
        $products = $products->get();
        return view('admin.product', compact('products'));
    }

    public function product_store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'price' => 'required|min:6',
        ]);

        if ($request->has('file_upload')) {
            $file = $request->file_upload;
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('upload'), $file_name);
        }

        $request->merge(['images' => $file_name]);
        if (Product::create($request->all())) {
            return redirect()->route('product');
        }
    }

    public function product_delete($id)
    {
        //lấy id
        Product::where('product_id', $id)->delete();
        return redirect()->route('product');
    }
}
