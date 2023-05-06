@extends('layouts.app')

@section('content')
<div class="container" dir="rtl">
    <!-- sliders -->
    <section class="container pt-0">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="./pages/music.html">
                        <img src="images/zedbazi.jpg" class="col  d-block img-fluid ax w-100 opacity-100" alt="...">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="./pages/music.html">
                        <img src="images/maxresdefault.jpg" class="col d-block img-fluid ax w-100" alt="...">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="./pages/music.html">
                        <img src="images/maxresdefault%20(1).jpg" class="col d-block img-fluid ax w-100" alt="...">
                    </a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- zirkhat 2  -->
    <section class="container">
        <h5 class=" text-light pt-2  ">
            پلی لیست
            <div class="text-muted pt-1">
                <h6>پلی لیست ها هرماه بروز میشوند!
                </h6>
            </div>
        </h5>
    </section>
    <!-- box playlist -->
    <section class="container pt-5 ">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-4">
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/cafee.jpg" class="card-img-top img-fluid imgbox" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-nowrap">Cafe music</h5>
                        <h6 class="card-text text-nowrap">موزیک های کافه ...</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/light%20music.jpg" class="card-img-top img-fluid imgbox" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-nowrap">Light music</h5>
                        <h6 class="card-text text-nowrap"> موزیک های ملایم ...</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/energy.jpg" class="card-img-top img-fluid imgbox" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-nowrap">Positive energy </h5>
                        <h6 class="card-text text-nowrap">موزیک انرژی مثبت...</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/driving%20music.jpg" class="card-img-top img-fluid imgbox" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-nowrap">Driving music</h5>
                        <h6 class="card-text text-nowrap">موزیک های ماشین...</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/top%2010.jpg" class="card-img-top img-fluid imgbox" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-nowrap">Top this month</h5>
                        <h6 class="card-text text-nowrap">10موزیک برتر ماه...</h6>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/sonati-music.jpg" class="card-img-top img-fluid imgbox" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-nowrap">Sonati music</h5>
                        <h6 class="card-text text-nowrap">موزیک های سنتی...</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Love-Music.jpg" class="card-img-top img-fluid imgbox" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-nowrap">Lovely music</h5>
                        <h6 class="card-text text-nowrap">موزیک عاشقانه...</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/rap-music.jpg" class="card-img-top img-fluid imgbox bg-dark" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-nowrap">Rap music</h5>
                        <h6 class="card-text text-nowrap">موزیک های رپ...</h6>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/rock.jpg" class="card-img-top img-fluid imgbox " alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-nowrap">Rock music</h5>
                        <h6 class="card-text text-nowrap">موزیک های راک ...</h6>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/jazz%20music.jpg" class="card-img-top img-fluid imgbox " alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-nowrap">Jazz music</h5>
                        <h6 class="card-text text-nowrap">موزیک های جاز ...</h6>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <hr class="text-light ">

    <!-- zirkhat 3 -->
    <section class="container">
        <h5 class=" text-light pt-2">
            پادکست
        </h5>
    </section>
    <!-- box padkast -->
    <section class="container pt-5 ">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-6 g-4 ">
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Dj-As-Atish-Bazi-3.jpg" class="card-img-top img-fluid imgbox2" alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap ">Atish Bazi 3</h6>
                        <h6 class="card-text text-muted text-nowrap">Dj As</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/music%20box.jpg" class="card-img-top img-fluid imgbox2" alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Music Box</h6>
                        <h6 class="card-text text-muted text-nowrap">Dj Roham</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/DJ-Danial.jpg" class="card-img-top img-fluid imgbox2" alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Dreamy Night </h6>
                        <h6 class="card-text text-muted text-nowrap">Dj Danial</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/darictone.jpg" class="card-img-top img-fluid imgbox2" alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">DarictonePodcast</h6>
                        <h6 class="card-text text-muted text-nowrap">Ali F</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/DJ-Morir.jpg" class="card-img-top img-fluid imgbox2" alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Delo Delbar</h6>
                        <h6 class="card-text text-muted text-nowrap">Dj Mori</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Dj-As-Atish-Bazi-6.jpg" class="card-img-top img-fluid imgbox2" alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Atish Bazi 6</h6>
                        <h6 class="card-text text-muted text-nowrap">Dj As</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <nav aria-label="Page navigation example">
        <ul class="pagination pt-4 d-flex justify-content-center align-items-center">
            <li class="page-item">
                <a class="page-link bg-dark" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link bg-dark" href="#">1</a></li>
            <li class="page-item"><a class="page-link bg-dark" href="#">2</a></li>
            <li class="page-item"><a class="page-link bg-dark" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link bg-dark" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>


    <hr class="text-light">

    <!-- zirkhat 4 -->
    <section class="container">
        <h5 class=" text-light pt-2 ">
            محبوب ترین خواننده ها
        </h5>
    </section>
    <!-- box Artist -->
    <section class="container pt-5 ">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Shadmehr%20Aghili%20-%20Mahal.jpg" class="card-img-top img-fluid imgbox"
                             alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-nowrap">Shadmehr aghili</h5>
                        <h6 class="card-text text-nowrap">موزیک های شادمهر عقیلی...</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/shayea.jpg" class="card-img-top img-fluid imgbox" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-nowrap">Shayea</h5>
                        <h6 class="card-text text-nowrap">موزیک های محمدرضا شایع ...</h6>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/hidden.jpg" class="card-img-top img-fluid imgbox" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-nowrap">Mehrad hidden</h5>
                        <h6 class="card-text text-nowrap">موزیک های مهراد هیدن ...</h6>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Mohsen2.jpg" class="card-img-top img-fluid imgbox" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-nowrap">Mohsen yeganeh</h5>
                        <h6 class="card-text text-nowrap">موزیک های محسن یگانه ...</h6>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <nav aria-label="Page navigation example">
        <ul class="pagination pt-4 d-flex justify-content-center align-items-center">
            <li class="page-item">
                <a class="page-link bg-dark" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link bg-dark" href="#">1</a></li>
            <li class="page-item"><a class="page-link bg-dark" href="#">2</a></li>
            <li class="page-item"><a class="page-link bg-dark" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link bg-dark" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>


    <hr class="text-light">

    <!-- zirkhat 5 -->
    <section class="container">
        <h5 class=" text-light pt-2">
            آلبوم ها
        </h5>
    </section>
    <!-- box Album -->
    <section class="container pt-5 ">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Hidden-Zoozanaghe.jpg" class="card-img-top img-fluid imgbox" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-nowrap"> Hidden-Zoozanaghe</h5>
                        <h6 class="card-text text-nowrap">برای مشاهده آلبوم کلیک کنید..</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/mojazjpg.jpg" class="card-img-top img-fluid imgbox" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-nowrap">Hichkas-Mojaz</h5>
                        <h6 class="card-text text-nowrap">برای مشاهده آلبوم کلیک کنید...</h6>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Ali%20Zand%20-%20Vakili%20Dashte%20Jonoun.jpg"
                             class="card-img-top img-fluid imgbox"
                             alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-nowrap"> Zand vakili-Dasht</h5>
                        <h6 class="card-text text-nowrap">برای مشاهده آلبوم کلیک کنید...</h6>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/ehsan%20daryadel.jpg" class="card-img-top img-fluid imgbox" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-nowrap"> Daryadel-Khodet</h5>
                        <h6 class="card-text text-nowrap">برای مشاهده آلبوم کلیک کنید...</h6>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <nav aria-label="Page navigation example">
        <ul class="pagination pt-4 d-flex justify-content-center align-items-center">
            <li class="page-item">
                <a class="page-link bg-dark" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link bg-dark" href="#">1</a></li>
            <li class="page-item"><a class="page-link bg-dark" href="#">2</a></li>
            <li class="page-item"><a class="page-link bg-dark" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link bg-dark" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>


    <hr class="text-light">

    <!-- zirkhat 6 -->
    <section class="container">
        <h5 class=" text-light pt-2">
            موزیک ترکی
        </h5>
    </section>
    <!-- Box Torki -->
    <section class="container pt-5 ">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-6 g-4 ">
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/lyas-Yalcintas-Ask-Tohumu.jpg" class="card-img-top img-fluid imgbox2"
                             alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">
                            Aşk Tohumu
                        </h6>
                        <h6 class="card-text text-muted text-nowrap"> Ilyas Yalcintas</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/aysegul-coskun.jpg" class="card-img-top img-fluid imgbox2" alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Deliriyorum</h6>
                        <h6 class="card-text text-muted text-nowrap">Aysegul Coskun
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Erdem-Kinay-Optum.jpg" class="card-img-top img-fluid imgbox2" alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Optum</h6>
                        <h6 class="card-text text-muted text-nowrap">Erdem Kinay</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Yalin-O-Yaz-Bu-Yaz.jpg" class="card-img-top img-fluid imgbox2" alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">O Yaz Bu Yaz</h6>
                        <h6 class="card-text text-muted text-nowrap">Yalin</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Bir-Alo-De-ft.-Yasar-Ipek-Elif-Buse-Dogan2.jpg"
                             class="card-img-top img-fluid imgbox2"
                             alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Bir Alo De
                        </h6>
                        <h6 class="card-text text-muted text-nowrap">Elif Buse Doğan
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Semicenk-Mustafa-Ceceli-Dayan.jpg" class="card-img-top img-fluid imgbox2"
                             alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Dayan</h6>
                        <h6 class="card-text text-muted text-nowrap">Semicek & Mustfa</h6>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <nav aria-label="Page navigation example">
        <ul class="pagination pt-4 d-flex justify-content-center align-items-center">
            <li class="page-item">
                <a class="page-link bg-dark" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link bg-dark" href="#">1</a></li>
            <li class="page-item"><a class="page-link bg-dark" href="#">2</a></li>
            <li class="page-item"><a class="page-link bg-dark" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link bg-dark" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>

    <hr class="text-light">

    <!-- zirkhat 7 -->
    <section class="container">
        <h5 class=" text-light pt-2">
            موزیک ایرانی
        </h5>
    </section>
    <!-- Box irani -->
    <section class="container pt-5 ">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-4 ">
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Mohammad-Lotfi-Delam-Darya-Mikhad.jpg"
                             class="card-img-top img-fluid imgbox2"
                             alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">
                            Delam Draya Mikhad
                        </h6>
                        <h6 class="card-text text-muted text-nowrap">Mohammad Lotfi
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Xaniar-Cheraghaye-Shahr.jpg" class="card-img-top img-fluid imgbox2"
                             alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Cheraghaye Shahr</h6>
                        <h6 class="card-text text-muted text-nowrap">Xaniar

                        </h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Ali-Abdolmaleki-Jang.jpg" class="card-img-top img-fluid imgbox2" alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Jang</h6>
                        <h6 class="card-text text-muted text-nowrap">Ali Abdolmaleki</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Sina-Parsian-Khali.jpg" class="card-img-top img-fluid imgbox2" alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Khali</h6>
                        <h6 class="card-text text-muted text-nowrap">Sina Parsian</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Ehsan-Daryadel-Leila.jpg" class="card-img-top img-fluid imgbox2" alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Leila
                        </h6>
                        <h6 class="card-text text-muted text-nowrap">Ehsan Daryadel
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Masoud-Sadeghloo-Labod.jpg" class="card-img-top img-fluid imgbox2"
                             alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Labod</h6>
                        <h6 class="card-text text-muted text-nowrap">Masoud Sadeghloo</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Saman-Jalili-Eshgh.jpg" class="card-img-top img-fluid imgbox2" alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">
                            Eshgh
                        </h6>
                        <h6 class="card-text text-muted text-nowrap">Saman Jalili</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Babak-Jahanbakhsh-To-Mano-Key-Koshti-Unplugged.jpg"
                             class="card-img-top img-fluid imgbox2" alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">To Mano Key Koshti</h6>
                        <h6 class="card-text text-muted text-nowrap">Babak Jahanbakhsh</h6>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Ramin-Bibak-Yeki-Yedoone.jpg" class="card-img-top img-fluid imgbox2"
                             alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Yeki Yedoone</h6>
                        <h6 class="card-text text-muted text-nowrap">Ramin Bibak</h6>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Puzzle-Band-Shab-Neshin.jpg" class="card-img-top img-fluid imgbox2"
                             alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Shab Neshin</h6>
                        <h6 class="card-text text-muted text-nowrap">Puzzle Band
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Reza-Sadeghi-Rasme-Donya-Ft-Navid-Hakimi.jpg"
                             class="card-img-top img-fluid imgbox2"
                             alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Rasme Donya</h6>
                        <h6 class="card-text text-muted text-nowrap">Reza Sadeghi&Navid Hakimi</h6>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Haamim-Ki-Mishe-Man-300x300.jpg" class="card-img-top img-fluid imgbox2"
                             alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">
                            Ki Mishe Man
                        </h6>
                        <h6 class="card-text text-muted text-nowrap">Haamim</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Zanco-Cheghadr-Jalebeh-300x300.jpg" class="card-img-top img-fluid imgbox2"
                             alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Cheghadr Jalebeh</h6>
                        <h6 class="card-text text-muted text-nowrap">Zanco
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Nivad-Raftani-287x300.jpg" class="card-img-top img-fluid imgbox2" alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Raftani</h6>
                        <h6 class="card-text text-muted text-nowrap">Nivad</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Ahmad-Solo-Band-300x300.jpg" class="card-img-top img-fluid imgbox2"
                             alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Band</h6>
                        <h6 class="card-text text-muted text-nowrap">Ahmad Solo</h6>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Ashvan-Ghasedak.jpg" class="card-img-top img-fluid imgbox2" alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Ghasedak</h6>
                        <h6 class="card-text text-muted text-nowrap">Ashvan</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Meysam-Ebrahimi-Babe-Delami-300x300.jpg"
                             class="card-img-top img-fluid imgbox2"
                             alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">
                            Babe Delami
                        </h6>
                        <h6 class="card-text text-muted text-nowrap">Meysam Ebrahimi</h6>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Behnam-Bani-Khastam-300x300.jpg" class="card-img-top img-fluid imgbox2"
                             alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Khastam</h6>
                        <h6 class="card-text text-muted text-nowrap">Behnam Bani</h6>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Sina-Sarlak-Fereshte-300x300.jpg" class="card-img-top img-fluid imgbox2"
                             alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Fereshte</h6>
                        <h6 class="card-text text-muted text-nowrap">Sina Sarlak
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark text-light border">
                    <a href="./pages/music.html">
                        <img src="images/Hoorosh-Band-Dishab-Parishab-300x300.jpg"
                             class="card-img-top img-fluid imgbox2"
                             alt="...">
                    </a>
                    <div class="card-body d-flex align-items-center justify-content-center flex-column">
                        <h6 class="card-title text-nowrap">Dishab Parishab</h6>
                        <h6 class="card-text text-muted text-nowrap">Hoorosh Band</h6>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <nav aria-label="Page navigation example">
        <ul class="pagination pt-4 d-flex justify-content-center align-items-center">
            <li class="page-item">
                <a class="page-link bg-dark" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link bg-dark" href="#">1</a></li>
            <li class="page-item"><a class="page-link bg-dark" href="#">2</a></li>
            <li class="page-item"><a class="page-link bg-dark" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link bg-dark" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Footer -->
    <section dir="ltr">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">

            <div class="col-12 col-md-4 text-center text-md-start">
                <div class="logo d-flex flex-column justify-content-center align-items-center">
                    <img src="images/png-music-logo-hd-png-removebg-preview.png" class="aks" alt="">
                    <p class="mb-0 pt-3 text-muted">© 2022 Company, Inc</p>
                </div>
            </div>

            <div class="col-12 col-md-4 text-center my-3 my-md-0">
                <ul class="nav justify-content-center">
                    <li class="mx-2 fs-3"><a href="#"><i class="bi bi-twitter"></i></a></li>
                    <li class="mx-2 fs-3"><a href="#"><i class="bi bi-soundwave"></i></a></li>
                    <li class="mx-2 fs-3"><a href="#"><i class="bi bi-spotify"></i></a></li>
                    <li class="mx-2 fs-3"><a href="#"><i class="bi bi-instagram"></i></a></li>
                </ul>
            </div>

            <div class="col-12 col-md-4 text-center text-md-end">
                <div class="row text-center">
                    <div class="col-6 col-md-6">
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-nowrap">لینک ها</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-nowrap">آخرین آلبوم
                                    ها</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-nowrap">آخرین آهنگ
                                    ها</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-nowrap">آخرین ویدئو
                                    ها</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-6">
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-nowrap">دسترسی
                                    سریع</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-nowrap">تماس با ما</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-nowrap">درباره ما</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted text-nowrap">تبلیغات</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </footer>
    </section>
</div>
@endsection
