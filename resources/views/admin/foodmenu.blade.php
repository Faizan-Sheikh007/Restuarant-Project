<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food-Menu</title>
   
</head>
<body>

<x-app-layout>
   
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>

    @include("admin.admincss")
    <style>
      body {
        background:black;
      }
      .box-form {
        background: linear-gradient(to bottom, #262626, #000000);
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0,0,0,.1);
        color: #fff;
        margin-top: 100px;
        padding: 30px;
      }
      .box-form:hover {
        background: linear-gradient(to bottom, #262626, #000000);
        color: #fff;
        
      }
      .box-form input[type=text], .box-form input[type=number] {
        background-color: #fff;
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        border: none;
        height: 40px;
        margin-bottom: 20px;
        padding: 10px;
        width: 100%;
      }
      .box-form label {
        font-weight: bold;
        margin-bottom: 10px;
      }
      .box-form img {
        border-radius: 5px;
        margin-bottom: 20px;
        max-width: 100%;
      }
      
      table {
  border-collapse: collapse;
  width: 100%;
}

thead {
  background: linear-gradient(to bottom, #4F4F4F, #333333);
  color: white;
}

th {
  font-size: 18px;
  font-weight: bold;
  padding: 10px;
  text-align: left;
}

td {
  padding: 10px;
  border-bottom: 1px solid #ddd;
  font:white;
}

tr:hover {
  background-color:  linear-gradient(to bottom, #262626, #000000);
}
.piko
{
  width: 50px;
}
    </style>
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar")
   
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
        <form class="box-form" action="{{ url('/uploadfood') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <h2 class="text-center">Food-Menu</h2>
    <div class="form-group">
        <label for="product-id">Product Title:</label>
        <input  style="color:blue"   type="text" style="color:blue"class="form-control" name="title" id="title" placeholder="Enter product Title">
    </div>
    <div class="form-group">
        <label for="product-price">Product Price:</label>
        <input   style="color:blue" type="number" class="form-control" name="price" id="price" placeholder="Enter product price">
    </div>
    <div class="form-group">
        <label for="product-description">Product Description:</label>
        <input  style="color:blue" type="text" class="form-control" name="description" id="description" placeholder="Enter product description">
    </div>
    <div class="form-group">
        <label for="product-image">Product Image:</label>
        <input  style="color:blue" type="file" class="form-control-file" name="image" id="image">
    </div>
    <img src="https://via.placeholder.com/150" alt="Product image">
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
        </div>
    </hr>
    <table>
  <thead>
    <tr>
      <th>Food Name</th>
      <th>Price</th>
      <th>Description</th>
      <th>Image</th>
      <th>Action-1</th>
      <th>Action-1</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $data)
    <tr>
      <td>{{$data->title}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->description}}</td>
      <td><img src="/foodimage/{{$data->image}}" class="piko"></td>
      <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
      <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
    </tr>
  
    @endforeach
  </tbody>
</table>
      </div>
    </div>
  
<!-- Table container with top margin -->
    @include("admin.adminscript")
  </body>
</html>
</body>
</html>