<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCol4Company extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Company', function (Blueprint $table) {
            $table->string('logo2')
                ->default('')
                ->after('logo');
            $table->string('companyRightInfo')
                ->default('')
                ->after('infoMode5');
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
