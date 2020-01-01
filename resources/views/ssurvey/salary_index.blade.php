@extends('ssurvey.layout')
@section('css')
    <style>
        #salary_table th{
            min-width: 130px;
            font-size: 14px;
        }
        #salary_table td{
            font-size: 14px;
        }
    </style>
@endsection
@section('content')

<h1 class="h4 my-2 text-danger">Chế độ lương</h1>
<form action="/ssurvey/salary-excel" method="post" class="mb-3" enctype="multipart/form-data">
    {{csrf_field()}}
    Upload bảng lương <a href="/template/Salary_Template.xlsx" class="text-success" style="text-decoration: underline;"><i class="fas fa-file-excel"></i>&nbsp;Tải file excel mẫu</a>
    <br>
    <?php
    $companies = \App\Company::pluck('CompanyName', 'CompanyName');
    ?>
    {!! Form::select('company_id',$companies, null,['placeholder' => 'công ty', 'style' => 'padding: 3px'] ) !!}
    <select name="SalaryYear" style="padding: 3px"><option value="2019">Năm 2019</option><option value="2020">Năm 2020</option></select>
    &nbsp;<input type="file" name="file" style="max-width: 210px;" required>&nbsp;<button type="submit" class="btn btn-primary btn-sm">upload</button>
</form>
<div class="card shadow mb-4">
    <div class="card-header py-2 bg-secondary text-center">
        THÔNG TIN LƯƠNG CHI TIẾT
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-sm" id="salary_table">
                <thead>
                    <th>Năm</th>
                    <th>Họ tên</th>
                    <th>Học vấn</th>
                    <th style="min-width: 220px;">Loại lao động</th>
                    <th style="min-width: 250px;">Nhóm công việc</th>
                    <th>Chức vụ</th>
                    <th>Chức danh</th>
                    <th style="min-width: 50px;">Tuổi</th>
                    <th>Số năm KN</th>
                    <th>Số năm KN vị trí hiện tại</th>
                    <th>Số người quản lý trực tiếp</th>
                    <th>Mức lương,phụ cấp đóng BHXH</th>
                    <th>Tổng phụ cấp</th>
                    <th>Tổng trợ cấp</th>
                    <th>Tổng thu nhập cố định/tháng</th>
                    <th style="min-width: 180px;">Tổng thu nhập không cố định/tháng</th>
                    <th>Tổng thu nhập/tháng</th>
                    <th>Chi phí BH công ty đóng</th>
                    <th>Ăn ca</th>
                    <th>Đồng phục</th>
                    <th>Số giờ tăng ca bình quân</th>
                    <th>Chi phí BH không bắt buộc</th>
                    <th>Ghi chú</th>
                </thead>

                <tbody></tbody>
            </table>
          </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        var $table = $('#salary_table').DataTable({
				        "processing": true,
				        "responsive": true,
				        "columnDefs": [
					        {targets: '_all', "class": "one"},
				        ],
				        "serverSide": true,
				        "ajax": {
				            'url': '/ssurvey/salary/data',
				            'type': 'get',
				            'headers': {
				                'X-CSRF-Token': $('meta[name=_token]').attr('content')
				            }
			        },
			        "dom": '<"toolbar">lBfrtip',
			        "lengthMenu": [
			            [10, 25, 50, -1],
			            [10, 25, 50, 'All']
			        ],
			        "columns": [
                        {
                            data: 'SalaryYear',
                            name: 'SalaryYear'
                        },
                        {
                            data: 'Name',
                            name: 'Name'
                        },
                        {
                            data: 'Education',
                            name: 'Education'
                        },
                        {
                            data: 'LaborType',
                            name: 'LaborType'
                        },
                        {
                            data: 'JobFamily',
                            name: 'JobFamily'
                        },
                        {
                            data: 'Position',
                            name: 'Position'
                        },
                        {
                            data: 'JobTitle',
                            name: 'JobTitle'
                        },
                        {
                            data: 'Age',
                            name: 'Age'
                        },
                        {
                            data: 'ExperienceYears',
                            name: 'ExperienceYears'
                        },
                        {
                            data: 'CurrentPosExperienceYears',
                            name: 'CurrentPosExperienceYears'
                        },
                        {
                            data: 'SoNSQuanLyTrucTiep',
                            name: 'SoNSQuanLyTrucTiep'
                        },
                        {
                            data: 'MucLuongDongBHXH',
                            name: 'MucLuongDongBHXH'
                        },
                        {
                            data: 'TongCacKhoanPC',
                            name: 'TongCacKhoanPC'
                        },
                        {
                            data: 'TongCacKhoanTC',
                            name: 'TongCacKhoanTC'
                        },
                        {
                            data: 'TongThuNhapCoDinh',
                            name: 'TongThuNhapCoDinh'
                        },
                        {
                            data: 'TongThuNhapKoCoDinh',
                            name: 'TongThuNhapKoCoDinh'
                        },
                        {
                            data: 'TongThuNhap',
                            name: 'TongThuNhap'
                        },
                        {
                            data: 'ChiPhiBHCtyDong',
                            name: 'ChiPhiBHCtyDong'
                        },
                        {
                            data: 'AnCa',
                            name: 'AnCa'
                        },
                        {
                            data: 'DongPhuc',
                            name: 'DongPhuc'
                        },
                        {
                            data: 'SoGioTangCaTB',
                            name: 'SoGioTangCaTB'
                        },
                        {
                            data: 'BHKhac',
                            name: 'BHKhac'
                        },
                        {
                            data: 'GhiChu',
                            name: 'GhiChu'
                        }
                    ]
			    });
    })
</script>
@endsection