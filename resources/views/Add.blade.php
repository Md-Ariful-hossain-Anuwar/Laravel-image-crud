@extends('layout.app');
@section('content')
<form action="#" method="Post" enctype="multipart/form-data">
    @csrf
    <div class="card w-25 m-auto p-3">
        <a href="{{route('Home')}}" class="btn btn-danger mb-3">Back</a>
        <marquee behavior="" class="mb-3 fs-4 bg-info" direction="">Entry your data</marquee>
        <x-Input.commoninput :title="'Student Id'" :type="'text'" :name="'student-id'" :placeholder="'Enter your student id'"/>
        <x-Input.commoninput :title="'Name'" :type="'text'" :name="'name'" :placeholder="'Enter your name'"/>
        <x-Input.commoninput :title="'Home'" :type="'text'" :name="'home'" :placeholder="'Enter your home'"/>
        <x-Input.image :title="'Student photo'" :name="'photo'" :type="'file'"/>
        <button class="mt-3 btn btn-success">Sent</button>
    </div>
</form>
@endsection