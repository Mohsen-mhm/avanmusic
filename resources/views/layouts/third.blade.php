<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
      integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>

<hr class="text-light mt-5"/>
<div class="main main-raised">
    <div class="container">
        <div class="section d-flex justify-content-center align-items-center text-center text-light">

            <div class="features w-100 mt-5 mb-1">
                <div class="row d-flex justify-content-evenly align-items-center">
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-info">
                                <i class="bi bi-music-note-beamed text-danger" style="font-size: 70px"></i>
                            </div>
                            <p style="font-size: 19px">+{{ \App\Models\Song::count() }} موزیک</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-info">
                                <i class="bi bi-mic text-warning" style="font-size: 70px"></i>
                            </div>
                            <p style="font-size: 19px">+{{ \App\Models\Artist::count() }} آرتیست</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-info">
                                <i class="bi bi-music-note-list text-info" style="font-size: 70px"></i>
                            </div>
                            <p style="font-size: 19px">+{{ \App\Models\Album::count() }} آلبوم</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-info">
                                <i class="bi bi-headset text-success" style="font-size: 70px"></i>
                            </div>
                            <p style="font-size: 19px">+{{ \App\Models\User::count() }} شنونده</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
