<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account')
                ->default('');
            $table->string('password')
                ->default('');
            $table->string('name')
                ->default('');
            $table->string('logo')
                ->default('');
            $table->string('email')
                ->default('');
            $table->tinyInteger('active')
                ->default(1);
            $table->string('contact')
                ->default('');
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
        Schema::dropIfExists('Company');
    }
}
