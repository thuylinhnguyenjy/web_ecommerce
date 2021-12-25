<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hồ sơ cá nhân</title>
    <script src="https://kit.fontawesome.com/c44ecc908b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/header.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/hoso.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/frame_user_info.css')}}"/>

</head>

<body>
@extends('welcome')

@section('content')    

        <div class="container" style="margin-top: 10px">
            <div class="row">
                <div class="col-lg-3 col-md-12 content-choice-group">
                    <div class="row">
                        <div class="container-user col-lg-12 col-md-5 col-sm-5 col-12" style="background-color: #B4EDFF;">
                            <div class="user-avatar">
                                <img src="{{asset('public/frontend/img/user/'.Auth::user()->avatar)}}">
                            </div>
                            <div class="user-name">
                                <h5 class="user-name-text">{{Auth::user()->name}}</h5>
                            </div>
                            <div class="user-btnchange">
                                <button class="user-btnchange-btn">Sửa thông tin</button>
                            </div>
                        </div>
                    
                        <div class="container-choice-group col-lg-12 col-md-7 col-sm-7 col-12">
                            <div class="choice active">
                                <i class="fas fa-user " aria-hidden="true"></i>
                                <a> Tài khoản của tôi </a> 
                            </div>
                            <div class="choice"> 
                                <i class="fas fa-file-alt" aria-hidden="true"></i>
                                <a href="{{route ('showuserinfo') }}" > Hồ sơ </a> 
                            </div>
                            <div class="choice"> 
                                <i class="fas fa-wallet" aria-hidden="true"></i>
                                <a href="{{route ('showbankaccount') }}"> Ngân hàng </a> 
                            </div>
                            <div class="choice"> 
                                <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                <a href="{{route ('showaddress') }}"> Địa chỉ </a> 
                            </div>
                            <div class="choice"> 
                                <i class="fas fa-key" aria-hidden="true"></i>
                                <a href="{{route ('changepassword') }}"> Mật khẩu </a> 
                            </div>
                            <div class="choice"> 
                                <i class="fas fa-file-invoice-dollar" aria-hidden="true"></i>
                                <a href="{{route ('showtransaction') }}">Đơn mua</a> 
                            </div>
                            <div class="choice"> 
                                <i class="fas fa-tags" aria-hidden="true"></i>
                                <a href="{{route ('showvoucher') }}"> Voucher </a> 
                            </div>
                        </div>
                    </div>
                </div>

                @yield('myaccount')

            </div>
            
        </div>
@endsection
    
</body>
<script>
    $('div .choice').click(function () {
        $(this).css("color", "red");
});
</script>
</html>