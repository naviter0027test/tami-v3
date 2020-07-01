<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCol2Company extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Company', function (Blueprint $table) {
            $table->string('contactLink1')
                ->default('')
                ->after('contact');
            $table->string('contactLink2')
                ->default('')
                ->after('contactLink1');
            $table->string('contactLink3')
                ->default('')
                ->after('contactLink2');
            $table->string('contactLink4')
                ->default('')
                ->after('contactLink3');
            $table->mediumText('contactDesc')
                ->after('contactLink4');
            $table->mediumText('contactDescEn')
                ->after('contactDesc');
            $table->string('nameEn')
                ->default('')
                ->after('name');
            $table->tinyInteger('frontMode')
                ->default(0)
                ->after('active');
            $table->string('frontColor1')
                ->default('')
                ->after('frontMode');
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
