<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('admin.css')
    <style>
        .container{
            display: flex;
            justify-content: center;
        }
        .title1{
            color: white;
            margin-bottom: 40px;
            font-size: 35px;
            font-weight: bold;
        }
        .form{
            margin-top: 100px;
            padding: 50px;

        }
        .form-control{
            margin-bottom: 25px;
            color: black;
        }


    </style>
</head>
<body>

@include('admin.sidebar')
@include('admin.navbar')



<div class="container-fluid page-body-wrapper">
    <div class="container ">
        <form class="form border-2" action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <h1 class="title1">Edit Product</h1>

            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
            @endif

            <div class="form-group">
                <label for="title">Product Title</label>
                <input type="text" name="title" class="form-control" value="{{$data->title}}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" value="{{$data->price}}">
            </div>
            <div class="form-group">
                <label for="title">Description</label>
                <input type="text" name="des" class="form-control" value="{{$data->description}}">
            </div>
            <div class="form-group">
                <label for="title">Quanitity</label>
                <input type="text" name="quantity" class="form-control" value="{{$data->quantity}}">
            </div>
            <div class="form-group">
                <label for="title">Old image</label>
                <img height="150px" width="150px" src="/productimage/{{$data->image}}" alt=""><br><br><br>
            </div>
            <div class="form-control-file">
                <label for="title">Change the image</label><br>
                <input type="file" name="file" class="mb-3">
            </div>
            <button type="submit" class="btn btn-primary mt-3 p-3 my-3" >Edit Product</button>
        </form>
    </div>
</div>

@include('admin.script')

</body>
</html>


