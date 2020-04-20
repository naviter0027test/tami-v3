<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Member', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account')
                ->default('');
            $table->string('password')
                ->default('');
            $table->string('mail')
                ->default('');
            $table->string('fbId')
                ->default('')
                ->comment('fb id');
            $table->string('name')
                ->default('')
                ->comment('會員名稱');
            $table->date('birthday')
                ->nullable()
                ->comment('會員生日');
            $table->string('idCard')
                ->default('')
                ->comment('會員身份證');
            $table->string('phone')
                ->default('')
                ->comment('會員手機');
            $table->tinyInteger('isCheckContract')
                ->default(0)
                ->comment('是否確認契約 1:Yes, 0:No');
            $table->string('bankAccount')
                ->default('')
                ->comment('銀行帳號');
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
        Schema::dropIfExists('Member');
    }
}
