<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<hr class="text-light mt-5"/>

<div class="text-center text-light my-3">
    <h1 class="h3 fw-bold">آخرین موزیک ها</h1>
    <div class="col-lg-6 mx-auto">
        <p class="h5 text-secondary">آخرین موزیک های منتشر شده را از این قسمت گوش فرا دهید...</p>
    </div>
</div>

<div class="swiper songSwiper mt-5" style="height: 450px">
    <div class="swiper-wrapper" style="height: 400px;">

        <div class="card bg-dark text-light swiper-slide" style="min-width: 15rem; max-width: 15rem;">
            <a href="#"><img src="images/Masoud-Sadeghloo-Labod.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <a href="#" class="card-text text-decoration-none text-light text-light" style="font-size: 16px;">لورم ایپسوم متن ساختگی برای
                    طراحان گرافیک و
                    برنامه نویسان
                    است.</a>
            </div>
        </div>

        <div class="card bg-dark text-light swiper-slide" style="min-width: 15rem; max-width: 15rem;">
            <a href="#"><img src="images/Masoud-Sadeghloo-Labod.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <a href="#" class="card-text text-decoration-none text-light" style="font-size: 16px;">لورم ایپسوم متن ساختگی برای
                    طراحان گرافیک و
                    برنامه نویسان
                    است.</a>
            </div>
        </div>

        <div class="card bg-dark text-light swiper-slide" style="min-width: 15rem; max-width: 15rem;">
            <a href="#"><img src="images/Masoud-Sadeghloo-Labod.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <a href="#" class="card-text text-decoration-none text-light" style="font-size: 16px;">لورم ایپسوم متن ساختگی برای
                    طراحان گرافیک و
                    برنامه نویسان
                    است.</a>
            </div>
        </div>

        <div class="card bg-dark text-light swiper-slide" style="min-width: 15rem; max-width: 15rem;">
            <a href="#"><img src="images/Masoud-Sadeghloo-Labod.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <a href="#" class="card-text text-decoration-none text-light" style="font-size: 16px;">لورم ایپسوم متن ساختگی برای
                    طراحان گرافیک و
                    برنامه نویسان
                    است.</a>
            </div>
        </div>

        <div class="card bg-dark text-light swiper-slide" style="min-width: 15rem; max-width: 15rem;">
            <a href="#"><img src="images/Masoud-Sadeghloo-Labod.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <a href="#" class="card-text text-decoration-none text-light" style="font-size: 16px;">لورم ایپسوم متن ساختگی برای
                    طراحان گرافیک و
                    برنامه نویسان
                    است.</a>
            </div>
        </div>

        <div class="card bg-dark text-light swiper-slide" style="min-width: 15rem; max-width: 15rem;">
            <a href="#"><img src="images/Masoud-Sadeghloo-Labod.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <a href="#" class="card-text text-decoration-none text-light" style="font-size: 16px;">لورم ایپسوم متن ساختگی برای
                    طراحان گرافیک و
                    برنامه نویسان
                    است.</a>
            </div>
        </div>

        <div class="card bg-dark text-light swiper-slide" style="min-width: 15rem; max-width: 15rem;">
            <a href="#"><img src="images/Masoud-Sadeghloo-Labod.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <a href="#" class="card-text text-decoration-none text-light" style="font-size: 16px;">لورم ایپسوم متن ساختگی برای
                    طراحان گرافیک و
                    برنامه نویسان
                    است.</a>
            </div>
        </div>

        <div class="card bg-dark text-light swiper-slide" style="min-width: 15rem; max-width: 15rem;">
            <a href="#"><img src="images/Masoud-Sadeghloo-Labod.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <a href="#" class="card-text text-decoration-none text-light" style="font-size: 16px;">لورم ایپسوم متن ساختگی برای
                    طراحان گرافیک و
                    برنامه نویسان
                    است.</a>
            </div>
        </div>

    </div>
    <div class="swiper-button-next text-light"></div>
    <div class="swiper-button-prev text-light"></div>
</div>

<style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<script>
    var swiper = new Swiper(".songSwiper", {
        slidesPerView: 4,
        centeredSlides: true,
        spaceBetween: 30,
        grabCursor: true,
        loop: true,
        autoplay: true,

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
