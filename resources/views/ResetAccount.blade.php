<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Reset Password</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.18/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.18/dist/sweetalert2.all.min.js"></script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');

        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
            font-size: 15px;
            line-height: 1.7;
            color: #fff;
            background-color: #ddd;
        }

        a {
            cursor: pointer;
            transition: all 200ms linear
        }

        a:hover {
            text-decoration: none
        }

        .link {
            color: #fff
        }

        .link:hover {
            color: #EA2C62
        }

        p {
            font-weight: 500;
            font-size: 14px;
            line-height: 1.7
        }

        h4 {
            font-weight: 600
        }

        h6 span {
            padding: 0 20px;
            text-transform: uppercase;
            font-weight: 700
        }

        .section {
            position: relative;
            width: 100%;
            display: block
        }

        .full-height {
            min-height: 100vh
        }

        [type="checkbox"]:checked,
        [type="checkbox"]:not(:checked) {
            position: absolute;
            left: -9999px
        }




        .card-3d-wrap {
            position: relative;
            width: 440px;
            max-width: 100%;
            height: 580px;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            perspective: 800px;
            margin-top: 40px
        }

        .card-3d-wrapper {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            transition: all 600ms ease-out
        }

        .login-div {
            width: 150px
        }

        .card-front,
        .card-back {
            width: 100%;
            height: 100%;
            background-color: #2a2b38;
            position: absolute;
            border-radius: 0px;
            left: 0;
            top: 0;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            backface-visibility: hidden
        }

        .card-back {
            transform: rotateY(180deg)
        }

        .checkbox:checked~.card-3d-wrap .card-3d-wrapper {
            transform: rotateY(180deg)
        }

        .center-wrap {
            position: absolute;
            width: 100%;
            padding: 0 40px;
            top: 60%;
            left: 0;
            transform: translate3d(0, -50%, 35px) perspective(100px);
            z-index: 20;
            display: block
        }

        .form-group {
            position: relative;
            display: block;
            margin: 0;
            padding: 0
        }

        .form-style {
            padding: 13px 20px;
            padding-left: 55px;
            height: 48px;
            width: 100%;
            font-weight: 500;
            border-radius: 4px;
            font-size: 14px;
            line-height: 22px;
            letter-spacing: 0.5px;
            outline: none;
            color: #c4c3ca;
            background-color: #1f2029;
            border: none;
            transition: all 200ms linear;
            box-shadow: 0 4px 8px 0 rgba(21, 21, 21, .2)
        }

        .form-style:focus,
        .form-style:active {
            border: none;
            outline: none;
            box-shadow: 0 4px 8px 0 rgba(21, 21, 21, .2)
        }

        .input-icon {
            position: absolute;
            top: 0;
            left: 18px;
            height: 48px;
            font-size: 24px;
            line-height: 48px;
            text-align: left;
            color: #EA2C62;
            transition: all 200ms linear
        }

        .form-group input:-ms-input-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            transition: all 200ms linear
        }

        .form-group input::-moz-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            transition: all 200ms linear
        }

        .form-group input:-moz-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            transition: all 200ms linear
        }

        .form-group input::-webkit-input-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            transition: all 200ms linear
        }

        .form-group input:focus:-ms-input-placeholder {
            opacity: 0;
            transition: all 200ms linear
        }

        .form-group input:focus::-moz-placeholder {
            opacity: 0;
            transition: all 200ms linear
        }

        .form-group input:focus:-moz-placeholder {
            opacity: 0;
            transition: all 200ms linear
        }

        .form-group input:focus::-webkit-input-placeholder {
            opacity: 0;
            transition: all 200ms linear
        }

        .btn {
            border-radius: 4px;
            height: 48px;
            width: 100%;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            transition: all 200ms linear;
            padding: 0 30px;
            letter-spacing: 1px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            -ms-flex-pack: center;
            text-align: center;
            border: none;
            background-color: #EA2C62;
            color: #fff;
            box-shadow: 0 8px 24px 0 rgba(18, 248, 173, .2)
        }

        .btn:active,
        .btn:focus {
            background-color: #fff;
            color: #EA2C62;
            box-shadow: 0 8px 24px 0 rgba(255, 255, 255, .2)
        }

        .btn:hover {
            background-color: #fff;
            color: #EA2C62;
            box-shadow: 0 8px 24px 0 rgba(255, 255, 255, .2)
        }

        .logo {
            position: absolute;
            top: 30px;
            right: 30px;
            display: block;
            z-index: 100;
            transition: all 250ms linear
        }

        .logo img {
            height: 26px;
            width: auto;
            display: block
        }
    </style>
</head>

<body className='snippet-body'>
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3">

                        </h6>

                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">



                                            <h4 class="mb-4 pb-3">Reset Password</h4>
                                            <form action="" class="form" method="post">
                                                <div class="form-group">

                                                    <div class="form-group mt-2"> <input type="email" name="email"
                                                            class="form-style email" placeholder="Your Email"
                                                            id="logemail" autocomplete="none">
                                                        <i class="input-icon fa fa-at"></i>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="password" name="password"
                                                            class="form-style password" placeholder="New Password"
                                                            id="logpass" autocomplete="none">
                                                        <i class="input-icon fa fa-lock"></i>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="password" name="id" class="form-style id"
                                                            placeholder="Your ID" id="id" autocomplete="none">
                                                        <i class="input-icon fa fa-key"></i>
                                                    </div>

                                                    <div class="form-group mt-2">
                                                        <input type="phone" name="phone" class="form-style phone"
                                                            placeholder="Your Phone Number" id=""
                                                            autocomplete="none">
                                                        <i class="input-icon fa fa-phone"></i>
                                                    </div>



                                                    <div class="form-group mt-2">
                                                        <select name="department_id" class="form-style">

                                                            <option value="">select Your Department:</option>
                                                            @foreach ($departments as $dep)
                                                                <option value="{{ $dep->id }}">{{ $dep->name }}
                                                                </option>
                                                            @endforeach


                                                        </select>
                                                        <i class="input-icon fa fa-list"></i>
                                                    </div>




                                                    <button type="button" class="btn reset mt-4">Reset Password</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'>
        </script>
        <script type='text/javascript' src='#'></script>
        <script type='text/javascript' src='#'></script>
        <script type='text/javascript'>
            #
        </script>
        <script type='text/javascript'>
            var myLink = document.querySelector('a[href="#"]');
            myLink.addEventListener('click', function(e) {
                e.preventDefault();
            });
        </script>

        <script>

            $(document).ready(function() {
                $('.reset').click(function() {

                    var formData = $('form').serializeArray();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/reset-account/store',
                type: 'POST',
                data: formData,
                success: function(response) {
                    if (response == "id error") {
                        console.log(response);

                        Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: '   خاطئ id   ',
                        showConfirmButton: false,
                        timer: 3000
                        })
                    }

                    else if (response == "filed data") {
                        console.log(response);
                        Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'فشل التعديل الرجاء التاكد من البيانات',
                        showConfirmButton: false,
                        timer: 3000
                        })
                    }
                    else if(response == "success") {
                        console.log(response);

                        Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'تمت التعديل بنجاح  ',
                        showConfirmButton: false,
                        timer: 3000
                        })
                    }

                },

            });

                });
            });



            //  location.reload();

        </script>

</body>

</html>
