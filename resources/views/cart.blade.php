<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <script src="https://kit.fontawesome.com/c44ecc908b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/frame_user_info.css')}}"/> -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/cart.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/header.css')}}"/>    

    <!-- number spinner -->
    <script>
        $(document).on('click', '.number-spinner button', function () {    
            var btn = $(this),
            oldValue = btn.closest('.number-spinner').find('input').val().trim(),
            newVal = 0;
            
            if (btn.attr('data-dir') == 'up') {
                newVal = parseInt(oldValue) + 1;
            } else {
                if (oldValue > 1) {
                    newVal = parseInt(oldValue) - 1;
                } else {
                    newVal = 1;
                }
            }
            btn.closest('.number-spinner').find('input').val(newVal);
        });
    </script>

</head>

<body>
    <header>
    <div class="container-fluid" style="background: #B4EDFF;">
        <div class="row row-mainnav">
            <nav class="col-md-9 col-sm-6 col-2 mainnav navbar navbar-expand-lg navbar-light bg-light">
                <div style="width: 100%">
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbarNavAltMarkup" style="">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="" >Home</a>
                            <a class="nav-link" href="">Features</a>
                            <a class="nav-link" href="">Pricing</a>
                            <a class="nav-link " href="" >Community</a>
                            <a class="nav-link " href="" >Support</a>
                            <a class="nav-link " href="" >Track order</a>
                        </div>
                    </div>
                </div>
            </nav>



            <div class="col-md-3 col-sm-6 col-10 btnnav">
                
            @if (isset(Auth::user()->email))
                <div class="flex-shrink-0 dropdown">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        <strong>{{Auth::user()->name}}</strong>    
                        <img src="{{asset('public/frontend/img/user/'.Auth::user()->avatar)}}" alt="mdo" width="55" height="55" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Tài khoản</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Đăng xuất</a></li>
                    </ul>
                </div>
            @else 
                <a type="button" id="btnlogin" href="{{ route('showpagelogin') }}">Login</a>
                <a type="button" id="btnregister">Register</a>
            @endif
            </div>

        </div>

        <div class="row pt-4 pb-3" style="position: relative">
            <div class="searchbar logo col-md-2 col-sm-2">
                <img src="{{('public/frontend/img/logo.png')}}">
            </div>

            <div class="searchbar search col-md-8 col-sm-8 col-12"><div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>                           
            </div>

            <div class="searchbar cart col-md-2 col-sm-2">
                 <a class="btn" type="button" href="{{ route('showpagecart') }}">
                    <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                </a> 
            </div>
        </div>             
    </div>
</header>

    <main>
        <div class="container product">
            <div class="container row boxproduct">
                <div class="row" style="margin-bottom: 1%;">
                    <div class="col-10 checkprodcut">
                        <input type="checkbox">
                        <span>Ten shop</span>
                    </div>        
                <div class="col-2 remove"><i class="fas fa-times" aria-hidden="true"></i></div>
            </div>

            <div class="row">
                <div class="col-lg-5 container imgproduct">
                    <div class="main-imgproduct">
                        <img src="{{('public/frontend/img/product.png')}}">
                    </div>
                </div>

                <div class="col-lg-7 container detailproduct">
                    <div class="name-product">
                        Tai nghe Razer Kraken Kitty Chroma Quartz RZ04-02980200-R3M1   
                    </div>

                    <div class="row info-product">
                        <div class="col-md-5 info-rating-product">
                            <div class="small-ratings" style="margin-right: 5px;"> 
                                <i class="fa fa-star rating-color" aria-hidden="true"></i> 
                                <i class="fa fa-star rating-color" aria-hidden="true"></i> 
                                <i class="fa fa-star rating-color" aria-hidden="true"></i> 
                                <i class="fa fa-star-o" aria-hidden="true"></i> 
                                <i class="fa fa-star-o" aria-hidden="true"></i> 
                            </div>
                            <div>
                                <span class="num-ratings">3.0</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 info-review-product">
                            Đánh giá
                            <span class="numreview-product">100</span>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6">
                            Đã bán
                            <span class="numsold-product">100</span>
                        </div>
                    </div>
                    
                    <div class="row price-product">
                        <div class="row">
                            <div class="col-sm-7 discount-price-product">  
                                <span>đ 2.000.000 </span>
                            </div>
                            <div class="col-sm-5 original-price-product">
                                đ
                                <span>4.000.000 </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container discount-percent-product">
                                Giảm
                                <span> 50</span>
                                %
                            </div>
                        </div>
                    </div>
                    
                    <div class="row delivery-product">
                        <b>Vận chuyển: Miễn phí vận chuyển </b>
                        <span>Miễn phí vận chuyển cho đơn hàng trên ₫250.000</span>
                    </div>

                    <div class="row count-quantity-product">                    
                        <div class="container">
                            <div class="row" style="width: 110%;">
                                <div class="col-md-3 col-sm-6 col-6">
                                    Số lượng
                                </div>
                                <div class="col-md-4 col-sm-6 col-6">
                                    <div class="input-group number-spinner"">
                                        <span class="input-group-btn">
                                            <button class="btn" data-dir="dwn"><span class="fa fa-minus" style="font-size: 10px; position: absolute;" aria-hidden="true"></span></button>
                                        </span>
                                        <input type="text" class="form-control text-center" value="1">
                                        <span class="input-group-btn">
                                            <button class="btn" data-dir="up"><span class="fa fa-plus" style="font-size: 10px; position: absolute;" aria-hidden="true"></span></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <span class="num-available-product">10</span>
                                    sản phẩm có sẵn
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>    
        </div>

        <div class="container totalprice">
            <div class="container row boxbill">
                <div class="row voucherline">
                    <div class="col-8">
                        <span>
                            <img src="{{('public/frontend/img/tag-discount.svg')}}" class="icon-voucher"> 
                            Mã voucher 
                        </span>
                    </div>
                    <div class="col-4">
                        <span>Chọn mã</span>
                    </div>
                </div>
                <div class="break-line"> </div>
                <div class="container row bill">
                    <div class="col-lg-3">
                        <input type="checkbox" value="Tất cả">
                        <label>Tất cả</label>  
                        <a class="allremove">Xoá</a>
                    </div>
                    <div class="col-lg-4 billprice">
                        <span>Tổng thanh toán: </span>
                        <span class="totalbill">đ0</span>
                    </div>
                    <div class="col-lg-5">
                        <div class="row button-buying-product">
                        <div class="col-md-6 col-sm-12 btn btn-return">Quay lại</div>
                        <div class="col-md-6 col-sm-12 btn btn-buynow">Mua ngay</div>
                    </div>
                </div>
            </div>
        </div>
   
    </main>

</body>
</html>     