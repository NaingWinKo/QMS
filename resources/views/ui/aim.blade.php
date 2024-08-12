@extends('ui.master')
@section('content')
 <!-- About Section -->


    <div style="height: 100px">

    </div>
    <div class="container mt-5" style="margin-bottom: 84px" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-2 content">
            <h3 class="pcolor fw-bold mb-5">ရည်ရွယ်ချက်</h3>

            <ul style="font-family: 'Bangers', cursive;color:rgb(0, 0, 0)">
                <li class="pcolor mb-4">Computer Science လေ့လာနေသော ကျောင်းသား ကျောင်းသူများအတွက် သက်ဆိုင်ရာ နယ်ပယ်အလိုက် အသီးသီးသော Practice Quiz များကို ‌လေ့ကျင်နိုင်စေရန် ရည်ရွယ်၍ ရေးသားထားပါသည်။
                </li>
                <li class="mb-4 pcolor">
                    များစွာသော လေ့ကျင့်မှုများမှ လိုအပ်သော ဗဟုသုတများစွာကိုရရှိပြီး Computer Science ကိုလေ့လာရာတွင် အထောက်အကူပြုစေရန်လည်း ရည်ရွယ်ပါသည်။
                </li>
                {{-- <li class="mb-1  pcolor">
                   
                </li> --}}

            </ul>

          </div>
          <div class="col-lg-6 order-1 order-lg-1">
            <img src="{{ asset('assets/img/code.jpg') }}" class="" style="width: 500px;height:400px"
                alt="">
        </div>

        </div>

        <div style="height: 159px">

        </div>


@endsection
