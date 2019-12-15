<?php
$arr_nations = ['Việt Nam' => 'Việt Nam', 'Hàn Quốc' => 'Hàn Quốc', 'Nhật Bản' => 'Nhật Bản', 'Đài Loan' => 'Đài Loan', 'Trung Quốc' => 'Trung Quốc', 'Singapore' => 'Singapore', 'Malaysia' => 'Malaysia'];
$arr_fields = ['Sản xuất' => 'Sản xuất', 'Thương mại' => 'Thương mại', 'Dịch vụ' => 'Dịch vụ'];
$arr_cities = \DB::table('cities')->orderBy('city_name', 'asc')->pluck('city_name', 'id');
$arr_districts = \DB::table('districts')->get();
$arr_nganh_cn = \App\Industry::pluck('industry_name', 'id');
$arr_nam_hd = ['Dưới 1 năm' => 'Dưới 1 năm', 'Từ 1 đến dưới 3 năm' => 'Từ 1 đến dưới 3 năm', 'Từ 3 đến dưới 5 năm' => 'Từ 3 đến dưới 5 năm', 'Từ 5 đến dưới 10 năm' => 'Từ 5 đến dưới 10 năm', 'Từ 10 năm đến dưới 15 năm' => 'Từ 10 năm đến dưới 15 năm', 'Từ 15 năm đến dưới 20 năm' => 'Từ 15 năm đến dưới 20 năm', 'Trên 20 năm' => 'Trên 20 năm'];
$arr_quy_mo = ["Dưới 10 người" => "Dưới 10 người", "Từ 10 đến dưới 20 người" => "Từ 10 đến dưới 20 người", "Từ 20 đến dưới 30 người" => "Từ 20 đến dưới 30 người", "Từ 30 đến dưới 50 người" => "Từ 30 đến dưới 50 người", "Từ 50 đến dưới 100 người" => "Từ 50 đến dưới 100 người", "Từ 100 đến dưới 200 người" => "Từ 100 đến dưới 200 người", "Từ 200 đến dưới 300 người" => "Từ 200 đến dưới 300 người", "Từ 300 đến dưới 500 người" => "Từ 300 đến dưới 500 người", "Từ 500 đến dưới 1000 người" => "Từ 500 đến dưới 1000 người", "Từ 1000 đến dưới 1500 người" => "Từ 1000 đến dưới 1500 người", "Từ 1500 đến dưới 2000 người" => "Từ 1500 đến dưới 2000 người", "Từ 2000 đến dưới 3000 người" => "Từ 2000 đến dưới 3000 người", "Từ 3000 đến dưới 5000 người" => "Từ 3000 đến dưới 5000 người", "Trên 5000 người" => "Trên 5000 người"];
?>
@extends('layouts.app')
@section('content')
<div class="container">
                        <form method="post" action="/register" name="form_register" id="form_register" class="ticksy-form">
                      {{ csrf_field() }}
                        <h4 class="text-center font-weight-bold">REGISTER</h4>
                        <div class="row">
                        <div class="col-12">
                          <div class="pt-1">
                              <div class="card border-primary">
                                  <div class="card-body">
                                      <div class="container">
                                        <h6 class="mb-1 text-primary font-weight-bold">1. Tên công ty</h6>

                                        <div class="row">
                                            <div class="col-md-4 mb-1">
                                                <label for="company_name">Tên đầy đủ&nbsp;<sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control" name="company_name" value="{{ old('company_name') }}" required>

                                                <div class="invalid-feedback{{ $errors->has('company_name') ? ' d-block' : '' }}">
                                                    {{ $errors->first('company_name') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="company_short_name">Tên viết tắt&nbsp;<sup class="text-danger">*</sup></label>

                                                <input type="text" class="form-control" name="company_short_name" value="{{ old('company_short_name') }}" required>

                                                <div class="invalid-feedback{{ $errors->has('company_short_name') ? ' d-block' : '' }}">
                                                    {{ $errors->first('company_short_name') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="company_product">Sản phẩm</label>
                                                <input type="text" class="form-control" name="company_product" value="{{ old('company_product') }}" required>
                                                <div class="invalid-feedback{{ $errors->has('company_product') ? ' d-block' : '' }}">
                                                    {{ $errors->first('company_product') }}
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="text-primary font-weight-bold pt-1">2. Địa chỉ đăng ký kinh doanh</h6>
                                        <div class="row">
                                            <div class="col-md-4 mb-1">
                                                <label for="city_id">Tỉnh, thành phố&nbsp;<sup class="text-danger">*</sup></label>
                                                    {!! Form::select('city_id', $arr_cities, old('city_id'), ['placeholder' => 'Vui lòng chọn', 'class' => 'form-control', 'id' => 'city', 'required']) !!}
                                                <div class="invalid-feedback{{ $errors->has('city_id') ? ' d-block' : '' }}">
                                                    {{ $errors->first('city_id') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="district_name">Quận huyện&nbsp;<sup class="text-danger">*</sup></label>
                                                <select class="form-control" name="district_name" value="{{ old('district_name') }}" required id="district">
                                                    <option value="">Vui lòng chọn</option>
                                                </select>
                                                <div class="invalid-feedback{{ $errors->has('district_name') ? ' d-block' : '' }}">
                                                    {{ $errors->first('district_name') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="industry_park">Khu công nghiệp&nbsp;<sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control" name="industry_park" value="{{ old('industry_park') }}" required>
                                                <div class="invalid-feedback{{ $errors->has('industry_park') ? ' d-block' : '' }}">
                                                    {{ $errors->first('industry_park') }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 mb-2">
                                                <label for="company_tax">Mã số thuế</label>
                                                <input type="text" class="form-control" name="company_tax" value="{{ old('company_tax') }}" required>
                                                <div class="invalid-feedback{{ $errors->has('company_tax') ? ' d-block' : '' }}">
                                                    {{ $errors->first('company_tax') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="company_nationality">Quốc tịch&nbsp;<sup class="text-danger">*</sup></label>
                                                {!! Form::select('company_nationality', $arr_nations, old('company_nationality'), ['placeholder' => 'Vui lòng chọn', 'class' => 'form-control', 'id' => '', 'required']) !!}
                                                <div class="invalid-feedback{{ $errors->has('company_nationality') ? ' d-block' : '' }}">
                                                    {{ $errors->first('company_nationality') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="company_field">Lĩnh vực hoạt động&nbsp;<sup class="text-danger">*</sup></label>
                                                {!! Form::select('company_field', $arr_fields, old('company_nationality'), ['placeholder' => 'Vui lòng chọn', 'class' => 'form-control', 'id' => '', 'required']) !!}
                                                <div class="invalid-feedback{{ $errors->has('company_field') ? ' d-block' : '' }}">
                                                    {{ $errors->first('company_field') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="industry_id">Ngành công nghiệp&nbsp;<sup class="text-danger">*</sup></label>
                                                {!! Form::select('industry_id', $arr_nganh_cn, old('industry_id'), ['placeholder' => 'Vui lòng chọn', 'class' => 'form-control', 'id' => '', 'required']) !!}
                                                <div class="invalid-feedback{{ $errors->has('industry_id') ? ' d-block' : '' }}">
                                                    {{ $errors->first('industry_id') }}
                                                </div>
                                            </div>

                                            <div class="col-md-4 mb-1">
                                                <label for="company_operation_year">Số năm hoạt động tại VN&nbsp;<sup class="text-danger">*</sup></label>
                                                {!! Form::select('company_operation_year', $arr_nam_hd, old('company_operation_year'), ['placeholder' => 'Vui lòng chọn', 'class' => 'form-control', 'id' => '', 'required']) !!}
                                                <div class="invalid-feedback{{ $errors->has('company_operation_year') ? ' d-block' : '' }}">
                                                    {{ $errors->first('company_operation_year') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="company_personnel_scale">Quy mô nhân sự (người)&nbsp;<sup class="text-danger">*</sup></label>
                                                {!! Form::select('company_personnel_scale', $arr_quy_mo, old('company_personnel_scale'), ['placeholder' => 'Vui lòng chọn', 'class' => 'form-control', 'id' => '', 'required']) !!}
                                                <div class="invalid-feedback{{ $errors->has('company_personnel_scale') ? ' d-block' : '' }}">
                                                    {{ $errors->first('company_personnel_scale') }}
                                                </div>
                                            </div>
                                        </div>

                                        <h6 class="text-primary font-weight-bold py-1 mb-0">3. Thông tin người liên hệ</h6>
                                        <div class="row">
                                            <div class="col-md-4 mb-1">
                                                <label for="name">Họ tên</label>
                                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                                <div class="invalid-feedback{{ $errors->has('name') ? ' d-block' : '' }}">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="position">Chức vụ</label>
                                                <input type="text" class="form-control" name="position" value="{{ old('position') }}" >
                                                <div class="invalid-feedback{{ $errors->has('position') ? ' d-block' : '' }}">
                                                    {{ $errors->first('position') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="mobile">Điện thoại</label>
                                                <input type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" >
                                                <div class="invalid-feedback{{ $errors->has('mobile') ? ' d-block' : '' }}">
                                                    {{ $errors->first('mobile') }}
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="text-primary font-weight-bold pb-1 mb-0">4. Thông tin tài khoản</h6>
                                        <div class="row">
                                            <div class="col-md-4 mb-1">
                                                <label for="email">Email&nbsp;<sup class="text-danger">*</sup></label>
                                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                                <div class="invalid-feedback{{ $errors->has('email') ? ' d-block' : '' }}">
                                                    {{ $errors->first('email') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="password">Password&nbsp;<sup class="text-danger">*</sup></label>
                                                <input type="password" class="form-control" name="password" value="{{ old('password') }}" >
                                                <div class="invalid-feedback{{ $errors->has('password') ? ' d-block' : '' }}">
                                                    {{ $errors->first('password') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="password_confirmation">Confirm Password&nbsp;<sup class="text-danger">*</sup></label>
                                                <input type="password" class="form-control" name="password_confirmation"  >
                                                <div class="invalid-feedback{{ $errors->has('password_confirmation') ? ' d-block' : '' }}">
                                                    {{ $errors->first('password_confirmation') }}
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn w-25 btn-primary mx-auto mt-2 float-right">đăng ký</button>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                      </div>
                        </div>

                            </form>
</div>
@endsection

@section('js')
<script>
    $districts = <?php echo json_encode($arr_districts)?>;

    $('#city').on('change', function(){
        var city_id = $(this).val();

        if(city_id){

            f_districits = _.filter($districts, function(o){
                return o.city_id == city_id;
            })
            rs = '<option value="">Quận huyện</option>';
            $.each(f_districits, function(i ,k){
                rs += '<option value="' + k.district_name + '">' + k.district_name + '</option>';
            });	
            $('#district').html(rs);
        }
        else{
            $('#district').html('<option value="">Quận huyện</option>');
        }
    });
</script>
@endsection
