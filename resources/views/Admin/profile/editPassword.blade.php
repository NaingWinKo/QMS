@extends('Admin.master')
@section('content')

<div class="page-wrapper mt-0 ">
    <div class="card bg-white text-black" style="height: 100vh">
        {{-- <img class="w-100" src="{{ asset('assets/img/2.jpg')}}" alt="Card image" style="height: 640px; filter: blur(10px); object-fit: cover;">
        <div class="card-img-overlay"> --}}
    <!-- Page Content -->
    <div class="content container">

   <div class="card mt-3 shadow-lg ">
    <div class="d-flex justify-content-center mt-4">
        <h4>Change Password</h4>
        </div>
    <form action="{{route('change.password.admin')}}" method="POST">@csrf
        <div class="card-body">
            <div class="mb-3">
                <label for="title"><b>Old_password</b></label>
                <input type="text" name="old_password"  class="form-control @error('old_password') is-invalid @enderror">
                @error('old_password')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title"><b>New_password</b></label>
                <input type="text" name="new_password"  class="form-control @error('new_password') is-invalid @enderror">
                @error('new_password')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title"><b>Comfirm New_password</b></label>
                <input type="text" name="new_password_confirmation"  class="form-control">

            </div>


        </div>
        <div class="card-footer border-0">
            <a href="{{ route('admin.index')}}" class="btn btn-sm wbtn text-white mb-3">Back</a>
            <button class="btn btn-sm wbtn text-white float-end">Update</button>

        </div>
    </form>
</div>
    </div></div>
@endsection
