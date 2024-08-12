@extends('Admin.master')
@section('content')

<style>
    /* Add your custom styles here */
</style>
<div class="page-wrapper mt-0 ">
    <div class="card  text-black" style="height: 100vh">
        {{-- <img class="w-100" src="{{ asset('assets/img/2.jpg')}}" alt="Card image"
        style="height:720px; filter: blur(60px); object-fit: cover;">
        <div class="card-img-overlay"> --}}
            <!-- Page Content -->
            <div class="content container">
                <!-- Page Header -->


                <div class="row">

                    <div class="col-2"></div>
                    <div class="card mt-3 col-8 shadow-lg">
                     <form action="{{route('noti.store')}}" method="POST" enctype="multipart/form-data">
                         @csrf
                         <div class="card-body">
                             <h4 class="text-center text-muted font-weight-bold">Add New Notification</h4>
                             <div class="mb-3">
                                 <label for="question_text" class="text-muted"><b>Enter Text</b></label>
                                 <input type="text"  name="text" id="name" class="form-control @error('text') is-invalid @enderror" placeholder="Enter  text">
                                 @error('text')
                                     <span class="invalid-feedback">{{ $message }}</span>
                                 @enderror
                             </div>

                         </div>
                         <div class="card-footer border-0">
                             <a href="{{ route('noti.index') }}" class="btn wbtn text-white mb-3 border-success">Back</a>

                             <button type="submit" class="btn wbtn text-white border-success float-end mb-3">Add</button>
                         </div>
                     </form>
                 </div>
                 <div class="col-2"></div>
                 </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
