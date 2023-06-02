@extends('layouts.app')

@section('content')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
          integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <section id="contact" class="contact text-light" dir="rtl">
        <div class="container" data-aos="fade-up">

            <div class="section-title text-center mb-5">
                <h2>ارتباط با من</h2>
            </div>

            <div class="row mt-1">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt float-end ms-3"></i>
                            <h4>مکان شرکت:</h4>
                            <p>ایران - فارس - شیراز</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope float-end ms-3"></i>
                            <h4>ایمیل:</h4>
                            <p>info@example.ir</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone float-end ms-3"></i>
                            <h4>شماره تلفن:</h4>
                            <p>۹۸۹۱۱۷۴۸۸۷۵۴+</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="#" method="post" role="form">
                        @csrf
                        <div class="row d-flex justify-content-between">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control bg-dark text-light border-secondary" id="name" style="width: 99%;"
                                       placeholder="نام شما" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control bg-dark text-light border-secondary" name="email" id="email" style="width: 99%;"
                                       placeholder="ایمیل شما" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control bg-dark text-light border-secondary" name="subject" id="subject" style="width: 99.5%;"
                                   placeholder="موضوع">
                        </div>
                        <div class="form-group mt-3">
                                <textarea class="form-control bg-dark text-light border-secondary" name="message" rows="5" style="width: 99.5%;"
                                          placeholder="پیام"
                                          required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-4 p-2 ps-3 pe-3">ارسال پیام</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section>
@endsection

@section('styles')
    <style>
        .contact .info {
            width: 100%;
        }

        .contact .info i {
            font-size: 20px;
            color: #0563bb;
            float: left;
            width: 44px;
            height: 44px;
            background: #2c2c2c;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            transition: all 0.3s ease-in-out;
        }

        .contact .info h4 {
            padding: 0 0 0 60px;
            font-size: 22px;
            margin-bottom: 5px;
        }

        .contact .info p {
            padding: 0 0 0 60px;
            margin-bottom: 0;
            font-size: 14px;
        }

        .contact .info .email,
        .contact .info .phone {
            margin-top: 40px;
        }

        .contact .info .email:hover i,
        .contact .info .address:hover i,
        .contact .info .phone:hover i {
            background: #0563bb;
            color: #fff;
        }

        .contact .php-email-form {
            width: 100%;
            background: #fff;
        }

        .contact .php-email-form .form-group {
            padding-bottom: 8px;
        }

        .contact .php-email-form .error-message {
            display: none;
            color: #fff;
            background: #ed3c0d;
            text-align: left;
            padding: 15px;
            font-weight: 600;
        }

        .contact .php-email-form .error-message br + br {
            margin-top: 25px;
        }

        .contact .php-email-form .sent-message {
            display: none;
            color: #fff;
            background: #18d26e;
            text-align: center;
            padding: 15px;
            font-weight: 600;
        }

        .contact .php-email-form .loading {
            display: none;
            background: #fff;
            text-align: center;
            padding: 15px;
        }

        .contact .php-email-form .loading:before {
            content: "";
            display: inline-block;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            margin: 0 10px -6px 0;
            border: 3px solid #18d26e;
            border-top-color: #eee;
            -webkit-animation: animate-loading 1s linear infinite;
            animation: animate-loading 1s linear infinite;
        }

        .contact .php-email-form input,
        .contact .php-email-form textarea {
            border-radius: 4px;
            box-shadow: none;
            font-size: 14px;
        }

        .contact .php-email-form input {
            height: 44px;
        }

        .contact .php-email-form textarea {
            padding: 10px 12px;
        }

        .contact .php-email-form button[type=submit] {
            background: #0563bb;
            border: 0;
            padding: 10px 35px;
            color: #fff;
            transition: 0.4s;
            border-radius: 50px;
        }

        .contact .php-email-form button[type=submit]:hover {
            background: #0678e3;
        }

        @-webkit-keyframes animate-loading {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes animate-loading {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
@endsection
