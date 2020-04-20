<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableRoof extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Roof', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address')
                ->default('')
                ->comment('屋頂地址');
            $table->string('relationship')
                ->default('')
                ->comment('與建物持有人的關係');
            $table->integer('pings')
                ->default(0)
                ->comment('屋頂坪數');
            $table->integer('height')
                ->default(0)
                ->comment('屋頂樓高');
            $table->integer('age')
                ->default(0)
                ->comment('屋頂年齡');
            $table->string('roofClass')
                ->default('')
                ->comment('屋頂類型');
            $table->string('roofDoc1')
                ->default('')
                ->comment('屋頂文件1');
            $table->string('roofDoc2')
                ->default('')
                ->comment('屋頂文件2');
            $table->string('roofDoc3')
                ->default('')
                ->comment('屋頂文件3');
            $table->tinyInteger('provideMode')
                ->default(0)
                ->comment('提供屋頂模式');
            $table->tinyInteger('remind1')
                ->default(0)
                ->comment('提醒1');
            $table->tinyInteger('remind2')
                ->default(0)
                ->comment('提醒2');
            $table->tinyInteger('remind3')
                ->default(0)
                ->comment('提醒3');
            $table->tinyInteger('remind4')
                ->default(0)
                ->comment('提醒4');
            $table->tinyInteger('remind5')
                ->default(0)
                ->comment('提醒5');
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
        Schema::dropIfExists('Roof');
    }
}
