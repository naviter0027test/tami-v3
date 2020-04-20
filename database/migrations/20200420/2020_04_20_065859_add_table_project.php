<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Project', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('price')
                ->default(0)
                ->comment('售價');
            $table->integer('stockNum')
                ->default(0)
                ->comment('剩餘片數');
            $table->integer('internalIncome')
                ->default(0)
                ->comment('內部報酬');
            $table->mediumText('intro')
                ->nullable()
                ->comment('專案介紹');
            $table->mediumText('projRecord')
                ->nullable()
                ->comment('案場紀錄');
            $table->mediumText('acceptUpdate')
                ->nullable()
                ->comment('驗收更新');
            $table->mediumText('counterText')
                ->nullable()
                ->comment('計算機');
            $table->string('projDoc1')
                ->default('')
                ->comment('專案文件1');
            $table->string('projDoc2')
                ->default('')
                ->comment('專案文件2');
            $table->string('projDoc3')
                ->default('')
                ->comment('專案文件3');
            $table->string('projDoc4')
                ->default('')
                ->comment('專案文件4');
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
        Schema::dropIfExists('Project');
    }
}
