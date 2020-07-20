<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableAreaRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CompanyAreaRelation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('companyId');
            $table->integer('companyAreaId');
            $table->unique(['companyId', 'companyAreaId']);
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
        Schema::dropIfExists('CompanyAreaRelation');
    }
}
