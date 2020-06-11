<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')
                ->default('');
            $table->string('email')
                ->default('');
            $table->string('phone')
                ->default('');
            $table->mediumText('content');
            $table->integer('companyId')
                ->comment('哪間公司持有');
            $table->integer('productId')
                ->comment('對哪個產品有疑問');
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
        Schema::dropIfExists('Contact');
    }
}
