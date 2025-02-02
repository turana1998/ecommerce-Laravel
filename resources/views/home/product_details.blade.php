<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <base href="/public"/>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="home/images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
    <style>
        .detail-box h5{
            font-size: 26px;
            margin-bottom: 15px;
        }
        .detail-box p{
            font-size: 22px;
            margin-bottom: 15px;
        }
        .detail-box h6{
            font-size: 24px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
<div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <div class="container ">
        <div class="col-sm-12 col-md-6 col-lg-6 m-auto">
            <div class="box">
                <div class="text-center">
                    <img  src="product/{{$product->image}}" alt="" class="m-0 w-100">
                </div>
                <div class="detail-box text-center">
                    <h5>
                        Product title -{{$product->title}}
                    </h5>
                    <p>
                        Product description -{{$product->description}}
                    </p>
                    <h5>
                        Product category - {{$product->category}}
                    </h5>
                    <h5>
                        Product quantity -{{$product->quantity}}
                    </h5>
                    @if($product->discount_price!=null)
                        <h6 style="color:red">
                            $ {{$product->discount_price}}
                        </h6>

                        <h6 style="color:blue">
                            <del>$ {{$product->price}}</del>
                        </h6>
                    @else
                        <h6 style="color:blue">
                            $ {{$product->price}}
                        </h6>
                    @endif
                    <div class="option_container">
                        <div class="options">
                            <form class="mt-3" action="{{url('add_cart',$product->id)}}" method="POST">

                                @csrf
                                <div class="row ">
                                    <div class="col-12 col-lg-4">
                                        <input type="number" name="quantity" value="1" min="1" class="m-0 h-100" >
                                    </div>
                                    <div class="col-12 col-lg-8">
                                        <input type="submit" value="Add to Cart"/>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('home.footer')
<!-- footer end -->
<div class="cpy_">
    <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>



        Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

    </p>
</div>
<!-- jQery -->
<script src="home/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="home/js/bootstrap.js"></script>
<!-- custom js -->
<script src="home/js/custom.js"></script>
</body>
</html>
