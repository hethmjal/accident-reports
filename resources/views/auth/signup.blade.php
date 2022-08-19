<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Signup</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
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

        .checkbox:checked+label,
        .checkbox:not(:checked)+label {
            position: relative;
            display: block;
            text-align: center;
            width: 60px;
            height: 16px;
            border-radius: 2px;
            padding: 0;
            margin: 10px auto;
            cursor: pointer;
            background-color: #ffffff
        }

        .checkbox:checked+label:before,
        .checkbox:not(:checked)+label:before {
            position: absolute;
            display: block;
            width: 36px;
            height: 36px;
            border-radius: 10%;
            color: #EA2C62;
            background-color: #2a2b38;
            content: '';
            z-index: 20;
            font-size: 12px;
            top: -10px;
            left: -10px;
            line-height: 36px;
            text-align: center;
            font-size: 24px;
            transition: all 0.5s ease
        }

        .checkbox:checked+label:before {
            transform: translateX(44px) rotate(-270deg)
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

    @if (session('error'))
<div class="alert alert-danger text-center">{{session('error')}}</div>
@endif
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3">
                            <span>Log In </span>
                            <span>Sign Up</span>
                        </h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <form action="{{route('login.store')}}" method="post">
                                    @csrf
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <div class="form-group">
                                                <input type="email" name="email"  value="{{old('email')}}" class="form-style"
                                                    placeholder="Your Email" id="logemail" autocomplete="none">
                                                <i class="input-icon fa fa-at"></i>
                                                @error('email')
                                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="password" class="form-style"
                                                    placeholder="Your Password" id="logpass" autocomplete="none"> <i
                                                    class="input-icon fa fa-lock"></i>
                                                    @error('password')
                                                    <p class="invalid-feedback d-block"> {{$message}}</p>
                                                    @enderror
                                            </div>
                                            <button class="btn mt-4" type="submit">Login</button>
                                            <p class="mb-0 mt-4 text-center"> <a href="{{route('reset-account')}}"
                                                    class="link">Reset Your Password?</a> </p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                                <div class="card-back">

                                    <form action="{{route('register.store')}}" method="post">
                                        @csrf
                                    <div class="center-wrap">
                                        <div class="section text-center">


                                            <h4 class="mb-4 pb-3">Sign Up</h4>
                                            <div class="form-group">
                                                <input type="text" name="name"  value="{{old('name')}}" class="form-style"
                                                    placeholder="Your Full Name" id="logname" autocomplete="none">
                                                <i class="input-icon fa fa-user"></i>
                                                @error('name')
                                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group mt-2"> <input type="email"  value="{{old('email')}}" name="email"
                                                    class="form-style" placeholder="Your Email" id="logemail"
                                                    autocomplete="none">
                                                <i class="input-icon fa fa-at"></i>
                                                @error('email')
                                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="password" class="form-style"
                                                    placeholder="Your Password" id="logpass" autocomplete="none">
                                                <i class="input-icon fa fa-lock"></i>
                                                @error('password')
                                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="text" name="identification"  value="{{old('identificaion')}}" class="form-style"
                                                    placeholder="Your ID" id="logpass" autocomplete="none">
                                                <i class="input-icon fa fa-key"></i>
                                                @error('identification')
                                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group mt-2">
                                                <input type="phone" name="phone"  value="{{old('phone')}}" class="form-style"
                                                    placeholder="Your Phone Number" id="lognphone" autocomplete="none">
                                                <i class="input-icon fa fa-phone"></i>
                                                @error('phone')
                                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                                @enderror
                                            </div>



                                            <div class="form-group mt-2">
                                                <select name="department_id"  value="{{old('department_id')}}" class="form-style">

                                                    <option value="">select Your Department:</option>
                                                    @foreach ($departments as $department)
                                                    <option value="{{$department->id}}">{{$department->name}}</option>
                                                    @endforeach

                                                </select>
                                                <i class="input-icon fa fa-list"></i>
                                                @error('department')
                                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                                @enderror
                                            </div>



                                            <button class="btn mt-4" type="submit">Signup</button>

                                        </div>
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

</body>

</html>
