<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class CustomerApiContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customersInfo = Customer::all();
        return response()->json($customersInfo,200);
    }

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
        $insertCustomer = Customer::create([
            'name'=>$request->name,
            'avatar_link'=>$request->avatar_link,
            'giftCode'=>$request->giftCode,//mã kmai
            'giftType'=>$request->giftType,//loại kmai - phần trăm, tiền
            'giftNumeric'=>$request->giftNumeric,//số kmai
            'giftLink'=>'https://doppelherz.vn/cart/?wt_coupon='.$request->giftCode,//link kmai
            'linkGen'=>URL::to('/').'/vip/2023/'.$request->giftCode,
            'phone'=>$request->phone,
            'address'=>$request->address,//địa chỉ
            'city'=>$request->city,//thành phố
            'ward'=>$request->ward,//phường
            'distric'=>$request->distric,//quận huyện
            'type'=>$request->type,//loại khách
            'exchangeTimes'=>$request->exchangeTimes,//số lần đổi
            'status'=>$request->status,
        ]);
        return response()->json($insertCustomer,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
