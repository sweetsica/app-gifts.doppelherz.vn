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

            .btn-signup {
                width: 30% !important;
            }

            .form-control::placeholder {
                font-size: 0.8rem;
            }

            .title {
                font-size: 1.2rem;
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
            <div class="avatar mb-3" style="position: relative">
                <img src="https://doppelherz.vn/wp-content/uploads/2022/12/LOGO-DOPPELHERZ-khong-khau-hieu-1000x800.png"
                    class="img-thumbnail rounded mx-auto d-block" style="width: 80px; height: 80px" alt="avatar" />

            </div>
            <H2 style="color: #ac1c1c" class="title">Xin chào {!! $datas['customerInfo']->name !!}</H2>
            {{--        <H3 style="color: #ac1c1c" class="title">Mã của bạn là: {!! $datas['customerInfo']->giftCode !!}</span></H3> --}}
            <span class="text-white mt-3"><a href="https://doppelherz.vn"></a></span>
            <div class="mt-3 text-center">
                <span><i class="bi bi-instagram mx-2" style="color: #ac1c1c"></i></span>
                <span><i class="bi bi-instagram mx-2" style="color: #ac1c1c"></i></span>
                <span><i class="bi bi-instagram mx-2" style="color: #ac1c1c"></i></span>
                <span><i class="bi bi-instagram mx-2" style="color: #ac1c1c"></i></span>
            </div>
            <div class="row mt-5">
                <div class="col-12 mb-3">
                    <div class="form-signup">
                        <div class="main-button w-25 ">
                            <a class="text-white" href='{!! $datas['customerInfo']->giftLink !!}'>SỬ DỤNG MÃ</a>
                        </div>
                    </div>

                </div>
                <div class="col-12 mb-3">
                    <div class="form-signup">
                        <div class="main-button w-25 ">
                            <a class="text-white" href='https://doppelherz.vn'>Website</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-signup">
                        <div class="main-button w-25 ">
                            <a class="text-white" href="tel:18001770">Hotline</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-signup">
                        <div class="main-button w-25 ">
                            <a class="text-white" href='mailto:info@mastertran.vn'>Email</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <a class="text-black" href='{{ route('logout') }}'>Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
