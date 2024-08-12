@extends('Admin.master')
@section('content')
<div class="page-wrapper mt-0 ">
    <div class="card bg-white text-black" style="height: 100vh">
        {{-- <img class="w-100"  src="{{ asset('assets/img/2.jpg')}}" alt="Card image"
        style="height:720px; filter: blur(60px); object-fit: cover;">
        <div class="card-img-overlay"> --}}
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->


    <div class="card mt-5">
        <div class="d-flex justify-content-center mt-4">
            <h4 class="float-center">Edit Category</h4>
        </div>
        <form action="{{route('update.category',$category->id)}}" method="POST">@csrf @method('put')
            <div class="card-body">
                    <label for="name"><b>Name</b></label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{$category->name}}">
                    @error('name')
                     <span class="invalid-feedback">{{$message}}</span>
                    @enderror
            </div>
            <div class="card-footer border-0">
                <a href="{{route('categories')}}" class="btn wbtn text-white mb-3">Back</a>

                <button class="btn wbtn text-white float-end mb-3">Update</button>
            </div>
        </form>
    </div>
    </div></div>
@endsection
