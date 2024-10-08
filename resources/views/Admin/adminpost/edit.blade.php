@extends('Admin.master')
@section('content')
    <div class="page-wrapper mt-0">
        <div class="card  text-black" style="height: 100vh">
            {{-- <img class="w-100" src="{{ asset('assets/img/2.jpg')}}" alt="Card image"
            style="height:720px; filter: blur(60px); object-fit: cover;">
            <div class="card-img-overlay"> --}}
                <!-- Page Content -->
                <div class="content container">
                    <!-- Page Header -->
                    <div class="d-flex justify-content-between">
                        <h4>Postကိုပြုပြင်မည်</h4>
                    </div>
                    <div class="card mt-3 p-3">
                        <form action="{{route('admin.post.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label><b>Image</b></label>
                                <input type="file" name="image" class="form-control mb-2 @error('image') is-invalid @enderror">
                                @if(isset($post->image))
                                    <img src="{{ asset('storage/posts-images/' . $post->image) }}" class="rounded-circle" style="width: 80px; height:80px; object-fit:cover">
                                @endif
                                @error('image')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="card-body">
                                <label for="description"><b>Titleထည့်ရန်</b></label>
                                <input type="text" name="title" id="description" class="form-control @error('title') is-invalid @enderror"
                                placeholder="{{ old('title') ?? $post->title}}"></input>
                                @error('title')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="card-body">
                                <label for="description"><b>စာသားထည့်ရန်</b></label>
                                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                                placeholder="Enter post description">{{ old('description') ?? $post->description }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="card-footer border-0">
                                <a href="{{ route('admin.posts.list') }}" class="btn wbtn text-white mb-3">Back</a>

                                <button type="submit" class="btn wbtn text-white mb-3 float-end">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
