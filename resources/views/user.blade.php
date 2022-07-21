
@extends('welcome')
@section('content')

<style>
  button .btn{
    text-align: right;
  }
  .btn:hover{
    color: white;
    background-color: black;
    border: none;
  }
    .btn
    {
        color: purple !important;
        font-size: 15px !important;
        margin-bottom: 20px !important;
        align-self: right !important;
    }
    .btn-outline-danger{
        color: purple !important;
        align-items: right !important;
    }
</style>
<center>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add User
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">User Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="storeData" method="POST">
         @csrf
            <div class="mb-2">
                <input type="text" placeholder="Enter user name" class="form-control" name="username" id="">
</div>
<div class="mb-2">
                <input type="text" placeholder="Enter user email" class="form-control" name="useremail" id="">
</div> 
<div class="mb-2">
                <input type="text" placeholder="Enter user contact" class="form-control" name="usercontact" id="">
</div>
<button type="submit" class="btn btn-outline-danger fw-bold">Add User</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-ok" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</center>
<div class="container">
<table class ="table">
    <thead >
        <center>
     User Details 
</center>
        <th>User Id</th>
        <th>User Name</th>
        <th>User Email</th>
        <th>User Phone</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>
    <tbody>
        @foreach($data as $userData)
        <tr>
          <form action="updatedelete" method="get">
            <td class="pt-5"><input type="hidden" name="id" value="{{$userData['id']}}">{{$userData['id']}}</td>
            <td class="pt-5"><input type="hidden" name="name" value="{{$userData['name']}}">{{$userData['name']}}</td>
            <td class="pt-5"><input type="hidden" name="email" value="{{$userData['email']}}">{{$userData['email']}}</td>
            <td class="pt-5"><input type="hidden" name="phone" value="{{$userData['phone']}}">{{$userData['phone']}}</td>

<td> <input type="submit" class="btn btn-outline-danger" name = "update" value = "Update"></td>
<td> <input type="submit" class="btn btn-outline-danger" name = "delete" value = "Delete"></td>

        </tr>
        @endforeach
</tbody>

</table>
</div>
@endsection