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

    <div class="container-fluid page-body-wrapper">

<div class="container" align="center"><br><br>
<h1 style="color:black;" class="title">List of Orders</h1><br>

<table>

<tr style="background-color:grey;">
    <td style="padding:20px;">#</td>
    <td style="padding:20px;">Customer Name</td>
    <td style="padding:20px;">Phone Number</td>
    <td style="padding:20px;">Address</td>
    <td style="padding:20px;">Product Title</td>
    <td style="padding:20px;">Price</td>
    <td style="padding:20px;">Quantity</td>
    <td style="padding:20px;">Status</td>
    <td style="padding:20px;">Action</td>
</tr>

@foreach($order as $orders)
<tr align="center">
    <td style="padding:20px;">{{$loop->iteration}}</td>
    <td style="padding:20px;">{{$orders->name}}</td>
    <td style="padding:20px;">{{$orders->phone}}</td>
    <td style="padding:20px;">{{$orders->address}}</td>
    <td style="padding:20px;">{{$orders->product_name}}</td>
    <td style="padding:20px;" style="padding:20px;">{{$orders->price}}</td>
    <td style="padding:20px;">{{$orders->quantity}}</td>
    <td style="padding:20px;">{{$orders->status}}</td>
    <td style="padding:20px;">
        <a class="btn btn-success" href="{{url('updatestatus',$orders->id)}}">Delivered</a>
    </td>
</tr>

@endforeach

</table>

</div>
</div>

    @include('admin.script')
  </body>
</html>

