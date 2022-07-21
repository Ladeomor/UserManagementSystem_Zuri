
@extends('welcome')
@section('content')



<div class="col-md-4 m-auto border mt-3 p-2 border-info">
    <h2 class="text-center text-warning">Edit User Details</h2>
<form action="updatedata" method="get">

<div class="mb-2">
    <label for="">User Name</label>
    <input type="text" name="name" value="{{$name}}" class="form-control" id="">

</div>
<div class="mb-2">
    <label for="">User Email</label>
    <input type="text" name="email" value="{{$email}}" class="form-control" id="">

</div>
<div class="mb-2">
    <label for="">User Contact</label>
    <input type="text" name="phone" value="{{$phone}}" class="form-control" id="">

</div>
<br>
<input type="hidden" name="id" value="{{$id}}">
<button type="submit" class="btn btn-outline-warning rounded-pill">Update</button>

</form>

</br>