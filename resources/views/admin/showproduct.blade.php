<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style>
        .container{
            display: flex;
            justify-content: center;
        }
        td{
            color: white;
            background-color: #0c5460;
        }
    </style>
</head>
<body>

@include('admin.sidebar')
@include('admin.navbar')
<div class="container-fluid page-body-wrapper">
    <div class="container">
        <div class="col">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
            @endif
            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $product)
                    <tr>
                        <td>{{($product->title)}}</td>
                        <td>{{($product->price)}}&nbsp;&euro;</td>
                        <td>{{($product->description)}}</td>
                        <td>{{($product->quantity)}}</td>
                        <td><img style="height: 200px; width: 200px; margin-right: 0px;" src="/productimage/{{$product->image}}" alt=""></td>
                        <td><a href="{{url('updateview', $product->id)}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{url('deleteproduct',$product->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure')">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@include('admin.script')

</body>
</html>
