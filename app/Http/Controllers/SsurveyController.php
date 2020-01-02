<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Salary;
use App\Welfare;
use Yajra\Datatables\Facades\Datatables;

class SsurveyController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function index()
    {
        return view('ssurvey.index');
    }

    public function salary_index()
    {
        return view('ssurvey.salary_index');
    }

    public function welfare_index()
    {
        return view('ssurvey.phucloi_index');
    }

    public function welfare_store(Request $request)
    {
        if(!$request->has('company_id')){
            $request->merge(['company_id' => \Auth::user()->company->id]);
        }
        Welfare::create($request->except('_token'));
        return redirect('/ssurvey/welfare');
    }

    public function salary_excel_store(Request $request){
        if($request->hasFile('file')){
          $file = $_FILES['file']['tmp_name'];
          $objReader = \PHPExcel_IOFactory::createReaderForFile($file);
          $objReader->setLoadSheetsOnly(0);
          $objExcel = $objReader->load($file);
          $sheetData = $objExcel->getActiveSheet()->toArray('null',true,true,true);
          $highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
  
          for ($i=3; $i <=$highestRow ; $i++) { 
              $salary_data = [
                  'company_id' => $request->get('company_id')?$request->get('company_id'):\Auth::user()->company->id,
                  'Name' => $sheetData[$i]['B'],
                  'Education' => $sheetData[$i]['C'],
                  'LaborType' => $sheetData[$i]['D'],
                  'JobFamily' => $sheetData[$i]['E'],
                  'Position' => $sheetData[$i]['F'],
                  'JobTitle' => $sheetData[$i]['G'],
                  'Tuoi' => $sheetData[$i]['H'],
                  'ExperienceYears' => $sheetData[$i]['I'],
                  'CurrentPosExperienceYears' => $sheetData[$i]['J'],
                  'SoNSQuanLyTrucTiep' => str_replace(array('.', ','), '' ,$sheetData[$i]['K']),
                  'MucLuongDongBHXH' => str_replace(array('.', ','), '' , $sheetData[$i]['L']),
                  'TongCacKhoanPC' => str_replace(array('.', ','), '' , $sheetData[$i]['M']),
                  'TongCacKhoanTC' => str_replace(array('.', ','), '' , $sheetData[$i]['N']),
                  'TongThuNhapCoDinh' => str_replace(array('.', ','), '' , $sheetData[$i]['O']),
                  'TongThuNhapKoCoDinh' => str_replace(array('.', ','), '' , $sheetData[$i]['P']),
                  'TongThuNhap' => str_replace(array('.', ','), '' , $sheetData[$i]['Q']),
                  'ChiPhiBHCtyDong' => str_replace(array('.', ','), '' , $sheetData[$i]['R']),
                  'AnCa' => $sheetData[$i]['S'],
                  'DongPhuc' => $sheetData[$i]['T'],
                  'SoGioTangCaTB' => $sheetData[$i]['U'],
                  'BHKhac' => $sheetData[$i]['V'],
                  'GhiChu' => $sheetData[$i]['W'],
                  'SalaryYear' => '2019'
              ];
              \App\Salary::create($salary_data);
          }
          return redirect('\ssurvey\salary');
        }
      }

    public function welfare_excel_store(Request $request)
    {
      if($request->hasFile('file')){
        $file = $_FILES['file']['tmp_name'];
        $objReader = \PHPExcel_IOFactory::createReaderForFile($file);
        $sheetnames = $objReader->listWorksheetNames($file);
        if(count($sheetnames)>1){
            $objReader->setLoadSheetsOnly($sheetnames[1]);
        }else{
            $objReader->setLoadSheetsOnly(0);
        }
        $objExcel = $objReader->load($file);
        $sheetData = $objExcel->getActiveSheet()->toArray('',true,true,true);
        $highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
        if($highestRow < 51) 
            return redirect()->back()->with('msg', 'File Không Hợp Lệ');
        $phucloi_data = [
            'company_id' => $request->get('company_id')?$request->get('company_id'):\Auth::user()->company->id,
            'WorkingHoursPerWeek' => $sheetData[5]['C'],
            // 'calamviec' => $sheetData[6]['C'],
            // 'songaynghi_vanhuongluong' => $sheetData[7]['C'],
            'OTEmployee' => $sheetData[9]['C'],
            'OTWorker' => $sheetData[10]['C'],
            'ProbationarySalary' => $sheetData[13]['C'],
            'SalaryAdjustmentTime' => $sheetData[14]['C'],
            'SalaryIncreaseRate1' => $sheetData[16]['C'],
            'SalaryIncreaseRate2' => $sheetData[17]['C'],
            'SalaryIncreaseRate3' => $sheetData[18]['C'],
            'SalaryIncreaseExpectedRate' => $sheetData[19]['C'],
            'LaborCostsPerRevenue' => $sheetData[20]['C'],
            'LaborCostsPerProfit' => $sheetData[21]['C'],
            'ShiftCost' => $sheetData[23]['C'],
            'ShuttleBus' => $sheetData[24]['C'],
            'Dormitory' => $sheetData[25]['C'],
            'EmployeeLifeAssurance' => $sheetData[27]['C'],
            'WorkerLifeAssurance' => $sheetData[28]['C'],
            'EmployeeAccidentAssurance' => $sheetData[30]['C'],
            'WorkerAccidentAssurance' => $sheetData[31]['C'],
            'TravelCostPerYear' => str_replace(array('.', ','), '' , $sheetData[32]['C']),
            'HieuHiTuThanCost' => str_replace(array('.', ','), '' , $sheetData[34]['C']),
            'HieuHiTuThanNgay' => $sheetData[35]['C'],
            'HieuHiKhacCost' => str_replace(array('.', ','), '' , $sheetData[36]['C']),
            'HieuHiKhacNgay' => $sheetData[37]['C'],
            'NgayLeVNExpense' => str_replace(array('.', ','), '' , $sheetData[38]['C']),
            'CompanyFoundedDateExpense' => str_replace(array('.', ','), '' , $sheetData[39]['C']),
            'CompanyFoundedDateDay' => $sheetData[40]['C'],
            'EmployeeBirthdayExpense' => str_replace(array('.', ','), '' , $sheetData[41]['C']),
            'HappyBirthExpense' => str_replace(array('.', ','), '' , $sheetData[42]['C']),
            'NumberOfQuitPeople1' => $sheetData[45]['C'],
            'NumberOfQuitPeople2' => $sheetData[46]['C'],
            'NumberOfQuitPeople3' => $sheetData[47]['C'],
            'NumberOfNewComers1' => $sheetData[49]['C'],
            'NumberOfNewComers2' => $sheetData[50]['C'],
            'NumberOfNewComers3' => $sheetData[51]['C'],
            'WelfareYear' => $request->get('WelfareYear')
        ];

        Welfare::create($phucloi_data);
        return redirect('/ssurvey/welfare');
        // return redirect()->back()->with('msg', 'Cập nhật thành công');
      }
    }

    public function welfare_create()
    {
        return view('ssurvey.phucloi');
    }

    public function welfare_data(Request $request)
    {
        $welfares = Welfare::select();
        return Datatables::of($welfares)->make(true);
    }

    public function salary_data(Request $request)
    {
        $salaries = Salary::select();
        return Datatables::of($salaries)->make(true);
    }
}
