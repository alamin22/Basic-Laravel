@extends('layout.main')

@section('title','insrtPage')

@section('banner')
   @section('sub_banner1')
     <h2>laravel CRUD</h2>
   @endsection
   @section('sub_banner2')
     <a href="{{url('/viewData')}}">View Employee<a>
   @endsection

@endsection

@section('header')
   <h3>update data</h3>
@endsection

@section('container')

   <form method="post" action="{{url('/editViewData/'.$editViewData->id)}}">
   	{{ csrf_field() }}
   	<table>
   	<tr>
   		<td>Name</td>
   	</tr>
   	<tr>
   		<td><input type="text" value="{{$editViewData->name}}" name="name"></td>
   	</tr>
   	<tr>
   		<td>Mobile</td>
   	</tr>
   	<tr>
   		<td><input type="text" value="{{$editViewData->mobile}}" name="mobile"></td>
   	</tr>
   	<tr>
   		<td><input type="submit" value="update"></td>
   	</tr>
   	</table>

   </form>

@endsection

@section('footer')
    <h3>footer section</h3>
    <a href=""> &copy: mdalamincse14@gmail.com</a>
@endsection