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
    <h1 style="color:black;" class="title">List of Users</h1><br>


    @if(session()->has('message'))

<div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert">x</button>

{{session()->get('message')}}

</div>

    @endif

    <table>
        <tr style="background-color:gray;">
        <th style="padding:20px;">#</th>
        <th style="padding:20px;">Full Name</th>
        <th style="padding:20px;">Email</th>
        <th style="padding:20px;">Date of Birth</th>
        <th style="padding:20px;">Phone Number</th>
        <th style="padding:20px;">Create Date</th>
        <th style="padding:20px;">Update Date</th>
</tr>

@foreach($data as $user)
<tr>
            <td>{{$loop->iteration}}</td>             
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>   
            <td>{{ $user->date? date('d M Y',strtotime($user->date)) : 'N/A' }}</td>              
            <td>{{$user->phone}}</td>
            <td>{{ $user->created_at ? date('D, d F Y',strtotime($user->created_at)) : 'N/A' }}</td>
            <td>{{ $user->updated_at ? date('D, d F Y',strtotime($user->updated_at)) : 'N/A' }}</td>
</tr>
</tr>
@endforeach
</table>
</div>
</div>


    @include('admin.script')
  </body>
</html>


