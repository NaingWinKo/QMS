@extends('Admin.master')
@section('content')
<div class="page-wrapper mt-0 ">
    <div class="card  bg-white text-black" style="height: 100vh">
        {{-- <img class="w-100" src="{{ asset('assets/img/2.jpg')}}" alt="Card image"
            style="height: 640px; filter: blur(10px); object-fit: cover;">
        <div class="card-img-overlay">
            <!-- Page Content -->
            <div class="content container-fluid"> --}}
                <!-- Page Header -->
                <div class="container">
                    <div class=" page-header">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <h3>Options of -{{$question->name}}</h3>
                            </div>
                            <div class="col-md-6">
    
                                <a href="{{route('add.option')}}" class="btn btn-sm wbtn text-white mb-3"><i
                                        class="fas fa-plus"></i>အသစ်ထည့်ရန်</a>
                                <a href="{{route('questions')}}" class="btn btn-sm wbtn text-white mb-3 float-end">Back</a>
                            </div>
                        </div>
                    </div>
    
    
    
    
    
                    @if ($options->isEmpty())
                    <p class="text-danger fw-bold border p-2 rounded text-center my-5">No Answers has found ! <a
                            href="{{route('add.option')}}" class="text-decoration-underline"> Click here to create</a></p>
                    @else
                    <table class="custom-table  border-success table-hover">
                        <thead class=" border-success">
                            <tr>
                                <th>စဉ်</th>
                                <th>ရွေးချယ်ရန်အဖြေများ</th>
                                <th>ပေးမှတ်</th>
    
                            </tr>
                        </thead>
                        <tbody class=" border-success">
                            @foreach ($options as $index => $a)
                            <tr>
                                <td>{{ ++ $index}}</td>
                                <td>{{ $a->answer}}</td>
                                <td>{{ $a->points}}</td>
    
                            </tr>
                            @endforeach
                        </tbody>
                    </table> </div>

            </div>
        </div>
        @endif
        @endsection