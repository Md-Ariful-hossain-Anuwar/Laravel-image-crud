@extends('layout.app');
@section('content')
    
<div class="container">
    <div class="d-flex justify-content-between">
        <a href="{{route('addDataPage')}}" class="btn btn-primary">Add Data</a>
        <a href="#" class="btn btn-info">Dowload All data</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th>Student Id</th>
            <th>Name</th>
            <th>Home</th>
            <th>Photo</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>20231</td>
            <td>Akash</td>
            <td>mymensingh</td>
            <td>Photo</td>
            <td>
                <div class="gap-3 d-flex">
                    <a href="{{route('addPage')}}" class="btn btn-info">Edit</a>
                    <a href="#" class="btn btn-danger" onclick="return confirm('Are you sure you want to Delete')">Delete</a>
                </div>
            </td>
          </tr>
        </tbody>
      </table>
</div>


@endsection