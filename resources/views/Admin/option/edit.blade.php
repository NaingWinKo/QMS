@extends('Admin.master')
@section('content')
    <div class="page-wrapper mt-0 ">
        <div class="card  text-white" style="height: 100vh">
            {{-- <img class="w-100"  src="{{ asset('assets/img/2.jpg')}}" alt="Card image"
                style="height:720px; filter: blur(60px); object-fit: cover;">
            <div class="card-img-overlay"> --}}
                <!-- Page Content -->
                <div class="content container-fluid">
                    <!-- Page Header -->

                    <div class="card mt-3">

                    <div class="d-flex justify-content-center mt-4">
                        <h4>Edit Answer option</h4>
                    </div>
                        <form action="{{route('update.option', $option->id)}}" method="POST">@csrf @method('put')
                            <div class="card-body">
                                <label for="name"><b>Answer</b></label>
                                <input type="text" name="answer" id="answer"
                                    class="form-control @error('answer') is-invalid @enderror"
                                    value="{{ $option->answer }}">
                                @error('answer')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="number_input" class="text-muted"><b>Points</b></label>
                                    <input type="number" min="0" name="points" id="pointst"
                                        value="{{ $option->points ?? old('points') }}" class="form-control" />
                                </div>
                                @error('is_correct')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="card-body">
                                <label for="category"><b>Questions</b></label>
                                <select name="question_id" id="question_id" class="form-control">
                                    <option>Select Questions</option>
                                    @foreach ($questions as $question)
                                        <option value="{{ $question->id }}"
                                            {{ $question->id == $question->id ? 'selected' : '' }}>{{ $question->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="card-footer border-0">
                                <a href="{{ route('options') }}" class="btn wbtn text-white mb-3">Back</a>

                                <button class="btn wbtn text-white mb-3  float-end">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
