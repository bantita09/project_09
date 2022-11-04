<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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

        Schema::create('type_product', function (Blueprint $table) {

            $table->id();
            $table->string('name')->nullable()->comment('ชื่อหมวดหมู่สินค้า');
            $table->integer('created_by')->nullable()->comment('user ที่เพิ่ม');
            $table->integer('updated_by')->nullable()->comment('user ที่แก้ไข');
            $table->timestamps();
            $table->softDeletes();

        });

        DB::table('type_product')->insert([

            [
                'id' => '1',
                'name' => 'House Blend',
            ],
            [
                'id' => '2',
                'name' => 'Floral Tone',
            ],
            [
                'id' => '3',
                'name' => 'Fruity Tone',
            ],
            [
                'id' => '4',
                'name' => 'Nutty Tone',
            ],
            [
                'id' => '5',
                'name' => 'Winey Tone',
            ]

        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_product');
    }
};
