<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations</title>
   
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
<div class="container">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date</th>
        <th>Time</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $data)
      <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->phone}}</td>
        <td>{{$data->date}}</td>
        <td>{{$data->time}}</td>
        <td>{{$data->message}}</td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>
</div>

    @include("admin.adminscript")
  </body>
</html>
</body>
</html>