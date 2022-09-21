@extends('welcome')
@section('content')

<!-- Button trigger modal --><center>
<button type="button" class="btn btn-outline-danger fs-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
 Add Record
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">CRUD</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form action="insertData" method="POST" enctype="multipart/form-data">
      		@csrf
      		<div class="mb2">
      			<input type="text" name="pname" class="form-control"></div>
      		<div class="mb2">
      			<input type="text" name="pprice" class="form-control"></div>
      		<div class="mb2">
      			<input type="file" name="image" class="form-control"></div><br>
      			<button type="submit" class="btn btn-outline-success fs-6 rounded-pill">ADD RECORD</button>
      		<div class="modal-footer">
      			<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      			
      			
      	</form>
        
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>-->
    </div>
  </div>
</div></center>
<div class="container">

<table class="table mt-5">
	<thead class="bg-danger text-white fw-bold">
		<th>ID</th>
		<th>Product Name</th>
		<th>Price</th>
		<th>Image</th>
		<th>Update</th>
		<th>Delete</th>
</thead>
<tbody class="text-danger bg-light fs-4">
	@foreach($data as $item)
	<tr>
<form action="updatedelete" method="get">
<td class="pt-5"><input type="hidden" name="id" value="{{$item['id']}}">{{$item['id']}}</td>
<td class="pt-5"><input type="hidden" name="name" value="{{$item['pname']}}">{{$item['pname']}}</td>
<td class="pt-5"><input type="hidden" name="price" value="{{$item['pprice']}}">{{$item['pprice']}}</td>
<!--<td>{{$item['image']}}</td>-->
<td><img src="images/{{$item['image']}}" width="100px" height="100px"alt=""></td>
<td class="pt-5"><input type="submit" class="btn btn-outline-danger rounded-pill" name="update"  value="Update"></td>
<td class="pt-5"><input type="submit" class="btn btn-outline-danger rounded-pill" value="Delete"></td></form></tr>
	 
	@endforeach
</tbody>
</table></div>
@endsection