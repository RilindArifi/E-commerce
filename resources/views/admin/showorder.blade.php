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
            background-color: #1d2124;
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
                    <th scope="col">Costumer name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Product title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order as $orders)
                    <tr>
                        <td>{{$orders->name}}</td>
                        <td>{{$orders->phone}}</td>
                        <td>{{$orders->address}}</td>
                        <td>{{$orders->product_name}}</td>
                        <td>{{$orders->price}}&nbsp;&euro;</td>
                        <td>{{$orders->quantity}}</td>
                        <td>{{$orders->status}}</td>
                        <td><a href="{{url('updatestatus',$orders->id)}}" class="btn btn-success">Delivered</a></td>
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
