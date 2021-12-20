<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <script src="https://kit.fontawesome.com/c44ecc908b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/buyingpage.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/header.css')}}"/>   
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/mainfont.css')}}"/>  

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
    <div class="container" style="background: #B4EDFF;">
        <div class="row row-mainnav">
            <nav class="col-md-9 col-sm-6 col-2 mainnav navbar navbar-expand-lg navbar-light bg-light">
                <div style="width: 100%">
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbarNavAltMarkup" style="">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            <a class="nav-link" href="#">Features</a>
                            <a class="nav-link" href="#">Pricing</a>
                            <a class="nav-link ">Community</a>
                            <a class="nav-link ">Support</a>
                            <a class="nav-link ">Track order</a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="col-md-3 col-sm-6 col-10 btnnav">
                <button type="button" id="btnlogin">Login</button>
                <button type="button" id="btnregister">Register</button>
            </div>
        </div>

        <div class="row pt-4 pb-3" style="position: relative">
            <div class="searchbar logo col-md-2 col-sm-2">
                <img src="{{asset('public/frontend/img/product/logo.png')}}">
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
                 <button class="btn" type="button">
                    <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                </button> 
            </div>
        </div>             
    </div>
</header>

<main>

    <div class="container product my-4">
        
        <div class="container titlepart">
            Tai nghe chụp tai Razer Kraken Kitty Chroma Quartz màu hồng nữ tính - Hàng chính hãng   
        </div>
        
        <div class="container row boxproduct">
            
            <div class="col-lg-5 container imgproduct">
                <div class="main-imgproduct">
                    <img src="{{asset('public/frontend/img/product/'.$product->image_link)}}">
                </div>

                <div class="row">
                    <div id="previewlist-imgproduct" class="carousel slide pointer-event" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <div class="row ">
                                    <div class="col-md-3 preview-imgproduct-item">
                                        <img src="{{asset('public/frontend/img/product/'.$product->image_link)}}" width="100%">
                                    </div>
                                </div>
                            </div>        
                            <div class="carousel-item active">
                                <div class="row ">
                                    <div class="col-md-3 preview-imgproduct-item">
                                        <img src="{{asset('public/frontend/img/product/'.$product->image_link)}}" width="100%">
                                    </div>
                                </div>
                            </div>        
                        </div>
                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#previewlist-imgproduct" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon blue"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#previewlist-imgproduct" data-bs-slide="next">
                            <span class="carousel-control-next-icon blue"></span>
                        </button>
                    </div> 
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
                                <div class="input-group number-spinner">
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

                <div class="row button-buying-product">
                    <div class="col-md-6 col-sm-12 btn btn-addtocart">Thêm vào giỏ hàng</div>
                    <div class="col-md-6 col-sm-12 btn btn-buynow">Mua ngay</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container product shopowner my-4 ">
        <div class="row d-flex" style="align-items: center;">
            <div class="col-sm-3" style=" position: relative; display: flex; justify-content: center; ">
                <div class="avatar-shopowner">
                    <img src="{{asset('public/frontend/img/logo.png')}}" width="100%">
                </div>
            </div>
            <div class="col-md-6 content-shop border-right">
                
                    <div class="row name-status-shopowner">
                        <div class="col-md-6 name-shopowner ">
                            UIT Store
                        </div>
                        <div class="col-md-6 status-shopowner">
                            Online
                        </div>
                    </div>
                
                    <div class="row view-chatwith-shopowner d-flex" style="padding-inline: 5px;justify-content: space-around;">
                        <div class="col-lg-6">
                    <button class=" btn btn-view-shopowner"> Xem shop </button>       
                        </div>
                        <div class="col-lg-6">
                            <button class=" btn btn-chatwith-shopowner">Chat với Shop</button>                        
                        </div>
                    </div>
            </div>
            
            <div class="col-sm-3 numreview-numproduct-shop">
                <div class="row-review-product">
                    <div style="display: inline-block;"><span class="numreview-shop">Đánh giá 100</span>
                    </div>
                    <div style="display: inline-block;"><span class="numproduct-shop">Sản phẩm 35</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container product details-describe my-4">
        <div class="details">
            <div class="titlepart">
                Chi tiết sản phẩm
            </div>
            <div class="details-text">
                Neoljohahae
            </div>
        </div>
        <div class="describe">
            <div class="titlepart">
                Mô tả sản phẩm
            </div>
            <div class="describe-text">
                Neoljohahae Neoljohahae Neoljohahae
            </div>
        </div>
        
    </div>

    <div class="container product reviews my-4">
        <div class="titlepart">
            Đánh giá sản phẩm
        </div>
        <div class="container review-buyer">

            <div class="row line-review-buyer">
                <div class="col-1 avatar-buyer-placeholder">
                    <img class="avatar-buyer" src="{{asset('public/frontend/img/logo.png')}}">
                </div>
                
                <div class="col-10 review-detail-buyer">
                    <div class="row info-rating-product">
                        <div class="small-ratings" style="margin-right: 5px;"> 
                            <i class="fa fa-star rating-color" aria-hidden="true"></i> 
                            <i class="fa fa-star rating-color" aria-hidden="true"></i> 
                            <i class="fa fa-star rating-color" aria-hidden="true"></i> 
                            <i class="fa fa-star-o" aria-hidden="true"></i> 
                            <i class="fa fa-star-o" aria-hidden="true"></i> 
                        </div>
                    </div>
                    <div class="row name-review">
                        KhachHang3
                    </div>
                    <div class="row comment-review">
                        Hahahahahahahahaha 12345
                    </div>
                    <div>
                        <div class="row imglist-review">
                            <div class="img-review-placeholder">
                                <img class="img-review" src="{{asset('public/frontend/img/sp1.png')}}">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</main>


</body>

</html>