

<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand"
            @if (Route::has('login'))
                @auth href="{{route('redirect')}}"
            @else
               href="#"
                @endauth
            @endif><h2>Sixteen <em>Clothing</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" @if (Route::has('login'))
                        @auth href="{{route('redirect')}}"
                           @else
                           href="#"
                            @endauth
                            @endif>Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('our_product')}}">Our Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
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
    @if(session()->has('sendmessage'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('sendmessage')}}
        </div>
    @endif

</header>


<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
                <h4>Best Offer</h4>
                <h2>New Arrivals On Sale</h2>
            </div>
        </div>
        <div class="banner-item-02">
            <div class="text-content">
                <h4>Flash Deals</h4>
                <h2>Get your best products</h2>
            </div>
        </div>
        <div class="banner-item-03">
            <div class="text-content">
                <h4>Last Minute</h4>
                <h2>Grab last minute deals</h2>
            </div>
        </div>
    </div>
</div>
