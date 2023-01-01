@extends('layout.app');
@section('content')
<form action="#" method="Post" enctype="multipart/form-data">
    @csrf
    @method('update')
    <div class="card w-25 m-auto p-3">
        <a href="{{route('Home')}}" class="btn btn-danger mb-3">Back</a>
        <marquee behavior="" class="mb-3 fs-4 bg-info" direction="">Update your data</marquee>
        <x-Input.commoninput :title="'Student Id update'" :type="'text'" :name="'student-id-update'" :placeholder="'Enter your student id'"/>
        <x-Input.commoninput :title="'Name update'" :type="'text'" :name="'name-update'" :placeholder="'Enter your name'"/>
        <x-Input.commoninput :title="'Home update'" :type="'text'" :name="'home-update'" :placeholder="'Enter your home'"/>
        <x-Input.image :title="'Student photo update'" :name="'photo-update'" :type="'file'"/>
        <button class="mt-3 btn btn-success">Sent</button>
    </div>
</form>
@endsection