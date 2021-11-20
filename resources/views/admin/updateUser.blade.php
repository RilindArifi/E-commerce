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
    <div class="container mb-4">
        <form class="form border-2" action="{{url('edit_user',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
            @endif
            <h1 class="title1">Edit User</h1>
            <div class="form-group">
                <label for="title">Usertype</label>
                <input type="text" name="usertype" class="form-control" value="{{$data->usertype}}">
            </div>

            <button type="submit" class="btn btn-primary mt-3 p-3 my-3"
                    @if($data->usertype=='0')
                        onclick="return confirm('Are you sure you want to become an admin {{$data->name}}')"
                    @endif
            >Edit User</button>
        </form>
    </div>
</div>

@include('admin.script')

</body>
</html>


