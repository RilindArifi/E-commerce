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
    <div class="container mt-3">
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
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($msn as $message)
                    <tr>
                        <td>{{$message->fullname}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->subject}}</td>
                        <td>{{$message->message}}</td>
                        <td><a href="{{url('delete_message',$message->id)}}" class="btn btn-success" onclick="return confirm('Are you sure')">Delete</a></td>
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

