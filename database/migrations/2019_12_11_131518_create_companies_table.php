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
            $table->string('company_name');
            $table->string('company_short_name');
            $table->string('company_product');
            $table->integer('city_id');
            $table->string('district_name', 50);
            $table->string('industry_park', 50);
            $table->string('company_tax', 20);
            $table->string('company_nationality', 30);
            $table->string('company_field', 30);
            $table->integer('industry_id');
            $table->string('company_operation_year',30);
            $table->string('company_personnel_scale',30);
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
