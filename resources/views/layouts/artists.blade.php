<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
      integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>

<hr class="text-light mt-5"/>

<div class="d-flex justify-content-between align-items-center">
    <div class="d-flex justify-content-center align-items-center text-light text-center">
        <i class="bi bi-music-note-beamed text-warning ms-1" style="font-size: 20px"></i>
        <h5>آخرین آرتیست ها</h5>
    </div>
    <a href="#" id="more" class="d-flex justify-content-center align-items-center text-light p-1 text-decoration-none">
        <small class="text-warning">همه آرتیست ها</small>
        <i class="bi bi-arrow-left text-warning me-1 mt-1" id="more-icon" style="font-size: 18px;"></i>
    </a>
</div>
<style>
    #more-icon {
        transition: all linear 0.1s;
    }

    #more:hover #more-icon {
        transform: translateX(-5px);
    }
</style>

<div class="swiper artistSwiper mt-5" style="height: 450px">
    <div class="swiper-wrapper" style="height: 300px;">

        @foreach(\App\Models\Artist::all() as $artist)
            <div class="card bg-dark text-light swiper-slide" style="min-width: 15rem; max-width: 15rem;">
                <a href="{{ route('artist', $artist) }}"><img src="/storage/artist-images/{{ $artist->image }}"
                                                              class="card-img-top" style="min-height: 15rem; max-height: 10rem" alt="..."></a>
                <div class="card-body">
                    <a href="{{ route('artist', $artist) }}" class="card-text text-decoration-none text-light"
                       style="font-size: 16px;">{{ $artist->name }}</a>
                </div>
            </div>
        @endforeach

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
    var swiper = new Swiper(".artistSwiper", {
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
