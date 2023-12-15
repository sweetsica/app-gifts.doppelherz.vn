<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Direct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DirectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
//    Bắt đầu: Lấy thông tin KH từ code - Gửi kèm mã khi đăng nhập
//    public function index(Request $request)
//    {
//        $customerInfo = Customer::query()->where('giftCode','=',$request->code)->firstOrFail();
//        dd($customerInfo);
//        return view('customer.index');
//    }
//Kết thúc: Lấy thông tin KH từ code - Gửi kèm mã khi đăng nhập

//Bắt đầu: Lấy thông tin KH từ code - Session
    public function index()
    {
        if(Session::get('code')){
            $datas['customerInfo'] = Customer::query()->where('giftCode','=',Session::get('code'))->firstOrFail();
            return view('customer.authenticated',compact('datas'));
        }
        return view('customer.index');
    }
//Kết thúc: Lấy thông tin KH từ code - Session

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($code)
    {
        dd($code);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
