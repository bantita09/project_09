<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('back', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable()->comment('รูปภาพสินค้า');
            $table->string('name')->nullable()->comment('ชื่อสินค้า');
            $table->string('detail')->nullable()->comment('รายละเอียดสินค้า');
            $table->integer('created_by')->nullable()->comment('user ที่เพิ่ม');
            $table->integer('updated_by')->nullable()->comment('user ที่แก้ไข');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('back');
    }
};
