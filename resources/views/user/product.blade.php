
<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Latest Products</h2>
                    <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
                    <form class="form-inline float-right py-5" action="{{url('search')}}" method="get">
                        @csrf
                        <input type="search" class="form-control mr-2" name="search" placeholder="Search">
                        <input type="submit" class="btn btn-success" value="Search">
                    </form>
                </div>
            </div>


            @foreach($data as $product)
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img style="height: 350px; width: 350px;" src="/productimage/{{$product->image}}" alt=""></a>
                    <div class="down-content">
                        <a href="#"><h4>{{$product->title}}</h4></a>
                        <h6 style="color: darkred">{{$product->price}}&euro;</h6>
                        <p>{{$product->description}}</p>
                            <form action="{{url('addcart',$product->id)}}" method="post">
                                @csrf
                                <div class="row-cols-3 m-auto ">
                                    <div class="col-2 float-right " style="margin-right: 60px;">
                                        <label for="quantity">Quantity:</label>
                                        <input style="width: 100px;" min="1" value="1" class="form-control" name="quantity">
                                    </div>
                                    <div class="col-1">
                                        <input type="submit" class="btn btn-primary " value="Add Cart">
                                    </div>
                                </div>


                            </form>
                    </div>
                </div>
            </div>
            @endforeach
            @if(method_exists($data,'links'))
            <div class="d-flex justify-content-center">
                {!! $data->links() !!}
            </div>
                @endif
        </div>
    </div>
</div>

