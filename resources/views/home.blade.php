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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
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
                <div id="categorylist">
                    <div style="margin-left: auto;">
                        <div class="multiple-items" style="text-align: center;">
                                
                            @foreach ($catalogs as $catalog)
                            <div>                
                                <a href="{{route ('showpageproduct', $product->id) }}">
                                    <div class="card category">
                                        <img class="circleimg" src="{{asset('public/frontend/img/catalog/'.$catalog->image_link)}}">      
                                        <span>{{$catalog->name}}</span>
                                    </div> 
                                </a>
                            </div>
                                @endforeach
                                 
                        </div>    
                    
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js" integrity="sha256-Ap4KLoCf1rXb52q+i3p0k2vjBsmownyBTE1EqlRiMwA=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="public/frontend/js/slick.js">  </script>

</body>
</html>