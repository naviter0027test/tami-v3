<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Company', function (Blueprint $table) {
            $table->string('infoPath1')
                ->default('')
                ->after('active')
                ->comment('公司圖片或影片介紹');
            $table->tinyInteger('infoMode1')
                ->default(0)
                ->after('infoPath1')
                ->comment('1:圖片路徑, 2:影片網址');
            $table->string('infoPath2')
                ->default('')
                ->after('infoMode1')
                ->comment('公司圖片或影片介紹');
            $table->tinyInteger('infoMode2')
                ->default(0)
                ->after('infoPath2')
                ->comment('1:圖片路徑, 2:影片網址');
            $table->string('infoPath3')
                ->default('')
                ->after('infoMode2')
                ->comment('公司圖片或影片介紹');
            $table->tinyInteger('infoMode3')
                ->default(0)
                ->after('infoPath3')
                ->comment('1:圖片路徑, 2:影片網址');
            $table->string('infoPath4')
                ->default('')
                ->after('infoMode3')
                ->comment('公司圖片或影片介紹');
            $table->tinyInteger('infoMode4')
                ->default(0)
                ->after('infoPath4')
                ->comment('1:圖片路徑, 2:影片網址');
            $table->string('infoPath5')
                ->default('')
                ->after('infoMode4')
                ->comment('公司圖片或影片介紹');
            $table->tinyInteger('infoMode5')
                ->default(0)
                ->after('infoPath5')
                ->comment('1:圖片路徑, 2:影片網址');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Company', function (Blueprint $table) {
            //
        });
    }
}
