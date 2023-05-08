<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<div class="swiper songSwiper mt-5" style="height: 500px">
    <div class="swiper-wrapper" style="height: 450px;">
        <div class="card bg-dark text-light swiper-slide" style="width: 18rem;">
            <a href="#"><img src="images/Masoud-Sadeghloo-Labod.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-text">Some quick example text</a>
            </div>
        </div>

        <div class="card bg-dark text-light swiper-slide" style="width: 18rem;">
            <a href="#"><img src="images/Masoud-Sadeghloo-Labod.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-text">Some quick example text</a>
            </div>
        </div>

        <div class="card bg-dark text-light swiper-slide" style="width: 18rem;">
            <a href="#"><img src="images/Masoud-Sadeghloo-Labod.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-text">Some quick example text</a>
            </div>
        </div>

        <div class="card bg-dark text-light swiper-slide" style="width: 18rem;">
            <a href="#"><img src="images/Masoud-Sadeghloo-Labod.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-text">Some quick example text</a>
            </div>
        </div>

        <div class="card bg-dark text-light swiper-slide" style="width: 18rem;">
            <a href="#"><img src="images/Masoud-Sadeghloo-Labod.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-text">Some quick example text</a>
            </div>
        </div>

        <div class="card bg-dark text-light swiper-slide" style="width: 18rem;">
            <a href="#"><img src="images/Masoud-Sadeghloo-Labod.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-text">Some quick example text</a>
            </div>
        </div>

        <div class="card bg-dark text-light swiper-slide" style="width: 18rem;">
            <a href="#"><img src="images/Masoud-Sadeghloo-Labod.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-text">Some quick example text</a>
            </div>
        </div>

        <div class="card bg-dark text-light swiper-slide" style="width: 18rem;">
            <a href="#"><img src="images/Masoud-Sadeghloo-Labod.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-text">Some quick example text</a>
            </div>
        </div>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
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
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
