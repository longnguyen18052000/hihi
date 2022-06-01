<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $data['q'] = $request->get('q');
        $data['customers'] = Customer::where('name', 'like', '%' . $data['q'] . '%')->get();
        return view('admin.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        // mã hóa password trước khi đẩy lên DB
        $data['password'] = Hash::make($request->password);

        // Tạo mới user với các dữ liệu tương ứng với dữ liệu được gán trong $data
        User::create($data);
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
        $data['customer'] = $customer;
        return view('admin.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {

        //  // Tìm đến đối tượng muốn update
        //  Customer::where('user_id', $id);
        //  // gán dữ liệu gửi lên vào biến data
        //  $data = $request->all();
        //  // dd($data);
        //  // mã hóa password trước khi đẩy lên DB
        //  $data['password'] = Hash::make($request->password);
        //  // Update user
        //  User::update($data);

        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required|min:6',
            'comfirm_password' => 'required|same:password',
            'email' => 'required',
            'gender' => 'required',
            'phone' => 'required|min:10',
            'date_of_birth' => 'required',
            'address' => 'required',
            'city' => 'required',
            'district' => 'required',
        ]);

        $data['customers'] = $customer;

        $customer->name = $request->name;
        $customer->username = $request->username;
        $customer->password = Hash::make($request->password);
        $customer->email = $request->email;
        $customer->gender = $request->gender;
        $customer->phone = $request->phone;
        $customer->date_of_birth = $request->date_of_birth;
        $customer->address = $request->address;
        $customer->city = $request->city;
        $customer->district = $request->district;

        $customer->save();
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Customer::where('user_id', $id)->delete();
        return redirect()->route('index');
    }

}
