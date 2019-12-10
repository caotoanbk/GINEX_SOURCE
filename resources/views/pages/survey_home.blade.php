<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Salary Survey</title>

        <script src="https://kit.fontawesome.com/26fdcedf55.js"></script>
        
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/survey-home.css">

        <style>
            .table td{
                padding: .3rem;
            }
            input.no-border{
                border: .2px dashed #999;
                width: 100%;
                outline: none;
                padding-left:.3rem;
            }
            nav a.link{
                font-size: 100%;
            }
        </style>

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-light bg-light fixed-top navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/"><i class="fa fa-dollar-sign"></i>alary Survey</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation" style="outline: none;"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="nav">
                    <ul class="navbar-nav ml-auto">
                        {{-- @if(!\Auth::check()) --}}
                        <li class="nav-item"><a href="/" class="nav-link menu-item">Trang chủ</a></li>
                        <li class="nav-item"><a href="/register" class="nav-link menu-item">Đăng ký</a></li>
                        <li class="nav-item ml-2"><a href="/login" class="btn btn-outline-primary">Đăng nhập</a></li>
                      {{-- @else
                        <li class="nav-item"><a href="/phuc-loi" class="nav-link menu-item">Chế độ phúc lợi</a></li>
                        <li class="nav-item"><a href="/thong-tin-luong" class="nav-link menu-item">Chế độ lương</a></li>
                        <li class="nav-item" style="position: ">
                          <a class="link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600" style="font-size: 1em;">Xin chào Ginex</span>
                            <img class="img-profile rounded-circle" style="max-height: 25px;" src="https://source.unsplash.com/fpZZEV0uQwA/60x60">
                          </a>
                          <!-- Dropdown - User Information -->
                          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#profile">
                              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                              Thông tin công ty
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                              Lịch sử khảo sát
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout">
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                              Đăng xuất
                            </a>
                          </div>
                      </li>
                      @endif --}}
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Masthead -->
        <header class="masthead text-white text-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h2 class="text-warning animated slideInLeft" id="welcomeHeading">Mức chi trả tiền lương của các doanh nghiệp<br> đang ở đâu trên thị trường &amp; khu vực ??? </h2>
                    </div>
                </div>
            </div>
        </header>

        <!-- Icons Grid -->
        <section id="benefit" class="benefit bg-light text-center">
            <div class="container-fluid">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class=""><img src="./img/idea.png" alt="" class=""></div>
                    <h2 style="max-width: 500px;" class="text-secondary d-inline-block m-0 p-0 text-left pl-3 col-8 col-md-5">Lợi ích của việc tham gia 
                        <br>khảo sát tiền lương 2019 !!!</h2>
                </div>
                <br>
                <!-- Carousel -->
                <div class="bd-example showcase">
                    <div id="benefitCarousel" class="carousel slide" style="border-radius: 0rem; border: 1px solid transparent; overflow: hidden;" data-ride="carousel">
                        <div class="carousel-inner text-left">
                            <div class="carousel-item active">
                                <div class="row no-gutters">

                                    <div class="col-lg-6 order-lg-2 showcase-img" style="background-image: url('img/benefit/01.png'); overflow: hidden;"></div>
                                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                                        <h5 class="pb-2"">Tham gia khảo sát tiền lương</h5>
                                        <p class="mb-0 text-justify"><i class="fas fa-hand-point-right text-info"></i> Giúp doanh nghiệp/cá nhân có được bức tranh tổng thể thị trường lao động trên cơ sở số liệu khảo sát có được từ nhiều doanh nghiệp trong &amp; ngoài nước cũng như nhiều cá nhân tham gia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row no-gutters">

                                    <div class="col-lg-6 order-lg-2 showcase-img" style="background-image: url('img/benefit/02.png'); outline: none;"></div>
                                    <div class="col-lg-6 order-lg-1 my-auto showcase-text" style="outline: none;">
                                        <h5 class="pb-2">Tham gia khảo sát tiền lương</h5>
                                        <p class="mb-0 text-justify"><i class="fas fa-hand-point-right text-info"></i> Giúp doanh nghiệp nhận diện mức chi trả, ra quyết định chính xác về chính sách lương bổng &amp; đãi ngộ nhằm giữ chân &amp; thu hút nhân tài.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row no-gutters">

                                    <div class="col-lg-6 order-lg-2 showcase-img" style="background-image: url('img/benefit/03.jpg');"></div>
                                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                                        <h5 class="pb-2">Tham gia khảo sát tiền lương</h5>
                                        <p class="mb-0 text-justify">
                                            <i class="fas fa-hand-point-right text-info"></i> Giúp cá nhân ra quyết định chính xác về việc đi hay ở lại với doanh nghiệp nếu vì lý do tiền lương.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--- end crousel -->

        </section>
        <!-- section demo -->
        <section class="bg-white pt-5" id="demo" tabindex="-1">
            <div class="special_description_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-heading">
                                <h2 class="text-secondary">Báo cáo kết quả</h2>
                            </div>
                            <p>Biểu đồ minh họa số liệu được tổng hợp</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 my-4 text-center image-hover wow fadeInDown show-image" style="visibility: visible; animation-name: fadeInDown;">
                            <div class="bg-black">
                                <img class="border-grey w-100 h-auto" src="img/demo/5.jpg" alt="Apps Image">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 mt-4 text-center image-hover wow fadeInDown show-image" style="visibility: visible; animation-name: fadeInDown;">
                            <div class="bg-black">
                                <img class="border-grey w-100 h-auto" src="img/demo/3.jpg" alt="Apps Image">
                            </div>
                        </div>                        
                        <div class="col-md-3 col-sm-6 col-12 mt-4 text-center image-hover wow fadeInDown show-image" style="visibility: visible; animation-name: fadeInDown;">
                            <div class="bg-black">
                                <img class="border-grey w-100 h-auto" src="img/demo/1.jpg" alt="Apps Image">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 mt-4 text-center image-hover wow fadeInDown show-image" style="visibility: visible; animation-name: fadeInDown;">
                            <div class="bg-black">
                                <img class="border-grey w-100 h-auto" src="img/demo/6.jpg" alt="Apps Image">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end section demo -->
        <!-- section pricing -->
        <section class="pricing bg-light pt-4" id="package" style="padding-bottom: 4rem;">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <h2 class="text-secondary text-center pb-4">Các gói khảo sát</h2>
                    </div>
                    <div class="col-md-3 col-sm-4 col-12">
                        <div class="pricingTable">
                            <div class="pricingTable-header">
                                <span class="heading">
                                    <h3>Cơ bản</h3>
                                </span>
                                <span class="price-value"><span class="price">Giá</span><span class="mo">5<sup>tr</sup>/năm</span></span>
                            </div>
                            <div class="pricingContent">
                                <ul>
                                    <li>Thông tin lương</li>
                                    <li>Tỷ lệ tăng lương hàng năm</li>
                                    <li>&nbsp;</li>
                                </ul>
                            </div>
                            <div class="pricingTable-sign-up">
                                <a href="#" class="btn btn-block btn-default">Mua ngay</a>
                            </div>
                        </div>
                    </div>                
                    <div class="col-md-3 col-sm-4 col-12">
                        <div class="pricingTable blue">
                            <div class="pricingTable-header">
                                <span class="heading">
                                    <h3>Nâng cao</h3>
                                </span>
                                <span class="price-value"><span class="price">Giá</span><span class="mo">12.5<sup>tr</sup>/năm</span></span>
                            </div>
                            <div class="pricingContent">
                                <ul>
                                    <li>Năng suất lao động</li>
                                    <li>Bảo hiểm nhân thọ</li>
                                    <li>Các khoản phúc lợi khác</li>
                                </ul>
                            </div>
                            <div class="pricingTable-sign-up">
                                <a href="#" class="btn btn-block btn-default">Mua ngay</a>
                            </div>
                        </div>
                    </div>                
                    <div class="col-md-3 col-sm-4 col-12">
                        <div class="pricingTable yellow">
                            <div class="pricingTable-header">
                                <span class="heading">
                                    <h3>Full</h3>
                                </span>
                                <span class="price-value"><span class="price">Giá</span><span class="mo">15<sup>tr</sup>/năm</span></span>
                            </div>
                            <div class="pricingContent">
                                <ul>
                                    <li>Thông tin lương</li>
                                    <li>Chi phí lao động</li>
                                    <li>Tỷ lệ nghỉ việc</li>
                                </ul>
                            </div>
                            <div class="pricingTable-sign-up">
                                <a href="#" class="btn btn-block btn-default">Mua ngay</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end section pricing -->
        <!-- ***** Footer ***** -->
        <footer class="p-50">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <h5 class="mb-4 font-weight-bold text-white footer-block-title"><span>Về chúng tôi</span></h5>
                        <ul class="m-0">
                            <li><h6 class="text-white mb-0">CÔNG TY CỔ PHẦN ĐẦU TƯ GINEX</h6></li>
                            <li><i class="fas fa-check"></i>&nbsp;Địa chỉ: 16/562 Nguyễn Văn Linh, Q. Lê Chân, Hải Phòng</li>
                            <li><i class="fas fa-check"></i>&nbsp;MST: 0201641412</li>
                            <li><i class="fas fa-check"></i>&nbsp;Điện thoại: 02253.785.886 </li>
                            <li><i class="fas fa-check"></i>&nbsp;Email:  khaosatnhansu@ginex.com.vn</li>
                            <li><i class="fas fa-check"></i>&nbsp;Website: <a href="www.ginex.com.vn" target="_blank" class="text-info">www.ginex.com.vn</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-12 p-relative">
                        <h5 class="mb-4 font-weight-bold text-white footer-block-title"><span>Mục tiêu của chúng tôi</span></h5>
                        <div>
                            <p class="lead font-italic mission">&quot;&nbsp;Hỗ trợ các nhà quản trị nhân sự & lãnh đạo các doanh nghiệp có được cơ sở dữ liệu đáng tin cậy về thị trường lao động để hoạch định chính sách nhân sự một cách phù hợp nhằm giữ chân, thu hút & phát triển nhân tài cho tổ chức của mình&nbsp;&quot;</p>

                        </div>
                        <small class="text-warning" style="position: absolute; bottom: 4px; right: 0px;">Copyright &copy;2019 by Ginex. All rights reserved.</small>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ***** End footer ***** -->
        
        <script src="/js/app.js"></script>
        <script>
            $('#benefitCarousel').carousel({
                interval: 5000,
                pause: false
            });
        </script>
    </body>

</html>
