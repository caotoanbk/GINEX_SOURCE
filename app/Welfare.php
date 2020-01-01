<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Welfare extends Model
{
    protected $fillable = ['company_id', 'WorkingHoursPerWeek', 'OTEmployee', 'OTWorker', 'ProbationarySalary', 'SalaryAdjustmentTime', 'SalaryIncreaseRate1', 'SalaryIncreaseRate2', 'SalaryIncreaseRate3', 'SalaryIncreaseExpectedRate', 'LaborCostsPerRevenue', 'LaborCostsPerProfit', 'ShiftCost', 'ShuttleBus', 'Dormitory', 'EmployeeLifeAssurance', 'WorkerLifeAssurance', 'EmployeeAccidentAssurance', 'WorkerAccidentAssurance', 'TravelCostPerYear', 'HieuHiTuThanCost', 'HieuHiTuThanNgay', 'HieuHiKhacCost','HieuHiKhacNgay','NgayLeVNExpense','CompanyFoundedDateExpense','CompanyFoundedDateDay', 'EmployeeBirthdayExpense','HappyBirthExpense','NumberOfQuitPeople1','NumberOfQuitPeople2','NumberOfQuitPeople3','NumberOfNewComers1','NumberOfNewComers2','NumberOfNewComers3','WelfareYear'];
}
