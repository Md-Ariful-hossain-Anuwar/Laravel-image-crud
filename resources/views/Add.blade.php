@extends('layout.app');
@section('content')
<form action="{{route('studentData')}}" method="Post" enctype="multipart/form-data">
    @csrf
    <div class="card w-25 m-auto p-3">
        <a href="{{route('Home')}}" class="btn btn-danger mb-3">Back</a>
        <marquee behavior="" class="mb-3 fs-4 bg-info" direction="">Entry your data</marquee>
        @error('id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <x-Input.commoninput :title="'Student Id'" :type="'text'" :name="'id'" :placeholder="'Enter your student id'"/>
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <x-Input.commoninput :title="'Name'" :type="'text'" :name="'name'" :placeholder="'Enter your name'"/>
        @error('home')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <x-Input.commoninput :title="'Home'" :type="'text'" :name="'home'" :placeholder="'Enter your home'"/>
        @error('image')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <x-Input.image :title="'Photo'" :type="'file'" :name="'image'"/>
        <button class="mt-3 btn btn-success">Sent</button>
    </div>
</form>
@endsection