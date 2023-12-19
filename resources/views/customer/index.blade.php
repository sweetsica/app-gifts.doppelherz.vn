<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thẻ Giftcard - Doppelherz Việt Nam</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <link rel="stylesheet" href="main.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-content {
            background-image: url('{{ asset('assets/img/bg-img.jpg') }}');
            /*background-image: url('./img/img-bg.jpg');*/
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 100vh;
        }

        .content {
            padding: 2rem;
        }

        .main-button {
            background-color: black;
            padding: 15px 30px;
            border-radius: 50px;
            border: 1px solid #fff;
        }

        .form-signup {
            display: flex;
            align-items: center;
            justify-content: center
        }



        @media screen and (max-width: 480px) {
            .form-signup {
                display: block;
            }

            .main-button {
                width: 100% !important;
            }

            .content-signup {
                width: 100% !important;
            }

            .btn-signup {
                width: 30% !important;
                top: 8% !important;
                padding: 13px !important;
            }

            .form-control::placeholder {
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <div class="main-content">
        <div class="content text-center">
            <div class="avatar mb-3">
                <img src="https://doppelherz.vn/wp-content/uploads/2022/12/LOGO-DOPPELHERZ-khong-khau-hieu-1000x800.png"
                    class="img-thumbnail rounded mx-auto d-block" style="width: 80px; height: 80px" alt="avatar" />
            </div>
            <span class="text-white mt-3"><a href="https://doppelherz.vn">@doppelherz</a></span>
            <div class="mt-3 text-center">
                <span><a href="https://www.facebook.com/DoppelherzVietnam"><i class="bi bi-facebook mx-2" style="color: #ac1c1c"></i></a></span>
                <span><a href="https://www.instagram.com/doppelherz.vn/"><i class="bi bi-instagram mx-2" style="color: #ac1c1c"></i></span>
                <span><a href="tel:18001770"><i class="bi bi-phone mx-2" style="color: #ac1c1c"></i></a></span>
            </div>

            <div class="mt-5">
                <form action="{{ route('check.code') }}" method="POST" class="form-signup">
                    @csrf
                    <div class="input-group mb-3 w-25 content-signup" style="position: relative">
                        <input type="text" class="form-control" placeholder="Vui lòng nhập mã khuyến mãi"
                            aria-label="Vui lòng nhập mã khuyến mãi" aria-describedby="button-addon2"
                            style="border-radius: 50px; padding: 30px" name="code">

                        <input type="hidden" value="2023" name="token">
                        <div class="input-group-append">
                            <button type="submit" id="button-addon2" class="btn btn-danger fw-bold btn-signup"
                                style=" background-color: #ac1c1c;
                            position: absolute;
                            width: 25%;
                            border-radius: 50px;
                            padding: 12px;
                            right: 1%;
                            top: 10%;
                            z-index: 99;">Truy
                                cập</button>
                                 {{--                        <input type="submit" value="Truy cập"> --}}
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="form-signup">
                        <div class="main-button w-25">
                            <a class="text-white" href='https://doppelherz.vn'>Website</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-signup">
                        <div class="main-button w-25">
                            <a class="text-white" href="tel:18001770">Hotline</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-signup">
                        <div class="main-button w-25">
                            <a class="text-white" href='mailto:info@mastertran.vn'>Email</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
