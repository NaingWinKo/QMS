@extends('Admin.master')
@section('content')
    <div class="page-wrapper mt-0 ">
        <div class="card  text-black " style="height: 100vh">
            {{-- <img class="w-100" src="{{ asset('assets/img/2.jpg') }}" alt="Card image"
                style="height:720px; filter: blur(60px); object-fit: cover;">
            <div class="card-img-overlay"> --}}
                <!-- Page Content -->
                <div class="content container-fluid">
                    <!-- Page Header -->




                    <a href="{{ route('noti.create') }}" class="btn mt-3 btn-sm wbtn text-white mb-3"><i
                        class="fas fa-plus"></i>အသစ်ထည့်ရန်</a>
                    @if ($notis->isEmpty())
                        <p class="text-black fw-bold border p-2 rounded text-center ">ပေးပို့ထားသောNoti မရှိပါ!

                        </p>

                    @else
                        <table class="custom-table table-sm border-success table-hover small">
                            <thead class="border-success">
                                <tr>
                                    <th>စဉ်</th>
                                    <th>စာသား</th>
                                    <th>စီမံရန်</th>
                                </tr>
                            </thead>
                            <tbody class="border-success">
                                @php
                                    $offset = ($notis->currentPage() - 1) * $notis->perPage();
                                @endphp
                                @foreach ($notis as $index => $noti)
                                    <tr>
                                        <td>{{ $offset + $loop->iteration }}</td>

                                        <td>{{ $noti->text ?? 'N/A' }}</td>

                                        <td>
                                            <form action="{{route('noti.delete',$noti->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <a href="{{route('noti.edit',$noti->id)}}" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <button class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure to delete?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row mt-2 mb-5">
                            <div class="col-12 d-flex justify-content-center custom-pagination pagination">
                                {{ $notis->links() }}
                            </div>
                        </div>
                </div>
            </div>
            @endif
        @endsection
