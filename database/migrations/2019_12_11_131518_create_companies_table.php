<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CompanyName');
            $table->string('CompanyShortName');
            $table->string('CompanyProduct');
            $table->integer('city_id');
            $table->string('CompanyDistrictName', 50);
            $table->string('CompanyIndustryPark', 50);
            $table->string('CompanyTax', 20);
            $table->integer('country_id');
            $table->string('CompanyField', 30);
            $table->integer('industry_id');
            $table->integer('namhd_id');
            $table->integer('scale_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('companies');
    }
}
