@extends('Admin.master')
@section('content')

<style>
    /* Add your custom styles here */
</style>
<div class="page-wrapper mt-0 ">
       <div class="card bg-white text-black" style="height: 100vh">

        {{-- <img class="w-100" src="{{ asset('assets/img/2.jpg')}}" alt="Card image" style="height: 640px; filter: blur(10px); object-fit: cover;">
        <div class="card-img-overlay"> --}}
            <!-- Page Content -->
            <div class="content container">
                <!-- Page Header -->
                <div class="d-flex justify-content-between">
                </div>
                <div class="card mt-3">
                    
                    <form action="{{route('store.option')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h4 class="text-center text-muted font-weight-bold">Add New Option</h4>
                            <div class="mb-3">
                                <label for="question_text" class="text-muted"><b>Answer Options </b></label>
                                <input type="text" value="{{ old('answer') }}" name="answer" id="answer" class="form-control @error('answer') is-invalid @enderror" placeholder="Enter answer text">
                                @error('answer')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="question_id" class="text-muted"><b>Question</b></label>
                                <select name="question_id" id="question_id" class="form-control">
                                    @foreach ($questions as $q)
                                      <option value="{{ $q->id}}">{{  $q->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="number_input" class="text-muted"><b>Points</b></label>
                                <input type="number" min="0" name="points" id="pointst" class="form-control" />
                            </div>
                        </div>
                        <div class="card-footer border-0">
                            <a href="{{route('options')}}" class="btn wbtn text-white mb-3 border-success">Back</a>

                            <button type="submit" class="btn wbtn text-white border-success mb-3 float-end">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
