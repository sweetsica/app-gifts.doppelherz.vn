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
        Schema::create('log_controllers', function (Blueprint $table) {
            $table->id();
            $table->string('ip')->nullable();
            $table->string('action')->nullable();
            $table->string('url')->nullable();
            $table->string('type_subject')->nullable();
            $table->string('id_subject')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_controllers');
    }
};
