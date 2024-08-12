@extends('ui.master')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX=" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .scrollable-container {
        max-height: 90vh; /* Adjust the percentage or pixel value as needed */
        overflow-y: auto;
    }
</style>

        <div style="height: 50px"></div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="container mt-5 scrollable-container">
                @foreach ($notis as $noti)
                <div class="row shadow p-3 mb-3 bg-white rounded">
                    <div class="col-1">
                        <img src="{{ asset('storage/profile-images/'.$noti->user->image) }}" class="rounded-circle" style="height: 50px; width:50px;">
                    </div>
                    <div class="col-9">
                        {{$noti->text}}
                    </div>
                    <div class="col-2">
                        {{$noti->created_at}}
                    </div>
                </div>
                @endforeach
            </div>



</div>
@endsection
