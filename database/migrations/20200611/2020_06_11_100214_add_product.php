<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')
                ->default('');
            $table->string('picture1')
                ->default('')
                ->comment('產品圖片上傳');
            $table->string('info')
                ->default('');
            $table->string('video')
                ->default('')
                ->comment('影片上傳');
            $table->string('dm')
                ->default('')
                ->comment('dm(超連結)');
            $table->string('other')
                ->default('')
                ->comment('其他(超連結)');
            $table->tinyInteger('active')
                ->default(1)
                ->comment('上架:1, 下架:0');
            $table->integer('companyId')
                ->comment('哪間公司持有');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Product');
    }
}
