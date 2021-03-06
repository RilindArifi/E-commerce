<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--

    TemplateMo 546 Sixteen Clothing

    https://templatemo.com/tm-546-sixteen-clothing

    -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

<!-- ***** Preloader Start ***** -->
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
            <a class="navbar-brand" href="{{route('redirect')}}"><h2>Sixteen <em>Clothing</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">Our Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
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
    @if(session()->has('message1'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message1')}}
        </div>
    @endif

   <div class="container">
       @if(session()->has('message'))
           <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">x</button>
               {{session()->get('message')}}
           </div>
       @endif
       <table class="table table-bordered">
           <thead class="thead-dark">
           <tr>
               <th scope="col">Product Name</th>
               <th scope="col">Quantity</th>
               <th scope="col">Price</th>
               <th scope="col">Action</th>
           </tr>
           </thead>
           <form action="{{url('order')}}" method="post">
               @csrf
               <tbody>
               @foreach($cart as $carts)
                   <tr>
                       <td><input style="width: 100px;" type="text" name="productname[]" value="{{$carts->product_title}}" hidden>
                           {{$carts->product_title}}
                       </td>
                       <td><input style="width: 100px;" type="text" name="quantity[]" value="{{$carts->quantity}}"hidden>
                           {{$carts->quantity}}
                       </td>
                       <td><input style="width: 100px;" type="text" name="pric[]" value="{{$carts->price}}&nbsp;&euro;"hidden>
                           {{$carts->price}}&nbsp;&euro;</td>
                       <td ><a href="{{url('delete',$carts->id)}}" class="btn btn-danger" >Delete</a></td>
                   </tr>
               @endforeach
               </tbody>
               <input type="submit" class="btn btn-success float-right mb-2"  value="Confirm all Order">
           </form>
       </table>

   </div>




</header>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/accordions.js"></script>


<script language = "text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
        }
    }
</script>


</body>

</html>
