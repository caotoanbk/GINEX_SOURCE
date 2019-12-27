<?php
$arr_nations = \App\Country::pluck('CountryName', 'id');
$arr_fields = ['Sản xuất' => 'Sản xuất', 'Thương mại' => 'Thương mại', 'Dịch vụ' => 'Dịch vụ'];
$arr_cities = \DB::table('cities')->orderBy('CityName', 'asc')->pluck('CityName', 'id');
$arr_districts = \DB::table('districts')->get();
$arr_nganh_cn = \App\Industry::pluck('IndustryName', 'id');
$arr_nam_hd = \App\Namhd::pluck('NamhdName', 'id');
$arr_quy_mo = \App\Scale::pluc('ScaleName', 'id');
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
                              <div class="card border-secondary">
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
                                                <label for="CompanyDistrictName">Quận huyện&nbsp;<sup class="text-danger">*</sup></label>
                                                <select class="form-control" name="CompanyDistrictName" value="{{ old('CompanyDistrictName') }}" required id="district">
                                                    <option value="">Vui lòng chọn</option>
                                                </select>
                                                <div class="invalid-feedback{{ $errors->has('CompanyDistrictName') ? ' d-block' : '' }}">
                                                    {{ $errors->first('CompanyDistrictName') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="CompanyIndustryPark">Khu công nghiệp&nbsp;<sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control" name="CompanyIndustryPark" value="{{ old('CompanyIndustryPark') }}" required>
                                                <div class="invalid-feedback{{ $errors->has('CompanyIndustryPark') ? ' d-block' : '' }}">
                                                    {{ $errors->first('CompanyIndustryPark') }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 mb-2">
                                                <label for="CompanyTax">Mã số thuế</label>
                                                <input type="text" class="form-control" name="CompanyTax" value="{{ old('CompanyTax') }}" required>
                                                <div class="invalid-feedback{{ $errors->has('CompanyTax') ? ' d-block' : '' }}">
                                                    {{ $errors->first('CompanyTax') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="CompanyNationality">Quốc tịch&nbsp;<sup class="text-danger">*</sup></label>
                                                {!! Form::select('CompanyNationality', $arr_nations, old('CompanyNationality'), ['placeholder' => 'Vui lòng chọn', 'class' => 'form-control', 'id' => '', 'required']) !!}
                                                <div class="invalid-feedback{{ $errors->has('CompanyNationality') ? ' d-block' : '' }}">
                                                    {{ $errors->first('CompanyNationality') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="CompanyField">Lĩnh vực hoạt động&nbsp;<sup class="text-danger">*</sup></label>
                                                {!! Form::select('CompanyField', $arr_fields, old('company_nationality'), ['placeholder' => 'Vui lòng chọn', 'class' => 'form-control', 'id' => '', 'required']) !!}
                                                <div class="invalid-feedback{{ $errors->has('CompanyField') ? ' d-block' : '' }}">
                                                    {{ $errors->first('CompanyField') }}
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
                                                <label for="namhd_id">Số năm hoạt động tại VN&nbsp;<sup class="text-danger">*</sup></label>
                                                {!! Form::select('namhd_id', $arr_nam_hd, old('namhd_id'), ['placeholder' => 'Vui lòng chọn', 'class' => 'form-control', 'id' => '', 'required']) !!}
                                                <div class="invalid-feedback{{ $errors->has('namhd_id') ? ' d-block' : '' }}">
                                                    {{ $errors->first('namhd_id') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="scale_id">Quy mô nhân sự (người)&nbsp;<sup class="text-danger">*</sup></label>
                                                {!! Form::select('scale_id', $arr_quy_mo, old('scale_id'), ['placeholder' => 'Vui lòng chọn', 'class' => 'form-control', 'id' => '', 'required']) !!}
                                                <div class="invalid-feedback{{ $errors->has('scale_id') ? ' d-block' : '' }}">
                                                    {{ $errors->first('scale_id') }}
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
