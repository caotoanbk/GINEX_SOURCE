<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->string('Name', 50);
            $table->string('Education', 50);
            $table->string('LaborType', 100);
            $table->string('JobFamily');
            $table->string('Position',100);
            $table->string('JobTitle', 100);
            $table->tinyInteger('Age')->nullable();
            $table->tinyInteger('ExperienceYears');
            $table->tinyInteger('CurrentPosExperienceYears')->nullable();
            $table->integer('SoNSQuanLyTrucTiep');
            $table->integer('MucLuongDongBHXH');
            $table->integer('TongCacKhoanPC')->nullable();
            $table->integer('TongCacKhoanTC')->nullable();
            $table->integer('TongThuNhapCoDinh');
            $table->integer('TongThuNhapKoCoDinh')->nullable();
            $table->integer('TongThuNhap');
            $table->integer('ChiPhiBHCtyDong')->nullable();
            $table->string('AnCa', 20);
            $table->string('DongPhuc', 20);
            $table->float('SoGioTangCaTB')->nullable();
            $table->string('BHKhac', 20);
            $table->string('GhiChu',100)->nullable();
            $table->integer('SalaryYear');
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
        Schema::drop('salaries');
    }
}
