@extends('layout.main')

@section('title','viewPage')

@section('banner')

   @section('sub_banner1')
     <h2>laravel CRUD</h2>
   @endsection
   @section('sub_banner2')
     <a href="{{url('/insertForm')}}">Add Employee<a>
   @endsection

@endsection

@section('container')
<center>

	 <h3>Employer List</h3>

	 <?php
 
    $msg=Session::get('msg');
    if($msg){
      echo $msg;
      Session::put('msg',null);
    }
    ?>

     <table cellspacing="25px" cellpadding="5px" >
     	<tr>
     		<th>No</th>
     		<th>Name</th>
     		<th>Mobile Number</th>
     		<th>Action</th>
     	</tr>
        
     	@foreach($retriveData as $data )
     	<tr>
     		<td>{{$data->id}}</td>
     		<td>{{$data->name}}</td>
     		<td>{{$data->mobile}}</td>
     		<td><a href="{{url('/editViewData/'.$data->id)}}">Edit</a> || <a href="{{url('/deleteData/'.$data->id)}}">Delete</a></td>
     	</tr>
     	@endforeach

     </table>

</center>
   
@endsection

@section('footer')
      <h3>footer section</h3>
    <a href=""> &copy: mdalamincse14@gmail.com</a>
@endsection