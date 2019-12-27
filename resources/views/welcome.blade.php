<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Ginex HR Data &AMP; Survey</title>
        <!-- Font awesome -->
        <script src="https://kit.fontawesome.com/26fdcedf55.js"></script>
        <link rel="shortcut icon" type="image/png" href="/img/fav-icon.png"/>
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/landing-page.css">

    </head>
    <body>
        <!--    ***** Header Area start *****-->
        <header class="header_area fixed-top">
            <div class="container-fluid" style="width: 100% !important;">
                <div class="row">
                    <!-- Menu Area Start -->
                    <div class="col-12">
                        <div class="menu_area">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <!-- Logo -->
                                <img src="/img/ginex-survey-hr-data.svg" class="img-fluid logo-width">
                                <button class="navbar-toggler" style="outline: none;" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                                <!-- Menu Area -->
                                <div class="collapse navbar-collapse" id="ca-navbar">
                                    <ul class="navbar-nav ml-auto" id="nav">
                                        <li class="nav-item"><a href="#home" class="nav-link menu-item">Trang chủ</a></li>
                                        <li class="nav-item"><a href="#services" class="nav-link menu-item">Dịch vụ</a></li>
                                        <li class="nav-item"><a href="#news" class="nav-link menu-item">Tin tức</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->
        <!-- ***** Wellcome Area Start ***** --->
        <section class="wellcome_area clearfix typewriter" id="home">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-md mt-5">
                        <div class="wellcome-heading">
                            <h2 class="letter-spacing">Bộ phận Số liệu &amp; Khảo sát Nhân sự</h2>
                            <h3>CÔNG TY CỔ PHẦN ĐẦU TƯ GINEX</h3>
                        </div>
                        {{-- <a href="/salary-survey" class="btn btn-info" style="width: 23% !important;"><i class="fas fa-arrow-right"></i> Khảo sát lương</a> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Wellcome Area End ***** --->
        <!-- ***** Services ***** -->
        <section class="bg-grey" id="services">
            <div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-heading">
                                <h3 class="py-2">Dịch vụ của chúng tôi</h3>
                            </div>
                        </div>
                        <div class="col-md-8 col-12 image-hover">
                            <div class="row">
                                <div class="col-md-6 col-12 mb-4">
                                    <div class="card border-0 box-shadow-0 h-100">
                                        <div class="card-content">
                                            <a href="/salary-survey"><img src="./img/bg-img/2019-salary-survey.jpg" alt="" class="card-img-top img-fluid" /></a>
                                            <div class="card-body">
                                                <h5 class="font-weight-normal">Khảo sát lương 2019</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <div class="card border-0 box-shadow-0 h-100">
                                        <div class="card-content">
                                            <img src="./img/bg-img/workers.jpg" alt="" class="card-img-top img-fluid" style="border-bottom: 1px solid rgba(51,102,255,0.1)">
                                            <div class="card-body">
                                                <h5 class="font-weight-normal">Khảo sát nhu cầu người lao động</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mb-4 mb-md-0">
                                    <div class="card border-0 box-shadow-0 h-100">
                                        <div class="card-content">
                                            <a href="http://gjobs.vn"><img src="./img/bg-img/jobs.jpg" alt="" class="card-img-top img-fluid" /></a>
                                            <div class="card-body">
                                                <h5 class="font-weight-normal">Ứng viên gửi CV tìm cơ hội việc làm</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mb-4 mb-md-0">
                                    <div class="card border-0 box-shadow-0 h-100">
                                        <div class="card-content">
                                            <a href="#"><img src="./img/bg-img/training.png" alt="" class="card-img-top img-fluid" style="border-bottom: 1px solid rgba(51,102,255,0.1)" /></a>
                                            <div class="card-body">
                                                <h5 class="font-weight-normal">Khảo sát nhu cầu đào tạo &amp; hội thảo</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 text-white">
                            <div class="card h-100">
                                <div class="card-content" style="min-height: 400px;">
                                    <div class="card-img-overlay overlay-blue d-flex align-items-center p-4 justify-content-center">
                                        <div>
                                            <a href="#" class="h4 text-white">Thông tin các khóa đào tạo 2019</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** End Services ***** -->
        <!-- ***** News ***** -->
        <section class="bg-grey p-150 pb-0" id="news">
            <div>
                <img src="img/bg-img/bg-3.png" alt="" class="position-absolute opacity-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-12 mb-4 mb-md-0 h-100" style="">
                            <div class="card border-0">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="block-title"><span>Tin tức &amp; sự kiện</span></h4>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            Lorem ipsum dolor sit amet consectet
                                        </li>
                                        <li class="list-group-item">
                                            Lorem ipsum dolor sit amet consectet
                                        </li>
                                        <li class="list-group-item">
                                            Lorem ipsum dolor sit amet consectet
                                        </li>
                                        <li class="list-group-item">
                                            Lorem ipsum dolor sit amet consectet
                                        </li>
                                        <li class="list-group-item">
                                            Lorem ipsum dolor sit amet consectet
                                        </li>

                                    </ul>
                                    <div class="card-body text-center">
                                        <a href="#" class="btn submit-btn small-btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-4 mb-md-0 h-100" style="">
                            <div class="card border-0">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="block-title"><span>Tuyển dụng</span></h4>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            Cras justo odio facilisis in cónectetur
                                        </li>
                                        <li class="list-group-item">
                                            Cras justo odio facilisis in cónectetur
                                        </li>
                                        <li class="list-group-item">
                                            Cras justo odio facilisis in cónectetur
                                        </li>
                                        <li class="list-group-item">
                                            Cras justo odio facilisis in cónectetur
                                        </li>
                                        <li class="list-group-item">
                                            Cras justo odio facilisis in cónectetur
                                        </li>

                                    </ul>
                                    <div class="card-body text-center">
                                        <a href="#" class="btn submit-btn small-btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-4 mb-md-0 h-100" style="">
                            <div class="card border-0">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="block-title"><span>Cộng đồng nhân sự</span></h4>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            Dapibus ac facilisis in porta ac cónec
                                        </li> 
                                        <li class="list-group-item">
                                            Dapibus ac facilisis in porta ac cónec
                                        </li>
                                        <li class="list-group-item">
                                            Dapibus ac facilisis in porta ac cónec
                                        </li> 
                                        <li class="list-group-item">
                                            Dapibus ac facilisis in porta ac cónec
                                        </li> 
                                        <li class="list-group-item">
                                            Dapibus ac facilisis in porta ac cónec
                                        </li>
                                    </ul>
                                    <div class="card-body text-center">
                                        <a href="#" class="btn submit-btn small-btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** End News ***** -->
        <!-- ***** Section partner ***** -->
        <section class="bg-grey p-150 text-center pt-0">
            <div class="container-fluid">
                <div class="row gallery">
                    <div class="col-12 text-center">
                        <div class="section-heading">
                            <h3 class="py-2">Đối tác của chúng tôi</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 text-center mb-lg-0 mb-sm-4 image-hover">
                        <img src="./img/partner/1.png" alt="" class="img-fluid img-thumbnail">
                    </div>                    
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 text-center mb-lg-0 mb-sm-4 image-hover">
                        <img src="./img/partner/2.png" alt="" class="img-fluid img-thumbnail">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 text-center mb-lg-0 mb-sm-4 image-hover">
                        <img src="./img/partner/3.jpg" alt="" class="img-fluid img-thumbnail">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 text-center mb-lg-0 mb-sm-4 image-hover">
                        <img src="./img/partner/4.png" alt="" class="img-fluid img-thumbnail">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 text-center mb-lg-0 mb-sm-4 image-hover">
                        <img src="./img/partner/5.jpg" alt="" class="img-fluid img-thumbnail">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 text-center mb-lg-0 mb-sm-4 image-hover">
                        <img src="./img/partner/6.jpg" alt="" class="img-fluid img-thumbnail">
                    </div>
                </div>
            </div>
        </section>

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
                            <p class="lead font-italc mission">&quot;&nbsp;Hỗ trợ các nhà quản trị nhân sự & lãnh đạo các doanh nghiệp có được cơ sở dữ liệu đáng tin cậy về thị trường lao động để hoạch định chính sách nhân sự một cách phù hợp nhằm giữ chân, thu hút & phát triển nhân tài cho tổ chức của mình!&quot;</p>
                        </div>
                        <small class="text-warning float-right" style="position: absolute; bottom: 4px; right: 0px;">Copyright &copy;2019 by Ginex. All rights reserved.</small>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Modal -->
        <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="exampleModalCenterTitle">Khảo sát lương 2020</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3">
                            <p></p>
                            <p class="text-center">
                            <i class="fas fa-bell fa-4x text-danger"></i>
                            </p>
                        </div>
                
                        <div class="col-9">
                            <p>Xin lỗi, chúng tôi đang phát triển chương trình Khảo sát tiền lương và các nội dung liên quan, website chưa được hoàn thiện, xin lỗi bạn vì sự bất tiện!</p>
                            
                        </div>
                        <p class="px-3">
                        <small class="font-italic text-danger"><i class="fas fa-haykal"></i>&nbsp;Đây là bản giao diện để ACE tham khảo. Chúng tôi chính thức triển khai dịch vụ Khảo sát tiền lương 2020 kể từ ngày 1/1/2020</small>
                        </p>
                    </div>     
                </div>
                </div>
            </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>