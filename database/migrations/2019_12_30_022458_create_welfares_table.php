<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWelfaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('welfares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->float('WorkingHoursPerWeek')->nullable();
            $table->float('OTEmployee')->nullable();
            $table->float('OTWorker')->nullable();
            $table->integer('ProbationarySalary')->nullable();
            $table->string('SalaryAdjustmentTime')->nullable();
            $table->float('SalaryIncreaseRate1')->nullable();
            $table->float('SalaryIncreaseRate2')->nullable();
            $table->float('SalaryIncreaseRate3')->nullable();
            $table->float('SalaryIncreaseExpectedRate')->nullable();
            $table->float('LaborCostsPerRevenue')->nullable();
            $table->float('LaborCostsPerProfit')->nullable();
            $table->integer('ShiftCost')->nullable();
            $table->string('ShuttleBus', 10)->nullable();
            $table->string('Dormitory', 10)->nullable();
            $table->string('EmployeeLifeAssurance', 10)->nullable();
            $table->string('WorkerLifeAssurance', 10)->nullable();
            $table->string('EmployeeAccidentAssurance', 10)->nullable();
            $table->string('WorkerAccidentAssurance', 10)->nullable();
            $table->integer('TravelCostPerYear')->nullable();
            $table->integer('HieuHiTuThanCost')->nullable();
            $table->tinyInteger('HieuHiTuThanNgay')->nullable();
            $table->integer('HieuHiKhacCost')->nullable();
            $table->tinyInteger('HieuHiKhacNgay')->nullable();
            $table->integer('NgayLeVNExpense')->nullable();
            $table->integer('CompanyFoundedDateExpense')->nullable();
            $table->tinyInteger('CompanyFoundedDateDay')->nullable();
            $table->integer('EmployeeBirthdayExpense')->nullable();
            $table->integer('HappyBirthExpense')->nullable();
            $table->integer('NumberOfQuitPeople1')->nullable();
            $table->integer('NumberOfQuitPeople2')->nullable();
            $table->integer('NumberOfQuitPeople3')->nullable();
            $table->integer('NumberOfNewComers1')->nullable();
            $table->integer('NumberOfNewComers2')->nullable();
            $table->integer('NumberOfNewComers3')->nullable();
            $table->integer('WelfareYear');
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
        Schema::drop('welfares');
    }
}
