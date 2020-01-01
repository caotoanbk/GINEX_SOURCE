<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $fillable = ['company_id', 'Name', 'Education', 'LaborType', 'JobFamily', 'Position', 'JobTitle', 'Age', 'ExperienceYears', 'CurrentPosExperienceYears', 'SoNSQuanLyTrucTiep', 'MucLuongDongBHXH', 'TongCacKhoanPC', 'TongCacKhoanTC', 'TongThuNhapCoDinh', 'TongThuNhapKoCoDinh', 'TongThuNhap', 'ChiPhiBHCtyDong', 'AnCa', 'DongPhuc', 'SoGioTangCaTB', 'BHKhac', 'GhiChu', 'SalaryYear'];
}
