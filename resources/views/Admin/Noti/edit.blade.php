@extends('Admin.master')
@section('content')
<div class="page-wrapper mt-0 ">
    <div class="card  bg-white  text-black" style="height: 100vh">

    <div class="content container-fluid">
        <!-- Page Header -->


    <div class="card mt-3 shadow-lg">
        <div class="d-flex justify-content-center mt-4">
Edit Notification
</div>
        <form action="{{route('noti.update',$noti->id)}}" method="POST">@csrf @method('put')
            <div class="card-body">
                    <label for="name"><b>Text</b></label>
                    <input type="text" name="text" id="name" class="form-control @error('text') is-invalid @enderror" value="{{$noti->text}}">
                    @error('text')
                     <span class="invalid-feedback">{{$message}}</span>
                    @enderror
            </div>


            <div class="card-footer border-0">
                <a href="{{route('noti.index')}}" class="btn  wbtn text-white mb-3">Back</a>

                <button class="btn wbtn text-white mb-3 float-end">Update</button>
            </div>
        </form>
    </div>
    </div></div>
@endsection
