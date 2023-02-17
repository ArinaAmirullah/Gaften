<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

  <style>
table {
  border-collapse: collapse;
  width: 100%;
}

tr {
  border-bottom: 1px solid #ddd;
}
</style>

  </head>
  
  <body style="background-color:#C6C6C6; color:black;">
  
    @include('admin.sidebar')
    @include('admin.navbar')
   
    <div style="padding-bottom:30px;" class="container-fluid page-body-wrapper">

    <div class="container" align="center"><br><br>
    <h1 style="color:black;" class="title">List of Products</h1><br>


    @if(session()->has('message'))

<div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert">x</button>

{{session()->get('message')}}

</div>

    @endif

    <table>
        <tr style="background-color:gray;">
        <th style="padding:20px;">#</th>
        <th style="padding:20px;">Title</th>
        <th style="padding:20px;">Description</th>
        <th style="padding:20px;">Quantity</th>
        <th style="padding:20px;">Price</th>
        <th style="padding:20px;">Image</th>
        <th style="padding:20px;">Update</th>
        <th style="padding:20px;">Delete</th>
</tr>

@foreach($data as $product)
<tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$product->title}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{$product->price}}</td>
        <td>
            <img height="100px" width="100px" src="/productimage/{{$product->image}}">
        </td>

        <td>
            <a class="btn btn-primary" href="{{url('updateview', $product->id)}}">Update</a>
        </td>
        <td>
            <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('deleteproduct', $product->id)}}">Delete</a>
        </td>
</tr>
</tr>
@endforeach
</table>
</div>
</div>


    @include('admin.script')
  </body>
</html>
