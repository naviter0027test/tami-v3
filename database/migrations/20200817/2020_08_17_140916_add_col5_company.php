<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCol5Company extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Company', function (Blueprint $table) {
            $table->string('title')
                ->default('')
                ->after('contactLink4');
            $table->string('titleEn')
                ->default('')
                ->after('title');
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
