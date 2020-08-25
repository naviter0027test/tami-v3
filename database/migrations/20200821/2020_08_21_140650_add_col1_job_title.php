<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCol1JobTitle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('JobTitle', function (Blueprint $table) {
            $table->string('jobTitleEn')
                ->default('')
                ->after('jobTitle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('JobTitle', function (Blueprint $table) {
            //
        });
    }
}
