@extends('Admin.master')
@section('content')
    <div class="page-wrapper mt-0">
        <div class="card text-black" style="height: 100vh">
            <!-- Page Content -->
            <div class="content container">
                <!-- Page Header -->
                <div class="d-flex justify-content-between">
                    <h4>Post အသစ်တစ်ခုဖန်တီးမည်</h4>
                </div>
                <div class="card mt-3">
                    <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <label for="image"><b>ပုံထည့်ရန်</b></label>
                            <input type="file" name="image"
                                class="form-control @error('image') is-invalid @enderror"
                                placeholder="ပုံထည့်ရန်">
                            @error('image')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="card-body">
                            <label for="title"><b>Title ထည့်ရန်</b></label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                placeholder="Enter title" />
                            @error('title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="card-body">
                            <label for="description"><b>စာသားထည့်ရန်</b></label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                placeholder="Enter description"></textarea>
                            @error('description')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="card-footer border-0">
                            <a href="{{ route('admin.posts.list') }}" class="btn wbtn text-white mb-3">Back</a>
                            <button class="btn wbtn text-white mb-3 float-end">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
