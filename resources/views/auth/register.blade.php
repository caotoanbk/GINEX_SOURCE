<?php
$arr_nations = ['Việt Nam' => 'Việt Nam', 'Hàn Quốc' => 'Hàn Quốc', 'Nhật Bản' => 'Nhật Bản', 'Đài Loan' => 'Đài Loan', 'Trung Quốc' => 'Trung Quốc', 'Singapore' => 'Singapore', 'Malaysia' => 'Malaysia'];
//$arr_citys = \DB::table('city')->orderBy('name', 'asc')->pluck('name', 'id');
$arr_citys = [1=> 'hai phong', 2 => 'Ha noi'];
$arr_nganh_cn = array();
$json = json_decode(file_get_contents('http://salary-survey.ginex.com.vn/json/nganh_cn.json'));
foreach ($json as $value) {
    $arr_nganh_cn[$value->vi] = $value->vi;
}
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
                            {{-- <div class="col-12"> --}}
                                {{-- <h5 class="text-secondary">1. Thông tin tài khoản</h5>
                          <ul class="list-group pt-1">
                              <li class="list-group-item d-flex" style="">
                                <div>
                                    <label for="email">Email đăng nhập</label>
                                    <p>
                                        <input type="email" value="{{ old('email') }}" class="field" name="email" required>
                                        <span class="required"><i class="fa fa-asterisk"></i></span>
                                    </p>
                                    <div class="invalid-feedback{{ $errors->has('email') ? ' d-block' : '' }}">
                                        {{ $errors->first('email') }}
                                    </div>
                                </div>

                                <div>
                                    <label for="password">Mật khẩu</label>
                                    <p>
                                      <input type="password" value="" class="field" name="password" required>
                                      <span class="required"><i class="fa fa-asterisk"></i></span>
                                    </p>
                                    <div class="invalid-feedback{{ $errors->has('password') ? ' d-block' : '' }}">
                                      {{ $errors->first('password') }}
                                    </div>
                                </div>

                                <div>
                                    <label for="password">Xác nhận mật khẩu</label>
                                    <p>
                                        <input type="password" value="" class="field" name="password_confirmation">
                                    </p>
                                    <div class="invalid-feedback{{ $errors->has('password_confirmation') ? ' d-block' : '' }}">
                                      {{ $errors->first('password_confirmation') }}
                                    </div>
                                </div>

                              </li>
                          </ul>
                          
                            </div> --}}
                        <div class="col-12">
                          <div class="pt-1">
                              <div class="card border-primary">
                                  <div class="card-body">
                                      <div class="container">
                                        <h6 class="mb-1 text-warning font-weight-bold">1. Tên công ty</h6>

                                        <div class="row">
                                            <div class="col-md-4 mb-1">
                                                <label for="full_name">Tên đầy đủ</label>
                                                <input type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" required>

                                                <div class="invalid-feedback{{ $errors->has('full_name') ? ' d-block' : '' }}">
                                                    {{ $errors->first('full_name') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="abbr_name">Tên viết tắt</label>

                                                <input type="text" class="form-control" name="abbr_name" value="{{ old('abbr_name') }}" required>

                                                <div class="invalid-feedback{{ $errors->has('abbr_name') ? ' d-block' : '' }}">
                                                    {{ $errors->first('abbr_name') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="san_pham">Sản phẩm</label>
                                                <input type="text" class="form-control" name="san_pham" value="{{ old('san_pham') }}" required>
                                                <div class="invalid-feedback{{ $errors->has('san_pham') ? ' d-block' : '' }}">
                                                    {{ $errors->first('san_pham') }}
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="text-warning font-weight-bold pt-1">2. Địa chỉ đăng ký kinh doanh</h6>
                                        <div class="row">
                                            <div class="col-md-4 mb-1">
                                                <label for="city">Tỉnh, thành phố</label>
                                                    {!! Form::select('city', $arr_citys, old('city'), ['placeholder' => 'Vui lòng chọn', 'class' => 'form-control', 'id' => 'city_id_signup', 'required']) !!}
                                                <div class="invalid-feedback{{ $errors->has('city') ? ' d-block' : '' }}">
                                                    {{ $errors->first('city') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="district">Quận huyện</label>
                                                <select class="form-control" name="district" value="{{ old('district') }}" required id="district_id_signup">
                                                    <option value="">Vui lòng chọn</option>
                                                </select>
                                                <div class="invalid-feedback{{ $errors->has('district') ? ' d-block' : '' }}">
                                                    {{ $errors->first('district') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="industry_zone">Khu công nghiệp</label>
                                                <input type="text" class="form-control" name="industry_zone" value="{{ old('industry_zone') }}" required>
                                                <div class="invalid-feedback{{ $errors->has('industry_zone') ? ' d-block' : '' }}">
                                                    {{ $errors->first('industry_zone') }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 mb-2">
                                                <label for="tax_code">Mã số thuế</label>
                                                <input type="text" class="form-control" name="tax_code" value="{{ old('tax_code') }}" required>
                                                <div class="invalid-feedback{{ $errors->has('tax_code') ? ' d-block' : '' }}">
                                                    {{ $errors->first('tax_code') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="nationality">Quốc tịch</label>
                                                {!! Form::select('nationality', $arr_nations, old('nationality'), ['placeholder' => 'Vui lòng chọn', 'class' => 'form-control', 'id' => '', 'required']) !!}
                                                <div class="invalid-feedback{{ $errors->has('nationality') ? ' d-block' : '' }}">
                                                    {{ $errors->first('nationality') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="linh_vuc">Lĩnh vực hoạt động</label>
                                                <select class="form-control" name="linh_vuc" value="{{ old('linh_vuc') }}" required>
                                                    <option value="">Vui lòng chọn</option>
                                                    <option value="Sản xuất">Sản xuất</option>
                                                    <option value="Thương mại">Thương mại</option>
                                                    <option value="Dịch vụ">Dịch vụ</option>
                                                </select>
                                                <div class="invalid-feedback{{ $errors->has('linh_vuc') ? ' d-block' : '' }}">
                                                    {{ $errors->first('linh_vuc') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="nganh_cn">Ngành công nghiệp</label>
                                                {!! Form::select('nganh_cn', $arr_nganh_cn, old('nganh_cn'), ['placeholder' => 'Vui lòng chọn', 'class' => 'form-control', 'id' => '', 'required']) !!}
                                                <div class="invalid-feedback{{ $errors->has('nganh_cn') ? ' d-block' : '' }}">
                                                    {{ $errors->first('nganh_cn') }}
                                                </div>
                                            </div>

                                            <div class="col-md-4 mb-1">
                                                <label for="nam_hd">Số năm hoạt động tại VN</label>
                                                {!! Form::select('nam_hd', $arr_nam_hd, old('nam_hd'), ['placeholder' => 'Vui lòng chọn', 'class' => 'form-control', 'id' => '', 'required']) !!}
                                                <div class="invalid-feedback{{ $errors->has('nam_hd') ? ' d-block' : '' }}">
                                                    {{ $errors->first('nam_hd') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="quy_mo">Quy mô nhân sự (người)</label>
                                                {!! Form::select('quy_mo', $arr_quy_mo, old('quy_mo'), ['placeholder' => 'Vui lòng chọn', 'class' => 'form-control', 'id' => '', 'required']) !!}
                                                <div class="invalid-feedback{{ $errors->has('quy_mo') ? ' d-block' : '' }}">
                                                    {{ $errors->first('quy_mo') }}
                                                </div>
                                            </div>
                                        </div>

                                        <h6 class="text-warning font-weight-bold py-1 mb-0">3. Thông tin người liên hệ</h6>
                                        <div class="row">
                                            <div class="col-md-4 mb-1">
                                                <label for="contact_person_name">Họ tên</label>
                                                <input type="text" class="form-control" name="contact_person_name" value="{{ old('contact_person_name') }}" required>
                                                <div class="invalid-feedback{{ $errors->has('contact_person_name') ? ' d-block' : '' }}">
                                                    {{ $errors->first('contact_person_name') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="contact_person_position">Chức vụ</label>
                                                <input type="text" class="form-control" name="contact_person_position" value="{{ old('contact_person_position') }}" >
                                                <div class="invalid-feedback{{ $errors->has('contact_person_position') ? ' d-block' : '' }}">
                                                    {{ $errors->first('contact_person_position') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="contact_person_mobile">Điện thoại</label>
                                                <input type="text" class="form-control" name="contact_person_mobile" value="{{ old('contact_person_mobile') }}" >
                                                <div class="invalid-feedback{{ $errors->has('contact_person_mobile') ? ' d-block' : '' }}">
                                                    {{ $errors->first('contact_person_mobile') }}
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="text-warning font-weight-bold pb-1 mb-0">4. Thông tin tài khoản</h6>
                                        <div class="row">
                                            <div class="col-md-4 mb-1">
                                                <label for="contact_person_name">Email</label>
                                                <input type="text" class="form-control" name="contact_person_name" value="{{ old('contact_person_name') }}" required>
                                                <div class="invalid-feedback{{ $errors->has('contact_person_name') ? ' d-block' : '' }}">
                                                    {{ $errors->first('contact_person_name') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="contact_person_position">Password</label>
                                                <input type="text" class="form-control" name="contact_person_position" value="{{ old('contact_person_position') }}" >
                                                <div class="invalid-feedback{{ $errors->has('contact_person_position') ? ' d-block' : '' }}">
                                                    {{ $errors->first('contact_person_position') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="contact_person_mobile">Confirm Password</label>
                                                <input type="text" class="form-control" name="contact_person_mobile" value="{{ old('contact_person_mobile') }}" >
                                                <div class="invalid-feedback{{ $errors->has('contact_person_mobile') ? ' d-block' : '' }}">
                                                    {{ $errors->first('contact_person_mobile') }}
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn w-25 btn-primary mx-auto mt-2 float-right" name="btn_register"><i class="fa fa-arrow-right"></i>&nbsp;đăng ký</button>
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
