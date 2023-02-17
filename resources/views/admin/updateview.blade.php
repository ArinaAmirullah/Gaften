<!DOCTYPE html>
<html lang="en">
  <head>

  <style type="text/css">

.title {
    color:white; 
    padding-top: 25px; 
    font-size: 25px;
  }

label {
  display: inline-block;
  width:200px;

}

  </style>


  <base href="/public">

  @include('admin.css')
  </head>
  <body>
  
    @include('admin.sidebar')
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">

<div class="container" align="center">
<h1 style="color:black;" class="title">Edit Product</h1><br>

@if(session()->has('message'))

<div class="alert alert-success">

<button type="button" class="close" data-dismiss="alert">x</button>

{{session()->get('message')}}

</div>

@endif

<form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">

@csrf

<div style="padding:15px;">
  <label>Product title : </label>

  <input style="color:black;" type="text" name="title" value="{{$data->title}}" required="">
</div><br>
<div style="padding:15px;">
  <label>Price : </label>

  <input style="color:black;" type="number" name="price" value="{{$data->price}}" required="">
</div><br>
<div style="padding:15px;">
  <label>Description : </label>

  <input style="color:black;" type="text" name="des" value="{{$data->description}}" required="">
</div><br>
<div style="padding:15px;">
  <label>Quantity : </label>

  <input style="color:black;" type="text" name="quantity" value="{{$data->quantity}}" required="">
</div><br>
<div style="padding:15px;">
  <label>Old Image : </label>

  <img height="100" width="100" src="/productimage/{{$data->image}}">
</div><br>

<div style="padding:15px;">

<label>Change the image</label>
<input type="file" name="file">

<div style="padding:15px;">
<input class="btn btn-success" type="submit">

</form>
</div>


</div>
</div>


    @include('admin.script')
  </body>
</html>
