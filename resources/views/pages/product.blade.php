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



</body>

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

</html>