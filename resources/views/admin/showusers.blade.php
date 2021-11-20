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
    <div class="container mt-2">
        <div class="col">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
            @endif
            @if(session()->has('message2'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message2')}}
                </div>
            @endif
            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Usertype</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $users)
                    <tr>
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->usertype}}</td>
                        <td>{{$users->phone}}</td>
                        <td>{{$users->address}}</td>
                        <td>
                           @if($users->usertype =='0')
                                <a href="{{url('update_user',$users->id)}}" class="btn btn-success mr-1">Edit</a>
                                <a href="{{url('delete_user',$users->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure')">Delete</a>
                            @else
                                <a href="{{url('update_user',$users->id)}}" class="btn btn-success mr-1">Edit</a>
                                <a  class="btn btn-light" >Not Allowed</a>
                           @endif
                            
                        
                           
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
