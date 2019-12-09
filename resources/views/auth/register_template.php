{{-- @if(!\Auth::check())
          <?php
            // $arr_nations = ['Việt Nam' => 'Việt Nam', 'Hàn Quốc' => 'Hàn Quốc', 'Nhật Bản' => 'Nhật Bản', 'Đài Loan' => 'Đài Loan', 'Trung Quốc' => 'Trung Quốc', 'Singapore' => 'Singapore', 'Malaysia' => 'Malaysia'];
            // $arr_citys = \DB::table('city')->orderBy('name', 'asc')->pluck('name', 'id');
                // $arr_nganh_cn = array();
                // $json = json_decode(file_get_contents('http://salary-survey.ginex.com.vn/json/nganh_cn.json'));
                // foreach ($json as $value) {
                //         $arr_nganh_cn[$value->vi] = $value->vi;
                // }
                // $arr_nam_hd = ['Dưới 1 năm' => 'Dưới 1 năm', 'Từ 1 đến dưới 3 năm' => 'Từ 1 đến dưới 3 năm', 'Từ 3 đến dưới 5 năm' => 'Từ 3 đến dưới 5 năm', 'Từ 5 đến dưới 10 năm' => 'Từ 5 đến dưới 10 năm', 'Từ 10 năm đến dưới 15 năm' => 'Từ 10 năm đến dưới 15 năm', 'Từ 15 năm đến dưới 20 năm' => 'Từ 15 năm đến dưới 20 năm', 'Trên 20 năm' => 'Trên 20 năm'];
                // $arr_quy_mo = ["Dưới 10 người" => "Dưới 10 người", "Từ 10 đến dưới 20 người" => "Từ 10 đến dưới 20 người", "Từ 20 đến dưới 30 người" => "Từ 20 đến dưới 30 người", "Từ 30 đến dưới 50 người" => "Từ 30 đến dưới 50 người", "Từ 50 đến dưới 100 người" => "Từ 50 đến dưới 100 người", "Từ 100 đến dưới 200 người" => "Từ 100 đến dưới 200 người", "Từ 200 đến dưới 300 người" => "Từ 200 đến dưới 300 người", "Từ 300 đến dưới 500 người" => "Từ 300 đến dưới 500 người", "Từ 500 đến dưới 1000 người" => "Từ 500 đến dưới 1000 người", "Từ 1000 đến dưới 1500 người" => "Từ 1000 đến dưới 1500 người", "Từ 1500 đến dưới 2000 người" => "Từ 1500 đến dưới 2000 người", "Từ 2000 đến dưới 3000 người" => "Từ 2000 đến dưới 3000 người", "Từ 3000 đến dưới 5000 người" => "Từ 3000 đến dưới 5000 người", "Trên 5000 người" => "Trên 5000 người"];
              ?>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="width: 200px; margin: 0px auto;">Đăng nhập</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                       <form class="form-signin" style="background-color: white;" method="post" action="/login" name="form_signin" id="form_signin">
                          {{csrf_field()}}
                          <label for="inputEmail" class="sr-only">Email address</label>
                          <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address"  autofocus>
                          <label for="inputPassword" class="sr-only">Password</label>
                          <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" >
                          <div class="checkbox mb-3">
                            <label>
                              <input type="checkbox" name="remember" id="remember"> Remember me
                            </label>
                          </div>
                          <button class="btn btn-primary btn-block" type="submit" name="btn_signin" id="btn_signin">Sign in</button>
                          <p class="mt-3 mb-1 text-muted">&copy; Ginex 2019</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
         <!-- User Register Modal -->
        <div class="modal fade user-register-modal py-3">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5>Thông tin tài khoản</h5>
                                    <ul class="list-group pt-3">
                                        <li class="list-group-item">
                                            Email đăng nhập<br>
                                            <input type="text" class="w-100 field">
                                        </li>
                                        <li class="list-group-item">
                                            Mật khẩu<br>
                                            <input type="text" class="w-100 field">
                                        </li>
                                        <li class="list-group-item">
                                            Xác nhận mật khẩu<br>
                                            <input type="text" class="w-100 field">
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-8">
                                    <h5>Thông tin cá nhân</h5>
                                    <div class="pt-3">
                                        <div class="card border-secondary">
                                            <div class="card-body">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label for="">Họ tên</label>
                                                            <input type="text" class="field">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="">Chức vụ</label>
                                                            <input type="text" class="field">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="">Địa chỉ</label>
                                                            <input type="text" class="field">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="">Số điện thoại</label>
                                                            <input type="text" class="field">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <button class="btn btn-block btn-primary mt-auto">Đăng ký</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- company register modal -->
        <div class="modal fade company-register-modal py-3" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-body">
                  		<form method="post" action="/register" name="form_register" id="form_register" class="ticksy-form">
                      {{ csrf_field() }}
                  		<h5 class="text-center text-warning font-weight-bold">ĐĂNG KÝ THAM GIA KHẢO SÁT</h5>
                  		<hr>
                    	<div class="row">
                    		<div class="col-md-3 col-12">
                    			<h5>Thông tin tài khoản</h5>
                          <ul class="list-group pt-3">
                              <li class="list-group-item">
                              	<label for="email">Email đăng nhập</label>
                                  <p>
	                                    <input type="email" value="{{ old('email') }}" class="field" name="email" required>
	                                    <span class="required"><i class="fa fa-asterisk"></i></span>
	                                </p>
	                                <div class="invalid-feedback{{ $errors->has('email') ? ' d-block' : '' }}">
	                                    {{ $errors->first('email') }}
	                                </div>
                              </li>
                              <li class="list-group-item">
	                              	<label for="password">Mật khẩu</label>
                                  <p>
                                      <input type="password" value="" class="field" name="password" required>
                                      <span class="required"><i class="fa fa-asterisk"></i></span>
                                  </p>
                                  <div class="invalid-feedback{{ $errors->has('password') ? ' d-block' : '' }}">
                                      {{ $errors->first('password') }}
                                  </div>
                              </li>
                              <li class="list-group-item">
                                  <label for="password">Xác nhận mật khẩu</label>
                                  <input type="password" value="" class="field" name="password_confirmation">
                                  <div class="invalid-feedback{{ $errors->has('password_confirmation') ? ' d-block' : '' }}">
                                      {{ $errors->first('password_confirmation') }}
                                  </div>
                              </li>
                          </ul>
                          <br>
                          <button class="btn btn-block btn-primary mt-auto" name="btn_register"><i class="fa fa-arrow-right"></i>&nbsp;đăng ký</button>
                    		</div>
                        <div class="col-md-9 col-12">
                          <h5>Thông tin công ty</h5>
                          <div class="pt-3">
                              <div class="card border-secondary">
                                  <div class="card-body">
                                      <div class="container">
                                      	<h6 class="mb-1">Tên công ty</h6>

                                        <div class="row">
                                            <div class="col-md-4 mb-1">
                                                <label for="full_name">Tên đầy đủ</label>
                                                <p>
                                                    <input type="text" class="field" name="full_name" value="{{ old('full_name') }}" required>
                                                    <span class="required"><i class="fa fa-asterisk"></i></span>
                                                </p>
                                                <div class="invalid-feedback{{ $errors->has('full_name') ? ' d-block' : '' }}">
                                                    {{ $errors->first('full_name') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="abbr_name">Tên viết tắt</label>
                                                <p>
                                                    <input type="text" class="field" name="abbr_name" value="{{ old('abbr_name') }}" required>
                                                    <span class="required"><i class="fa fa-asterisk"></i></span>
                                                </p>
                                                <div class="invalid-feedback{{ $errors->has('abbr_name') ? ' d-block' : '' }}">
                                                    {{ $errors->first('abbr_name') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="san_pham">Sản phẩm</label>
                                                <p>
                                                    <input type="text" class="field" name="san_pham" value="{{ old('san_pham') }}" required>
                                                    <span class="required"><i class="fa fa-asterisk"></i></span>
                                                </p>
                                                <div class="invalid-feedback{{ $errors->has('san_pham') ? ' d-block' : '' }}">
                                                    {{ $errors->first('san_pham') }}
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-3">
                                        <h6 class="py-1">Địa chỉ đăng ký kinh doanh</h6>
                                        <div class="row">
                                            <div class="col-md-4 mb-1">
                                                <label for="city">Thành phố hoặc tỉnh</label>
                                                <p>
                                                    {!! Form::select('city', $arr_citys, old('city'), ['placeholder' => 'Chọn...', 'class' => 'field', 'id' => 'city_id_signup', 'required']) !!}
                                                    <span class="required"><i class="fa fa-asterisk"></i></span>
                                                </p>
                                                <div class="invalid-feedback{{ $errors->has('city') ? ' d-block' : '' }}">
                                                    {{ $errors->first('city') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="district">Quận huyện</label>
                                                <p>
                                                    <select class="field" name="district" value="{{ old('district') }}" required id="district_id_signup">
                                                        <option value="">Chọn...</option>
                                                    </select>
                                                    <span class="required"><i class="fa fa-asterisk"></i></span>
                                                </p>
                                                <div class="invalid-feedback{{ $errors->has('district') ? ' d-block' : '' }}">
                                                    {{ $errors->first('district') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="industry_zone">Khu công nghiệp</label>
                                                <input type="text" class="field" name="industry_zone" value="{{ old('industry_zone') }}" required>
                                                <div class="invalid-feedback{{ $errors->has('industry_zone') ? ' d-block' : '' }}">
                                                    {{ $errors->first('industry_zone') }}
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-3">

                                        <div class="row">
                                            <div class="col-md-4 mb-2">
                                                <label for="tax_code">Mã số thuế</label>
                                                <p>
                                                    <input type="text" class="field" name="tax_code" value="{{ old('tax_code') }}" required>
                                                    <span class="required"><i class="fa fa-asterisk"></i></span>
                                                </p>
                                                <div class="invalid-feedback{{ $errors->has('tax_code') ? ' d-block' : '' }}">
                                                    {{ $errors->first('tax_code') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="nationality">Quốc tịch</label>
                                                <p>
                                                    {!! Form::select('nationality', $arr_nations, old('nationality'), ['placeholder' => 'Chọn...', 'class' => 'field', 'id' => '', 'required']) !!}
                                                    <span class="required"><i class="fa fa-asterisk"></i></span>
                                                </p>
                                                <div class="invalid-feedback{{ $errors->has('nationality') ? ' d-block' : '' }}">
                                                    {{ $errors->first('nationality') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="linh_vuc">Lĩnh vực hoạt động</label>
                                                <p>
                                                    <select class="form-control" name="linh_vuc" value="{{ old('linh_vuc') }}" required>
                                                        <option value="">Chọn...</option>
                                                        <option value="Sản xuất">Sản xuất</option>
                                                        <option value="Thương mại">Thương mại</option>
                                                        <option value="Dịch vụ">Dịch vụ</option>
                                                    </select>
                                                    <span class="required"><i class="fa fa-asterisk"></i></span>
                                                </p>
                                                <div class="invalid-feedback{{ $errors->has('linh_vuc') ? ' d-block' : '' }}">
                                                    {{ $errors->first('linh_vuc') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="nganh_cn">Ngành công nghiệp</label>
                                                <p>
                                                    {!! Form::select('nganh_cn', $arr_nganh_cn, old('nganh_cn'), ['placeholder' => 'Chọn...', 'class' => 'field', 'id' => '', 'required']) !!}
                                                    <span class="required"><i class="fa fa-asterisk"></i></span>
                                                </p>
                                                <div class="invalid-feedback{{ $errors->has('nganh_cn') ? ' d-block' : '' }}">
                                                    {{ $errors->first('nganh_cn') }}
                                                </div>
                                            </div>

                                            <div class="col-md-4 mb-1">
                                                <label for="nam_hd">Số năm HĐ tại VN</label>
                                                <p>
                                                    {!! Form::select('nam_hd', $arr_nam_hd, old('nam_hd'), ['placeholder' => 'Chọn...', 'class' => 'field', 'id' => '', 'required']) !!}
                                                    <span class="required"><i class="fa fa-asterisk"></i></span>
                                                </p>
                                                <div class="invalid-feedback{{ $errors->has('nam_hd') ? ' d-block' : '' }}">
                                                    {{ $errors->first('nam_hd') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="quy_mo">Quy mô NS (người)</label>
                                                <p>
                                                    {!! Form::select('quy_mo', $arr_quy_mo, old('quy_mo'), ['placeholder' => 'Chọn...', 'class' => 'field', 'id' => '', 'required']) !!}
                                                    <span class="required"><i class="fa fa-asterisk"></i></span>
                                                </p>
                                                <div class="invalid-feedback{{ $errors->has('quy_mo') ? ' d-block' : '' }}">
                                                    {{ $errors->first('quy_mo') }}
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-3">

                                        <h6 class="mb-1">Thông tin người liên hệ</h6>
                                        <div class="row">
                                            <div class="col-md-3 mb-1">
                                                <label for="contact_person_name">Họ tên</label>
                                                <input type="text" class="field" name="contact_person_name" value="{{ old('contact_person_name') }}" required>
                                                <div class="invalid-feedback{{ $errors->has('contact_person_name') ? ' d-block' : '' }}">
                                                    {{ $errors->first('contact_person_name') }}
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-1">
                                                <label for="contact_person_position">Chức vụ</label>
                                                <input type="text" class="field" name="contact_person_position" value="{{ old('contact_person_position') }}" >
                                                <div class="invalid-feedback{{ $errors->has('contact_person_position') ? ' d-block' : '' }}">
                                                    {{ $errors->first('contact_person_position') }}
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-1">
                                                <label for="contact_person_mobile">Điện thoại</label>
                                                <input type="text" class="field" name="contact_person_mobile" value="{{ old('contact_person_mobile') }}" >
                                                <div class="invalid-feedback{{ $errors->has('contact_person_mobile') ? ' d-block' : '' }}">
                                                    {{ $errors->first('contact_person_mobile') }}
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-1">
                                                <label for="contact_person_email">Email</label>
                                                <input type="text" class="form-control" name="contact_person_email" value="{{ old('contact_person_email') }}" >
                                                <div class="invalid-feedback{{ $errors->has('contact_person_email') ? ' d-block' : '' }}">
                                                    {{ $errors->first('contact_person_email') }}
                                                </div>
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
                </div>
            </div>
        </div>
        @endif
        --}}
        