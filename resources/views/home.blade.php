@extends('layouts.app')

@section('content')
    <div class="container" dir="rtl">
        <!-- sliders -->
        @include('layouts.carousel')

        <!-- recent songs -->
        @include('layouts.songs')

        <div class="main main-raised">
            <div class="container">
                <div class="row text-center text-light d-flex justify-content-center align-items-center mb-4">
                    <div class="col-md-10 ml-auto mr-auto">
                        <h2 class="title mb-3">بهترین تجربه</h2>
                        <h5 class="description" style="font-size: 16px">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</h5>
                    </div>
                </div>
                <div class="section d-flex justify-content-center align-items-center text-center text-light">

                    <div class="features">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-info">
                                        <img src="/images/microphone.png" alt="artist" class="w-50 my-3">
                                    </div>
                                    <h4 class="info-title">Free Chat</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines
                                        about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-success">
                                        <img src="/images/radio.png" alt="artist" class="w-50 my-3">
                                    </div>
                                    <h4 class="info-title">Verified Users</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines
                                        about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-danger">
                                        <img src="/images/handphones.png" alt="artist" class="w-50 my-3">
                                    </div>
                                    <h4 class="info-title">Fingerprint</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines
                                        about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- recent albums -->
        @include('layouts.albums')

        <!-- recent artists -->
        @include('layouts.artists')

        <!-- Footer -->
        @include('layouts.footer')
    </div>
@endsection
