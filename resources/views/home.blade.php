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
    <link  href="{{asset('public/frontend/css/mainfont.css')}}" rel="stylesheet" type="text/css"/>
    <link  href="{{asset('public/frontend/css/header.css')}}" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>

<body>

@extends('welcome')

@section('content')
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
                        <a class="col-lg fls" href="{{route ('showpageproduct', $product->id) }}">
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
                <div id="categorylist" style="position: static; margin: auto;">
                    <div class="" style="margin-left: auto;">
                        <div class="">
                            <div class="multiple-items row gx-1" style="text-align: center;">

                                @foreach ($catalogs as $catalog)
                                <a class="col-lg " href="{{route ('showpageproduct', $product->id) }}">
                                    <div class="card category">
                                        <img class="circleimg" src="{{asset('public/frontend/img/catalog/'.$catalog->image_link)}}">      
                                        <span>{{$catalog->name}}</span>
                                    </div> 
                                </a>
                                @endforeach

                            </div>    
                        </div>
                        <!-- <div class="carousel-item categorylist">
                            <div class="row">
                               
                            </div>
                        </div> -->
                    </div>
                    
                    <!-- <div>
                        <button class="arrows carousel-control-prev" type="button" data-bs-target="#categorylist" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon blue"></span>
                        </button>
                        <button class="arrows carousel-control-next" type="button" data-bs-target="#categorylist" data-bs-slide="next">
                            <span class="carousel-control-next-icon blue"></span>
                        </button>
                    </div> -->
                
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
                    <a class="col-md sp" href="{{route ('showpageproduct', $product->id) }}">
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
@endsection

</body>
<script>
    $(document).ready(function(){
      $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
     });
    });	
</script>
</html>