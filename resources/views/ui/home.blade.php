@extends('ui.master')
@section('content')
<style>

</style>
    <!-- /Hero Section -->
<div style="height: 50px">

</div>



    <!-- About Section -->
   <!-- /About Section -->
    <!-- Features Section -->
    <section id="features" class="features section">

        <div class="container">
            <div style="height: 20px">

            </div>

            <div class="row gy-4">
                <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="{{asset('assets/img/code2.png')}}"
                        class="p-4" alt=""></div>
                <div class="col-lg-6">
                    <div style="height: 20px">

                    </div>

                    <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <i class="fas fa-code"  style=" color: rgb(4, 44, 71)"></i>
                        <div>

                            <p class="pcolor fw-bold" style=" color: rgb(4, 44, 71)">"Computer Science Quiz Management System မှ ကြိုဆိုပါတယ်"</p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <i class="fas fa-laptop-code" style=" color: rgb(4, 44, 71)"></i>
                        <div>

                            <p class="pcolor fw-bold" style=" color: rgb(4, 44, 71)">"Practice စတင်ရန်အတွက်
                                Get started ကိုနှိပ် ပြီးကြိုက်နှစ်သက်ရာ Category တစ်ခုကို ရွေးချယ်နိုင်ပါသည်"</p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <i class="fas fa-terminal"  style=" color: rgb(4, 44, 71)"></i>
                        <div>

                            <p class="pcolor fw-bold" style=" color: rgb(4, 44, 71)">
                                "Category တစ်ခုစီအတွက် မေးခွန်း (၁၀)ခု ပြင်ဆင်ပေးထားပီး
                                မေးခွန်းများဖြေဆိုနိုင်ရန်အချိန် (၁၀)မီးနစ် အချိန်ရပါသည်"
                            </p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
                        <i class="fas fa-code-branch"  style=" color: rgb(4, 44, 71)"></i>
                        <div>

                            <p class="pcolor fw-bold" style=" color: rgb(4, 44, 71)">
                                "ကောင်းမွန်သော Practice လုပ်ရန်အတွက် စတင်လိုက်ပါ"</p>
                        </div>
                    </div><!-- End Features Item-->

                </div>
            </div>

        </div>


    <!-- Clients Section -->
    <section id="clients" class="clients section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "spaceBetween": 40
              },
              "480": {
                "slidesPerView": 3,
                "spaceBetween": 60
              },
              "640": {
                "slidesPerView": 4,
                "spaceBetween": 80
              },
              "992": {
                "slidesPerView": 6,
                "spaceBetween": 120
              }
            }
          }
        </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <a href="https://www.w3schools.com/html/default.asp"><img src="assets/img/clients/1.png"
                                class="img-fluid" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.w3schools.com/css/default.asp"><img src="assets/img/clients/2.png"
                                class="img-fluid" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.w3schools.com/js/default.asp"><img
                                src="{{ asset('assets/img/clients/3.png') }}" class="img-fluid" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.php.net/"><img src="{{ asset('assets/img/clients/4.png') }}" class="img-fluid"
                                alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://laravel.com/docs/11.x/readme"><img src="assets/img/clients/5.jpg" class="img-fluid"
                                alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a
                            href="https://en.wikipedia.org/wiki/C_Sharp_(programming_language)#:~:text=C%23%20(%2F%CB%8Csi%CB%90%20%CB%88,Paradigm"><img
                                src="assets/img/clients/6.png" class="img-fluid" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.java.com/en/"><img src="assets/img/clients/7.png" class="img-fluid"
                                alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.python.org/"><img src="assets/img/clients/8.png" class="img-fluid"
                                alt=""></a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Clients Section -->



@endsection
