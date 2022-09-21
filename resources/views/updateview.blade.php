@extends('welcome')
@section('content')

<div class="col-md-4 m-auto border p-2 border-info" >
	<h2>UPDATE VIEW CLASS</h2>
	<form action="updatedata" method="post">
@csrf
<div class="mb-2">
	<label for="">Product Name</label>
	<input type="text" name="pname" value="{{$pname}}" class="form-control" id="">
</div>
<div class="mb-2">
	<label for="">Product Price</label>
	<input type="text" name="pprice" value="{{$pprice}} "class="form-control" id="">
</div>

<br>
<input type="hidden" name="id" value="{{$id}}">
<button type="submit" class="btn btn-outline-warning rounded-pill">Update</button>
</form>
</div>

@endsection