@extends('ssurvey.layout')
@section('content')
<h5 class="text-danger mt-3">Thêm thông tin chế độ phúc lợi từ file excel hoặc điền vào form</h5>
<ul class="nav nav-tabs mt-3" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Upload excel file</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Điền vào form</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
        <div class="row">    
            <div class="col-md-4">
                <form method="post" action="/ssurvey/welfare-excel" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="WelfareYear" value="2019">
                    <a href="/template/Welfare_Upload_Template.xlsx" class="text-success" style="text-decoration: underline;"><i class="fas fa-file-excel"></i>&nbsp;Tải file excel mẫu</a>
                    <br><br>
                    <input type="file" accept=".xls,.xlsx" style="border: 0px solid #333;" name="file" required>
                    <br><br>
                    <button type="submit" class="btn btn-primary btn-sm w-50"><i class="fas fa-arrow-right"></i>&nbsp;upload</button>
                </form>
            </div>
            <div class="col-md-8 pb-3"><img src="/img/ssurvey/welfare.png" alt="" style="max-width: 100%;"></div>
        </div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <div class="row">
          <div class="col-12">
            <form method="POST" action="/ssurvey/welfare">
                {{csrf_field()}}
                <input type="hidden" name="WelfareYear" value="2019">
                <table class="table table-bordered table-sm" style="font-size: 14px;">
                    <thead>
                        <tr>
                            <th align="center">STT</th>
                            <th>Hạng mục thông tin</th>
                            <th>Trả lời bởi DN tham gia khảo sát</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th colspan="3">1. Thời gian làm việc, thời giờ nghỉ ngơi</th>
                        </tr>
                        <tr>
                            <td align="center">1</td>
                            <td>Số giờ làm việc/tuần (không tính tăng ca)</td>
                            <td><input class="no-border" name="WorkingHoursPerWeek" type="number"></td>
                        </tr>
                        <tr>
                            <td align="center">2</td>
                            <td>Chế độ làm việc theo ca</td>
                            <td><select class="no-border" name="calamviec"><option value="" selected="selected">chọn</option><option value="Làm giờ hành chính">Làm giờ hành chính</option><option value="Làm 2 ca(sáng, chiều)">Làm 2 ca(sáng, chiều)</option><option value="Làm 3 ca(sáng, chiều, tối)">Làm 3 ca(sáng, chiều, tối)</option></select></td>
                        </tr>
                        <tr>
                            <td align="center">3</td>
                            <td>Số ngày nghỉ/năm vẫn hưởng lương (không bao gồm ngày chủ nhật, ngày lễ, ngày thứ 7 (nếu có))</td>
                            <td><input class="no-border" name="songaynghi_vanhuongluong" type="text"></td>
                        </tr>
                        <tr>
                            <td align="center">4</td>
                            <td colspan="2">Số giờ làm tăng ca bình quân mỗi vị trí /tháng năm 2019</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>   4.1 Nhân viên, kỹ sư &amp; quản lý các cấp (giờ)</td>
                            <td><input class="no-border" name="OTEmployee" type="number"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>  4.2 Công nhân</td>
                            <td><input class="no-border" name="OTWorker" type="number"></td>
                        </tr>
                        <tr>
                            <th colspan="3">2. Chế độ tiền lương &amp; năng suất lao động</th>
                        </tr>
                        <tr>
                            <td align="center">1</td>
                            <td>Mức lương các vị trí</td>
                            <td><input type="text" class="no-border"></td>
                        </tr>
                        <tr>
                            <td align="center">2</td>
                            <td>Tiền lương trong thời gian thử việc (%)</td>
                            <td><input class="no-border" name="ProbationarySalary" type="text"></td>
                        </tr>
                        <tr>
                            <td align="center">3</td>
                            <td>Thời điểm điều chỉnh lương hàng năm</td>
                            <td><select class="no-border" name="SalaryAdjustmentTime"><option value="">chọn</option><option value="Tháng 1 của năm tiếp theo">Tháng 1 của năm tiếp theo</option><option value="Tháng 2 của năm tiếp theo">Tháng 2 của năm tiếp theo</option><option value="Tháng 3 của năm tiếp theo">Tháng 3 của năm tiếp theo</option></select></td>
                        </tr>
                        <tr>
                            <td align="center">4</td>
                            <td colspan="2">Tỉ lệ tăng lương 03 năm gần nhất (%)</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>    Năm 2017</td>
                            <td><input class="no-border" name="SalaryIncreaseRate1" type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>    Năm 2018</td>
                            <td><input class="no-border" name="SalaryIncreaseRate2" type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>    Năm 2019</td>
                            <td><input class="no-border" name="SalaryIncreaseRate3" type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>    Dự kiến năm 2020</td>
                            <td><input class="no-border" name="SalaryIncreaseExpectedRate" type="text"></td>
                        </tr>
                        <tr>
                            <td align="center">5</td>
                            <td>Chi phí lao động/doanh thu tính đến 30/9/2019</td>
                            <td><input class="no-border" name="LaborCostsPerRevenue" type="text"></td>
                        </tr>
                        <tr>
                            <td align="center">6</td>
                            <td>Chi phí lao động/lợi nhuận tính đến 30/9/2019</td>
                            <td><input class="no-border" name="LaborCostsPerProfit" type="text"></td>
                        </tr>
                        <tr>
                            <th colspan="3">3. Chế độ phúc lợi</th>
                        </tr>
                        <tr>
                            <td align="center">1</td>
                            <td>Chi phí ăn ca/người (VND)</td>
                            <td><input class="no-border" name="ShiftCost" type="text"></td>
                        </tr>
                        <tr>
                            <td align="center">2</td>
                            <td>Chế độ xe đưa đón</td>
                            <td><select class="no-border" name="ShuttleBus"><option value="">Chọn</option><option value="Có">Có</option><option value="Không">Không</option></select></td>
                        </tr>
                        <tr>
                            <td align="center">3</td>
                            <td>Chế độ ký túc xá cho công nhân viên</td>
                            <td><select class="no-border" name="Dormitory"><option value="">Chọn</option><option value="Có">Có</option><option value="Không">Không</option></select></td>
                        </tr>
                        <tr>
                            <td align="center">4</td>
                            <td colspan="2">Chế độ bảo hiểm nhân thọ</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>     4.1 Nhân viên, kỹ sư &amp; quản lý các cấp (giờ)</td>
                            <td><select class="no-border" name="EmployeeLifeAssurance"><option value="">chọn</option><option value="Có">Có</option><option value="Không">Không</option></select></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>     4.2 Công nhân</td>
                            <td><select class="no-border" name="WorkerLifeAssurance"><option value="">chọn</option><option value="Có">Có</option><option value="Không">Không</option></select></td>
                        </tr>
                        <tr>
                            <td align="center">5</td>
                            <td colspan="2">Chế độ bảo hiểm 24/24 (tai nạn lao động)</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>     5.1 Nhân viên, kỹ sư &amp; quản lý các cấp (giờ)</td>
                            <td><select class="no-border" name="EmployeeAccidentAssurance"><option value="">chọn</option><option value="Có">Có</option><option value="Không">Không</option></select></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>     5.2 Công nhân</td>
                            <td><select class="no-border" name="WorkerAccidentAssurance"><option value="">chọn</option><option value="Có">Có</option><option value="Không">Không</option></select></td>
                        </tr>
                        <tr>
                            <td align="center">6</td>
                            <td>Chi phí thăm quan, nghỉ mát mỗi nhân sự/năm</td>
                            <td><input class="no-border" name="TravelCostPerYear" type="text"></td>
                        </tr>
                        <tr>
                            <td align="center">7</td>
                            <td colspan="2">Các chế độ phúc lợi khác</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>     Hiếu/hỉ (tứ thân phụ mẫu, vợ/chồng, con cái)_Tiền mặt</td>
                            <td><input class="no-border" name="HieuHiTuThanCost" type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>     Hiếu/hỉ (tứ thân phụ mẫu, vợ/chồng, con cái)_Ngày nghỉ</td>
                            <td><input class="no-border" name="HieuHiTuThanNgay" type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>     Hiếu/hỉ (ông/bà nội ngoại, anh em ruột)_Tiền mặt</td>
                            <td><input class="no-border" name="HieuHiKhacCost" type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>     Hiếu/hỉ (ông/bà nội ngoại, anh em ruột)_Ngày nghỉ</td>
                            <td><input class="no-border" name="HieuHiKhacNgay" type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>     Mừng các ngày lễ của Việt Nam_Tiền mặt</td>
                            <td><input class="no-border" name="NgayLeVNExpense" type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>     Mừng ngày thành lập công ty_ Tiền mặt</td>
                            <td><input class="no-border" name="CompanyFoundedDateExpense" type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>     Mừng ngày thành lập công ty_ Ngày nghỉ</td>
                            <td><input class="no-border" name="CompanyFoundedDateDay" type="number"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>     Mừng sinh nhật nhân viên</td>
                            <td><input class="no-border" name="HappyBirthExpense" type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>     Mừng sinh con</td>
                            <td><input class="no-border" name="HappyBirthExpense" type="text"></td>
                        </tr>
                        <tr>
                            <th colspan="3">4. Biến động  nhân sự hàng năm_người</th>
                        </tr>
                        <tr>
                            <td align="center">1</td>
                            <td colspan="2">Số người nghỉ việc qua các năm (bao gồm số người làm việc cho công ty dù 01 ngày)</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>        Năm 2017</td>
                            <td><input class="no-border" name="NumberOfQuitPeople1" type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>        Năm 2018</td>
                            <td><input class="no-border" name="NumberOfQuitPeople2" type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>        Năm 2019 (tính đến 30 tháng 9 năm 2019)</td>
                            <td><input class="no-border" name="NumberOfQuitPeople3" type="text"></td>
                        </tr>
                        <tr>
                            <td align="center">2</td>
                            <td colspan="2">Số người vào công ty làm việc qua các năm (bao gồm số người làm việc cho công ty dù 01 ngày)</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>        Năm 2017</td>
                            <td><input class="no-border" name="NumberOfNewComers1" type="number"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>        Năm 2018</td>
                            <td><input class="no-border" name="NumberOfNewComers2" type="number"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>        Năm 2019 (tính đến 30 tháng 9 năm 2019)</td>
                            <td><input class="no-border" name="NumberOfNewComers3" type="number"></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-arrow-right"></i>&nbsp;lưu</button>
            </form>
          </div>
      </div>
    </div>
  </div>
@endsection