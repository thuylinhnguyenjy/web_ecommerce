<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voucher</title>
    <script src="https://kit.fontawesome.com/c44ecc908b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/frame_user_info.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/total_cart.css')}}"/>
</head>

<body>
    @extends('account')
    @section('myaccount')
            <div class="col-lg-9 col-md-12 content-choice-details" style="background-color: #B4EDFF">
                <div class="content">
                    <div class="title-choice-details">
                            <h3>Tất cả</h3>
                    </div>

                    <div class="container-user-details" style="background-color: #B4EDFF;">
                        <div class="container-cart">
                            <div class="row cart-title">
                                   <div class="col-5"> <div class=" text-ten"> <i class="fas fa-store" aria-hidden="true"></i> Tên shop </div></div>
                                    <div class="col-7"><div class="text-tinhtrang"> <i class="fas fa-truck" aria-hidden="true"></i> Chờ lấy hàng </div></div>
                            </div>
                            <div class="break-line"> </div>
                            <div class="cart-detail">
                                <div class="row">
                                    <div class="col-md-3 col-sm-4 voucher-img">
                                         <img src="asset/img/product.png" width="100%" class="col-sm-2 img-sanpham">
                                    </div>
                                    <div class="col-md-9 col-sm-8 voucher-info">
                                        <div class="text-tensp"> ACOME AW01 Tai Nghe Nhét Tai </div>
                                        <div class="text-loaisp"> Tai nghe </div>
                                        <div class="text-sl"> x1 </div>
                                        <div class="text-dongia"> ₫5500 </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>

                    <div class="container-user-details">
                        <div class="container-cart" style="background: #FEACB8DB">
                            <div class="text-tongtien"> Tổng số tiền: 100000</div>
                            <div class="row linedanhgia">
                           <div class="col-sm-4 col-5 text-ttdanhgia"> Trạng thái đánh giá </div>
                            <div class="col-sm-8 col-7">
                                <div class="row" style="">
                                    <div class="col-md-4"><button class="btn-mualai"> Mua lại </button></div>
                                    <div class="col-md-4"><button class="btn-lienhe"> Liên hệ shop </button></div>
                                    <div class="col-md-4"><button class="btn-chitiet"> Chi tiết </button></div>
                                </div>
                            </div>
                        </div>
                          </div> 
                    </div>
                </div>
            </div> 
    @endsection           
</body>
</html>