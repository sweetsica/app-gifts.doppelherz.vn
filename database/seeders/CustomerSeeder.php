<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('customers')->insert([
           'name'=>'Khách hàng 1',
           'giftCode'=>'dph202389qzhkf4',//mã kmai
           'giftType'=>'percent',//loại kmai - phần trăm, tiền
           'giftNumeric'=>'15',//số kmai
           'giftLink'=>'https://doppelherz.vn/cart/?wt_coupon=dph202389qzhkf4',//link kmai
           'phone'=>'',
           'address'=>'',//địa chỉ
           'city'=>'',//thành phố
           'ward'=>'',//phường
           'distric'=>'',//quận huyện
           'type'=>'',//loại khách
           'exchangeTimes'=>'',//số lần đổi
            'status'=>1
       ]);
    }
}
