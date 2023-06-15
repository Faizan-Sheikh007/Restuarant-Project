<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
   
</head>
<body>

<x-app-layout>
   
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>

    @include("admin.admincss")
    <style>
    /* Set font color to white */
    body {
      color: white;
    }
    /* Add top margin */
    .table-container {
      margin-top: 100px;
    }
    /* Center text in columns */
    td {
      text-align: center;
    }
  </style>
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar")
   
  
<!-- Table container with top margin -->
<div class="container table-container">
  <table class="table table-responsive table-bordered table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $data)
      <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        @if($data->usertype=="0")
        <td><a href="{{url('/deleteuser', $data->id)}}">Delete</a></td>
        @else
        <td>NOT ALLOWED</td>
        @endif
      </tr>
     @endforeach
    </tbody>
  </table>
</div>

    @include("admin.adminscript")
  </body>
</html>
</body>
</html>