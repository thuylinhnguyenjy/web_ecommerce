    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <script src="https://kit.fontawesome.com/c44ecc908b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <link  href="{{asset('public/frontend/css/homepage.css')}}" rel="stylesheet" type="text/css"/>
    
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

<div class="container">
    <div id="banner" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{('public/frontend/img/banner.png')}}" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
            <img src="{{('public/frontend/img/banner.png')}}" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
            <img src="{{('public/frontend/img/banner.png')}}" class="d-block" style="width:100%">
            </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#banner" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#banner" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="container-md pt-4">
        <div class="row">
            <div class="col-md-3">   
                <button type="button" class="btn-listcontent" style="color: black; background-color: #B4EDFF;">Mall</button>
            </div>
             <div class="col-md-3">   
                <button type="button" class="btn-listcontent">  Mã Giảm Giá</button>
            </div>
             <div class="col-md-3">   
                <button type="button" class="btn-listcontent" style="color: black; background-color: #B4EDFF;">Nạp Thẻ và Voucher</button>
            </div>
             <div class="col-md-3">   
                <button type="button" class="btn-listcontent">Global</button>
            </div>
        </div>
    </div>

    <div class="boxflashsale container my-4">

        <div class="flashsalecontent">
           
                <div class="row gx-1 rowfls">
                    
                    <div>
                        <a class="btn btn-fls-viewmore pb-2" href="">Xem thêm &gt; </a>
                    </div>

                    <div class="gridspfls">
                        @foreach ($products_flashsale as $product)
                        <a class="col-lg fls" href="">
                            <div class="card rectcard">
                                <img class="card-img-top" src="{{asset('public/frontend/img/product/'.$product->image_link)}}">      
                                <span>{{$product->name}}</span>
                                <div>{{$product->price}} đ</div>
                            </div> 
                        </a>
                        @endforeach
                    </div>
                    
                </div>
        </div>  
        
        <div class="flashsaletitle">
            <label class="title">Flash Sale</label>
        </div>

    </div>

    <div class="boxcategory container p-0 ">
        <div class="container" style="background-color: #FBE061; height: 55px;">
            <label class="title">Danh Mục</label>
        </div>
        <div class="container" style="background-color: #B4EDFF; height: 100%; position: relative; justify-content: center; display: flex;">
            <div style="margin: 8px; width: 100%;">
                <div id="categorylist" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false" style="position: static; margin: auto;">
                    <div class="carousel-inner" style="margin-left: auto;">
                        <div class="carousel-item active categorylist">
                            <div class="row gx-1" style="text-align: center;">

                                @foreach ($catalogs as $catalog)
                                <a class="col-lg " href="">
                                    <div class="card category">
                                        <img class="circleimg" src="{{asset('public/frontend/img/catalog/'.$catalog->image_link)}}">      
                                        <span>{{$catalog->name}}</span>
                                    </div> 
                                </a>
                                @endforeach

                            </div>    
                        </div>
                        <div class="carousel-item categorylist">
                            <div class="row">
                                <!-- <a class="card category col-lg" href="">
                                    <img class="circleimg" src="{{('public/frontend/img/category_shirt.jpg')}}">
                                    <h5>Tên Sản Phẩm</h5>
                                </a>
                                <a class="card category col-lg" href="">
                                    <img class="circleimg" src="{{('public/frontend/img/category_shirt.jpg')}}">
                                    <h5>Tên Sản Phẩm</h5>
                                </a>
                                <a class="card category col-lg" href="">
                                    <img class="circleimg" src="{{('public/frontend/img/category_shirt.jpg')}}">
                                    <h5>Tên Sản Phẩm</h5>
                                </a>
                                <a class="card category col-lg" href="">
                                    <img class="circleimg" src="{{('public/frontend/img/category_shirt.jpg')}}">
                                    <h5>Tên Sản Phẩm</h5>
                                </a>
                                <a class="card category col-lg" href="">
                                    <img class="circleimg" src="{{('public/frontend/img/category_shirt.jpg')}}">
                                    <h5>Tên Sản Phẩm</h5>
                                </a>
                                <a class="card category col-lg" href="">
                                    <img class="circleimg" src="{{('public/frontend/img/category_shirt.jpg')}}">
                                    <h5>Tên Sản Phẩm</h5>
                                </a>
                                <a class="card category col-lg" href="">
                                    <img class="circleimg" src="{{('public/frontend/img/category_shirt.jpg')}}">
                                    <h5>Tên Sản Phẩm</h5>
                                </a>
                                <a class="card category col-lg" href="">
                                    <img class="circleimg" src="{{('public/frontend/img/category_shirt.jpg')}}">
                                    <h5>Tên Sản Phẩm</h5>
                                </a>
                                <a class="card category col-lg" href="">
                                    <img class="circleimg" src="{{('public/frontend/img/category_shirt.jpg')}}">
                                    <h5>Tên Sản Phẩm</h5>
                                </a>
                                <a class="card category col-lg" href="">
                                    <img class="circleimg" src="{{('public/frontend/img/category_shirt.jpg')}}">
                                    <h5>Tên Sản Phẩm</h5>
                                </a>
                                <a class="card category col-lg" href="">
                                    <img class="circleimg" src="{{('public/frontend/img/category_shirt.jpg')}}">
                                    <h5>Tên Sản Phẩm</h5>
                                </a>
                                <a class="card category col-lg" href="">
                                    <img class="circleimg" src="{{('public/frontend/img/category_shirt.jpg')}}">
                                    <h5>Tên Sản Phẩm</h5>
                                </a>
                                <a class="card category col-lg" href="">
                                    <img class="circleimg" src="{{('public/frontend/img/category_shirt.jpg')}}">
                                    <h5>Tên Sản Phẩm</h5>
                                </a>
                                <a class="card category col-lg" href="">
                                    <img class="circleimg" src="{{('public/frontend/img/category_shirt.jpg')}}">
                                    <h5>Tên Sản Phẩm</h5>
                                </a>
                                <a class="card category col-lg" href="">
                                    <img class="circleimg" src="{{('public/frontend/img/category_shirt.jpg')}}">
                                    <h5>Tên Sản Phẩm</h5>
                                </a>
                                <a class="card category col-lg" href="">
                                    <img class="circleimg" src="{{('public/frontend/img/category_shirt.jpg')}}">
                                    <h5>Tên Sản Phẩm</h5>
                                </a>
                                <a class="card category col-lg" href="">
                                    <img class="circleimg" src="{{('public/frontend/img/category_shirt.jpg')}}">
                                    <h5>Tên Sản Phẩm</h5>
                                </a>
                                <a class="card category col-lg" href="">
                                    <img class="circleimg" src="{{('public/frontend/img/category_shirt.jpg')}}">
                                    <h5>Tên Sản Phẩm</h5>
                                </a>  
                           
                            </div>     -->
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <button class="arrows carousel-control-prev" type="button" data-bs-target="#categorylist" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon blue"></span>
                        </button>
                        <button class="arrows carousel-control-next" type="button" data-bs-target="#categorylist" data-bs-slide="next">
                            <span class="carousel-control-next-icon blue"></span>
                        </button>
                    </div>
                
                </div>
            </div>
        </div>
        
    </div>

    <div class="boxproduct container p-0 pt-4">
        <div class="container" style="background-color: #FBE061; height: 55px;">
            <label class="title">Sản Phẩm</label>
        </div>

        <div class="container boxsanpham">
            <div style="margin-top: 8px;">
                <div class="gridsp row gx-1">

                    @foreach ($products as $product)
                    <a class="col-md sp" href="">
                        <div class="card rectcard">
                            <img class="card-img-top" src="{{asset('public/frontend/img/product/'.$product->image_link)}}">      
                            <span>{{$product->name}}</span>
                            <div>{{$product->price}} đ</div>
                        </div> 
                    </a>
                    @endforeach
                    
                </div>
                
                <div style="justify-content: center; display: flex;">
                    <button class="btnviewmore">Xem thêm</button>
                </div>
    </div>
</div>

</div>
</div>
<!-- <div class="footer container">
    <div class="container p-0 pt-4 my-4 socialfooter" style="background-color: #f2f2f2; position: relative;">
        <div style="display: flex; justify-content: center; width: 100%;">
            <div class="row pt-5 gx-0" style="width: 100%; justify-content: space-evenly; margin-left: auto; margin-right: auto;">
                
                    <div class="col-md-1">
                        <a class="btn" href="">Product</a>
                    </div>
                    <div class="col-md-1">
                        <a class="btn" href="">Features</a>
                    </div>
                    <div class="col-md-1">
                        <a class="btn" href="">Resources</a>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <b style="margin-top: 8px;">TRADE</b>
                    </div>
                    <div class="col-md-1">             
                        <a class="btn" href="">About</a>
                    </div>
                    <div class="col-md-1">
                        <a class="btn" href="">Blog</a>  
                    </div>
                     <div class="col-md-1">
                        <a class="btn" href="">Support</a> 
                    </div>
                                         
            </div>
        </div>

        <div style="display: flex; justify-content: center;">
            <hr>
        </div>

        <div class="container-fluid d-flex justify-content-center">
            <button class="btn"><i class="fab fa-facebook" style="font-size: 40px;" aria-hidden="true"></i></button>
            <button class="btn"><i class="fab fa-instagram" style="font-size: 40px;" aria-hidden="true"></i></button>
            <button class="btn"><i class="fab fa-youtube" style="font-size: 40px;" aria-hidden="true"></i></button>
            <button class="btn"><i class="fab fa-twitter" style="font-size: 40px;" aria-hidden="true"></i></button>
        </div>

        <div class=" pt-5 pb-3 d-flex justify-content-center"> 
            <span>
                ©2021 
                <a class="btn" href="" style="margin-top: -5px;">Privacy - Terms </a> 
            </span>
            
        </div>

    </div>

    <div class="container p-0 pt-4 pb-4 my-4 contactfooter" style="background-color: #f2f2f2; height: 100%">
        <div style="width: 100%; justify-content: center; display: flex; position: relative; margin-left: auto; margin-right: auto; margin-top: 30px;">
        <div class="row gx-1" style=" float: left; margin-left: auto;">
            <div class="contactlinefooter col-md-2"> 
                <b>TRADE</b> 
                ©2021 <br>
                <a class="btn footer" href="">Privacy - Terms </a>
            </div>
            
            <div class="contactlinefooter col-md-3">
                <b>Contact us</b><br>
                <a class="btn footer" href="">Hotline &amp; Online chat</a>
                <a class="btn footer" href="">Help Center</a>
                <a class="btn footer" href="">How to Buy</a>
                <a class="btn footer" href="">Shipping &amp; Delivery</a>
            </div>
            
            <div class="contactlinefooter col-md-2">
                <b>Features</b><br>
                <a class="btn footer" href="">Feature</a>
                <a class="btn footer" href="">Feature</a>
                <a class="btn footer" href="">Feature</a>           
            </div>             

            <div class="contactlinefooter col-md-2">
                <b>Resources</b><br>
                <a class="btn footer" href="">Resource</a>
                <a class="btn footer" href="">Resource</a>
                <a class="btn footer" href="">Resource</a>               
            </div>

            <div class="contactlinefooter col-md-2">
                <b>Company</b><br>
                <a class="btn footer" href="">Company</a>
                <a class="btn footer" href="">Company</a>
                <a class="btn footer" href="">Company</a>               
            </div>
            
        </div>
        </div>

    </div>
</div> -->

</body>

</html>