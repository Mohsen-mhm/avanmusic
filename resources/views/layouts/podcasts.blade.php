<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
      integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Acme&display=swap');
</style>

<hr class="text-light mt-5"/>

<div class="d-flex justify-content-between align-items-center" id="last-songs">
    <div class="d-flex justify-content-center align-items-center text-light text-center">
        <i class="bi bi-music-note-beamed text-warning ms-1" style="font-size: 20px"></i>
        <h5>برترین پادکست ها</h5>
    </div>
    <a href="{{ route('podcast.all') }}" id="more"
       class="d-flex justify-content-center align-items-center text-light p-1 text-decoration-none">
        <small class="text-warning">همه پادکست ها</small>
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

<div class="d-flex justify-content-center align-items-center mt-3">
    <p class="text-light">به پر بازدید ترین پادکست ها گوش دهید.</p>
</div>

<div class="row">
    @foreach(\App\Models\Podcast::latest()->take(3)->get() as $podcast)
        <div class="col-md-4 d-flex justify-content-center align-items-center my-2">
            <div class="card bg-dark text-light" style="min-width: 15rem; max-width: 15rem;">
                <a href="{{ route('podcast', $podcast) }}"><img src="/storage/podcast-covers/{{ $podcast->cover }}"
                                                          class="card-img-top"
                                                          style="min-height: 15rem; max-height: 10rem"
                                                          alt="..."></a>
                <div class="card-body">
                    <a href="{{ route('podcast', $podcast) }}" class="card-text text-decoration-none text-light"
                       style="font-size: 18px; font-family: 'Acme';">{{ $podcast->name }}</a>
                </div>
            </div>
        </div>
    @endforeach
</div>


<style>
    .card {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
