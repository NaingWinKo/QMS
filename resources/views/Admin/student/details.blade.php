@extends('Admin.master')
@section('content')
    <div class="card  text-black">
        {{-- <img class="w-100" src="{{ asset('assets/img/2.jpg') }}" alt="Card image"
            style="height: 640px; filter: blur(50px); object-fit: cover;"> --}}
        <div class="card-img-overlay">
            <div class="container my-3 d-flex justify-content-center mt-2">


            </div>
            <div >

                <div class="row justify-content-center">
                    <div class="col-md-6 mb-5">
                        <div class="border  pt-3 mt-3 rounded shadow">

                            <ul class="list-group  list-group-flush p-3">

                                <div class="mb-3 text-center">
                                    @if($student->image)
                                    <img src="{{ asset('storage/images/'.$student->image) }}" class="profileimg rounded-circle" style="width: 200px; height:200px; object-fit:cover">
                                @else
                                    <p class="text-white"><b>No photo available !</b></p>
                                @endif
                                </div>

                                <li class="list-group-item bg-transparent  text-black"><b>Name :</b>&nbsp;
                                    {{ $student->name }}</li>
                                <li class="list-group-item bg-transparent text-black"><b>Email :</b>&nbsp;
                                    {{ $student->email }}</li>
                                <li class="list-group-item bg-transparent text-black"><b>Role :</b>&nbsp;
                                    {{ $student->role }}</></li>
                                <li class="list-group-item bg-transparent text-black"><b>Score :</b>&nbsp;
                                    <a href="{{ route('each.student.score',$student->id) }}" class="text-decoration-none text-black">ရရှိခဲ့သော အမှတ်များကို ကြည့်ရန်</a></li>

                                    <div>
                                        <a href="{{ route('student.list') }}" class="btn btn-sm wbtn text-white border mt-3">Back</a>
                                        {{-- <a href="{{ route('admin.index')}}" class="btn btn-sm wbtn text-white mb-3">Back</a> --}}

                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Modal -->


                </div>
            </div>
        </div>
    </div>
@endsection
