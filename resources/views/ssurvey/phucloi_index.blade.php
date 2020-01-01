@extends('ssurvey.layout')
@section('css')
    <style>
        #welfare_table th, #welfare_table td{
            min-width: 130px;
            font-size: 14px;
        }
    </style>
@endsection
@section('content')

<h1 class="h4 my-2 text-danger">Chế độ phúc lợi</h1>
<div class="card shadow mb-4">
    <div class="card-header py-2">
        <a class="btn btn-success btn-sm" href="/ssurvey/create-welfare"><i class="fas fa-plus"></i> Thêm mới chế độ phúc lợi</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-sm" id="welfare_table">
                <thead>
                    <th>Year</th>
                    <th>Số giờ làm việc một tuần</th>
                    <th>OT Nhân viên(giờ)</th>
                    <th>OT Công nhân(giờ)</th>
                    <th>Lương thử việc(%)</th>
                    <th>Thời điểm điều chỉnh lương</th>
                    <th>Tỷ lệ tăng lương 1(%)</th>
                    <th>Tỷ lệ tăng lương 2(%)</th>
                    <th>Tỷ lệ tăng lương 3(%)</th>
                    <th>Tỷ lệ tăng lương dự kiến(%)</th>
                    <th>Tỷ lệ chi phí lao động/doanh thu</th>
                    <th>Tỷ lệ chi phí lao động/lợi nhuận</th>
                    <th>Chi phí ăn ca</th>
                    <th>Xe đưa đón</th>
                    <th>Ký túc xá</th>
                    <th>Bảo hiểm nhân thọ nhân viên</th>
                    <th>Bảo hiểm nhân thọ công nhân</th>
                    <th>Bảo hiểm tai nạn nhân viên</th>
                    <th>Bảo hiểm tai nạn công nhân</th>
                    <th>Chi phí du lịch hàng năm</th>
                    <th>Hiếu hỉ tứ thân(tiền)</th>
                    <th>Hiếu hỉ tứ thân(ngày)</th>
                    <th>Hiếu hỉ khác(tiền)</th>
                    <th>Hiếu hỉ khác(ngày)</th>
                    <th>Ngày lễ Việt Nam(tiền)</th>
                    <th>Ngày thành lập cty(tiền)</th>
                    <th>Ngày thành lập cty(ngày)</th>
                    <th>Sinh nhật</th>
                    <th>Sinh con</th>
                    <th>Số người nghỉ 1</th>
                    <th>Số người nghỉ 2</th>
                    <th>Số người nghỉ 3</th>
                    <th>Số người vào 1</th>
                    <th>Số người vào 2</th>
                    <th>Số người vào 3</th>
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
        var $table = $('#welfare_table').DataTable({
				        "processing": true,
				        "responsive": true,
				        "columnDefs": [
					        {targets: '_all', "class": "one"},
				        ],
				        "serverSide": true,
				        "ajax": {
				            'url': '/ssurvey/welfare/data',
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
                            data: 'WelfareYear',
                            name: 'WelfareYear'
                        },
                        {
                            data: 'WorkingHoursPerWeek',
                            name: 'WorkingHoursPerWeek'
                        },
                        {
                            data: 'OTEmployee',
                            name: 'OTEmployee'
                        },
                        {
                            data: 'OTWorker',
                            name: 'OTWorker'
                        },
                        {
                            data: 'ProbationarySalary',
                            name: 'ProbationarySalary'
                        },
                        {
                            data: 'SalaryAdjustmentTime',
                            name: 'SalaryAdjustmentTime'
                        },
                        {
                            data: 'SalaryIncreaseRate1',
                            name: 'SalaryIncreaseRate1'
                        },
                        {
                            data: 'SalaryIncreaseRate2',
                            name: 'SalaryIncreaseRate2'
                        },
                        {
                            data: 'SalaryIncreaseRate3',
                            name: 'SalaryIncreaseRate3'
                        },
                        {
                            data: 'SalaryIncreaseExpectedRate',
                            name: 'SalaryIncreaseExpectedRate'
                        },
                        {
                            data: 'LaborCostsPerRevenue',
                            name: 'LaborCostsPerRevenue'
                        },
                        {
                            data: 'LaborCostsPerProfit',
                            name: 'LaborCostsPerProfit'
                        },
                        {
                            data: 'ShiftCost',
                            name: 'ShiftCost'
                        },
                        {
                            data: 'ShuttleBus',
                            name: 'ShuttleBus'
                        },
                        {
                            data: 'Dormitory',
                            name: 'Dormitory'
                        },
                        {
                            data: 'EmployeeLifeAssurance',
                            name: 'EmployeeLifeAssurance'
                        },
                        {
                            data: 'WorkerLifeAssurance',
                            name: 'WorkerLifeAssurance'
                        },
                        {
                            data: 'EmployeeAccidentAssurance',
                            name: 'EmployeeAccidentAssurance'
                        },
                        {
                            data: 'WorkerAccidentAssurance',
                            name: 'WorkerAccidentAssurance'
                        },
                        {
                            data: 'TravelCostPerYear',
                            name: 'TravelCostPerYear'
                        },
                        {
                            data: 'HieuHiTuThanCost',
                            name: 'HieuHiTuThanCost'
                        },
                        {
                            data: 'HieuHiTuThanNgay',
                            name: 'HieuHiTuThanNgay'
                        },
                        {
                            data: 'HieuHiKhacCost',
                            name: 'HieuHiKhacCost'
                        },
                        {
                            data: 'HieuHiKhacNgay',
                            name: 'HieuHiKhacNgay'
                        },
                        {
                            data: 'NgayLeVNExpense',
                            name: 'NgayLeVNExpense'
                        },
                        {
                            data: 'CompanyFoundedDateExpense',
                            name: 'CompanyFoundedDateExpense'
                        },
                        {
                            data: 'CompanyFoundedDateDay',
                            name: 'CompanyFoundedDateDay'
                        },
                        {
                            data: 'EmployeeBirthdayExpense',
                            name: 'EmployeeBirthdayExpense'
                        },
                        {
                            data: 'HappyBirthExpense',
                            name: 'HappyBirthExpense'
                        },
                        {
                            data: 'NumberOfQuitPeople1',
                            name: 'NumberOfQuitPeople1'
                        },
                        {
                            data: 'NumberOfQuitPeople2',
                            name: 'NumberOfQuitPeople2'
                        },
                        {
                            data: 'NumberOfQuitPeople3',
                            name: 'NumberOfQuitPeople3'
                        },
                        {
                            data: 'NumberOfNewComers1',
                            name: 'NumberOfNewComers1'
                        },
                        {
                            data: 'NumberOfNewComers2',
                            name: 'NumberOfNewComers2'
                        },
                        {
                            data: 'NumberOfNewComers3',
                            name: 'NumberOfNewComers3'
                        }
                        
                    ]
			    });
    })
</script>
@endsection