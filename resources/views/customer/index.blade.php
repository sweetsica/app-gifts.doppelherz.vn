<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form mobile</title>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />

    <link
        rel="stylesheet"
        href="main.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"
    />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-content {
            background-image: url("https://i.pinimg.com/736x/54/e6/d4/54e6d48f7a9fe4ec3dbeabfa7e230a74.jpg");
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
    </style>
</head>

<body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"
></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"
></script>
<script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"
></script>

<div class="main-content">
    <div class="content text-center">
        <div class="avatar mb-3" style="position: relative">
            <img
                src="https://doppelherz.vn/wp-content/uploads/2022/12/LOGO-DOPPELHERZ-khong-khau-hieu-1000x800.png"
                class="img-thumbnail rounded mx-auto d-block"
                style="width: 80px; height: 80px; border-radius: 50% !important"
                alt="avatar"
            />
            <i
                class="bi bi-check-circle-fill text-primary"
                style="position: absolute; top: 0; right: 40%; z-index: 99"
            ></i>
        </div>
        <span class="text-white mt-3"><a href="https://doppelherz.vn">@doppelherz</a></span>
        <div class="mt-3 text-center">
            <span><i class="bi bi-instagram text-white mx-2"></i></span>
            <span><i class="bi bi-instagram text-white mx-2"></i></span>
            <span><i class="bi bi-instagram text-white mx-2"></i></span>
            <span><i class="bi bi-instagram text-white mx-2"></i></span>
        </div>
        <div class="row mt-5">
            <div class="col-12 mb-3">
                <div class="main-button">
                    <form action="{{route('check.code')}}" method="POST">
                        @csrf
                        <input type="text" placeholder="Vui lòng nhập mã khuyến mãi" name="code">
                        <input type="hidden" value="2023" name="token">
                        <input type="submit" value="Truy cập">
                    </form>
                </div>
            </div>
            <div class="col-12 mb-3">
                <a class="text-white" href='https://doppelherz.vn'>Website</a>
{{--                <div class="main-button"><a class="text-white" href='https://doppelherz.vn'>Website</a></div>--}}
            </div>
            <div class="col-12 mb-3">
                <a class="text-white" href="tel:18001770">Hotline</a>
{{--                <div class="main-button"><a class="text-white" href="tel:18001770">Hotline</a></div>--}}
            </div>
            <div class="col-12 mb-3">
                <a class="text-white" href='mailto:info@mastertran.vn'>Email</a>
{{--                <div class="main-button"><a class="text-white" href='mailto:info@mastertran.vn'>Email</a></div>--}}
            </div>
        </div>
    </div>
</div>
</body>
</html>
