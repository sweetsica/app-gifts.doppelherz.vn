<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('avatar_link')->nullable()->default('https://doppelherz.vn/wp-content/uploads/2022/12/LOGO-DOPPELHERZ-khong-khau-hieu-1000x800.png');
            $table->string('giftCode')->unique();//mã kmai
            $table->string('giftType')->nullable();//loại kmai - phần trăm, tiền
            $table->string('giftNumeric')->nullable();//số kmai
            $table->string('giftLink')->nullable();//link kmai
            $table->string('linkGen')->nullable();//link được tạo
            $table->string('phone')->nullable();
            $table->string('address')->nullable();//địa chỉ
            $table->string('city')->nullable();//thành phố
            $table->string('ward')->nullable();//phường
            $table->string('distric')->nullable();//quận huyện
            $table->string('type')->nullable();//loại khách
            $table->string('exchangeTimes')->nullable();//số lần đổi
            $table->boolean('status')->nullable()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
