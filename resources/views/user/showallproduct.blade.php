<!DOCTYPE html>
<html lang="en">

<head>

    @include('user.css')


</head>

<body>



<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html"><h2>Sixteen <em>Clothing</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('redirect')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">All Product</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('showcart')}}"><i class="fa fa-shopping-cart"></i>
                                    Cart &nbsp;<strong><span id="card" class="badge  badge-warning"  style="border-radius: 40%">{{$count1}}</span></strong></a>
                            </li>
                            <x-app-layout>

                            </x-app-layout>
                        @else
                            <li class="nav-item"><a class="nav-link" style="color: brown; font-weight: bold" href="{{ route('login') }}" >Log in</a></li>

                            @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link" style="color: brown; font-weight: bold" href="{{ route('register') }}" >Register</a></li>
                            @endif
                        @endauth

                    @endif

                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Page Content -->
<div class="page-heading products-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>new arrivals</h4>
                    <h2>sixteen products</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">All Products</li>
                    </ul>
                </div>
            </div>
            @foreach($data as $product)
                <div class="col-lg-4 col-md-4 all des">
                    <form action="{{url('addcart',$product->id)}}" method="post">
                        <div class="product-item">
                            @csrf
                            <a href="#"><img style="height: 250px; width: 350px;" src="/productimage/{{$product->image}}" alt=""></a>
                            <div class="down-content">
                                <a href="#"><h4>{{$product->title}}</h4></a>
                                <h6>{{$product->price}}&euro;</h6>
                                <p>{{$product->description}}</p>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="buy">
                                    <label for="quantity">Quantity:</label>
                                    <input style="width: 100px;" min="1" value="1" class="form-control" name="quantity">
                                    <input type="submit" class="btn btn-primary mt-2 " value="Add Cart">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            @endforeach

        </div>
    </div>
</div>





@include('user.footer')


@include('user.script')


</body>

</html>

