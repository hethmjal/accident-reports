<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Home Page</title>
                                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>::-webkit-scrollbar {
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
                                } @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

.container .card .navbar .navbar-brand {
    color: #9f07e6;
    font-weight: 600;
}

.container .card .navbar .container-fluid form .btn.btn-primary {

    text-transform: capitalize;
    width: 100px;
    background-color: transparent;
    color: #9f07e6;
    font-weight: 600;
    border: 2px solid #9f07e6;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 20px;
    transition: .5s;
}

.container .card .navbar .container-fluid form .btn.btn-primary:hover {
    background-color: #9f07e6;
    color: #fff;
}

.container .container-fluid ul li.nav-item .nav-link {
    color: black;
    font-size: 1rem;
    border-bottom: 2px solid transparent;
    padding: .5rem 0;
    margin: 0 .8rem;
}

.container .container-fluid ul li.nav-item .nav-link:hover {
    border-bottom: 2px solid #9f07e6;
    /* padding: 0px; */
}

.container .container-fluid ul li.nav-item .nav-link.active {
    border-bottom: 2px solid #9f07e6;

}

.container .card-body {
    min-height: 400px;
    /* background-color: red; */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;

}

.container .card-body .btn.btn-primary {
    margin-top: 2rem;
    background-color: #9f07e6;
    color: #fff;
    width: 120px;
    height: 45px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid #ddd;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 20px;
    transition: .5s;

}

.container .card-body .btn.btn-primary:hover {
    color: #9f07e6;
    background-color: #fff;
    border: 2px solid #9f07e6;
}

.container .card-footer {
    background-color: #fff;
    border: 0px;
}

.container .card-footer .box {
    padding: 20px;
    width: 100%;
    height: 140px;
    text-align: center;
    border-bottom: 3px solid #ddd;
}

.container .card-footer .box:hover {
    border-bottom: 3px solid #9f07e6;
    color: #9f07e6;
}

.container .card-footer .box.active {
    border-bottom: 3px solid #9f07e6;
    color: #9f07e6;
}

.container .box .icons {
    font-size: 2.2rem;
    color: #9f07e6;
}

.container .card-footer .btn.btn-primary {
    background-color: transparent;
    color: black;
    font-weight: 800;
    border: 0px;

}

.container .card-footer .btn.btn-primary:focus {
    box-shadow: none;
}

.card-footer .fas.fa-chevron-down {
    color: #cdcdcd;
}



.allbox-1 {
    position: relative;
    position: absolute;
    top: 0;
    right: 10%;
    width: 200px;
    height: 200px;
}

.allbox-1 .box-1 {
    position: absolute;
    top: 30%;
    left: 50%;
    /* transform: translateX(-50%); */
    height: 60px;
    width: 60px;
    background-color: #3bd63b;
    opacity: .5;
    border-top-right-radius: 50%;
    border-top-left-radius: 50%;
    border-bottom-right-radius: 50%;
}

.allbox-1 .box-2 {
    position: absolute;
    bottom: 50px;
    right: 50%;
    /* transform: translate(-50% -50%); */
    width: 30px;
    height: 30px;
    background-color: #ddd;
    opacity: .6;
}

.allbox-2 {
    position: relative;
    position: absolute;
    top: 0;
    left: 0%;
    width: 200px;
    height: 200px;
}

.allbox-2 .box-1 {
    position: absolute;
    top: 40%;
    left: 20%;
    transform: translateY(-50%);
    height: 60px;
    width: 60px;
    background-color: #9f07e6;
    opacity: .4;
}

.allbox-2 .box-2 {
    position: absolute;
    bottom: 30%;
    right: 35%;
    /* transform: translateY(-0%); */
    width: 30px;
    height: 30px;
    background-color: #ddd;
    opacity: .6;
}

.allbox-3 {
    position: relative;
    position: absolute;
    bottom: 0;
    right: 10%;
    width: 200px;
    height: 200px;
}

.allbox-3 .box-1 {
    position: absolute;
    bottom: 50px;
    right: 45%;
    /* transform: translateX(-50%); */
    height: 60px;
    width: 60px;
    background-color: #c221eb;
    opacity: .3;
    border-top-right-radius: 50%;
    border-bottom-left-radius: 50%;
    border-bottom-right-radius: 50%;
}

.allbox-3 .box-2 {
    position: absolute;
    top: 30%;
    left: 10%;
    width: 30px;
    height: 30px;
    background-color: #0db3f5;
    opacity: .4;
}


.card-body .box-3 {
    position: absolute;
    top: 20%;
    right: -75px;
    width: 150px;
    height: 350px;
    background-color: #1aa51a;
    opacity: .4;
}

.card-body .box-4 {
    position: absolute;
    top: 10%;
    left: 50%;
    width: 30px;
    height: 30px;
    background-color: #1aa51a;
    opacity: .4;
}

.container .card-footer img {
    object-fit: cover;
    width: 100%;
    height: 100%;
    border-top-right-radius: 50%;
}

.img-box {
    position: relative;
    width: 80%;
    height: 80%;

}

.card-footer .box-1 {
    position: absolute;
    top: 40%;
    right: 0%;
    transform: translateY(15%);
    width: 150px;
    height: 150px;
    background-color: #3bd63b;
    opacity: .4;
}

.card-footer .box-2 {
    position: absolute;
    bottom: -0;
    right: 0%;
    transform: translateY(100%);
    width: 80px;
    height: 80px;
    background-color: #0db3f5;
}

.card-footer .box-3 {
    position: absolute;
    bottom: 0;
    right: 0%;
    transform: translateX(100%);
    width: 80px;
    height: 80px;
    background-color: #ffff00;
}

.card-footer .box-4 {
    position: absolute;
    bottom: 50px;
    right: 10%;
    transform: translateX(-100%);
    width: 80px;
    height: 80px;
    background-color: #9f07e6;
}

.card-footer .box-5 {
    position: absolute;
    bottom: 0;
    right: 50%;
    transform: translateY(100%);
    width: 40px;
    height: 40px;
    background-color: #3bf50d;
}

.card-footer .box-6 {
    position: absolute;
    bottom: 0;
    right: 0%;
    transform: translateX(100%);
    width: 80px;
    height: 80px;
    background-color: #ffff00;
}

@media(max-width:800px) {
    .card-body .box-3 {
        display: none;
    }

    .card-footer .box-1 {
        display: none;
    }

    .card-footer .box-4 {
        display: none;
    }
}

@media (max-width:430px) {
    .allbox-3 {
        display: none;
    }

    .allbox-2 {
        position: relative;
        position: absolute;
        top: -15%;
        right: -0%;
        transform: translateX(-20%);
        width: 200px;
        height: 200px;
        /* background-color: #ffff00; */
    }

    .allbox-1 {
        position: relative;
        position: absolute;
        top: 20%;
        left: -20%;
        transform: translateY(100%);
        width: 200px;
        height: 200px;
        /* background-color: #ffff00; */
    }
}</style>
</head>
                                <body className='snippet-body'>
                                <div class="container">
        <div class="card">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">EVENTS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('enter')}}">OVR</a>
                            </li>
                        </ul>
                        @guest
                        <a href="{{route('register')}}">
                            <form action="">
                                <div class="btn btn-primary">
                                  Sign Up
                                </div>
                            </form>
                          </a>
                      
                        @endguest

                    </div>
                </div>
            </nav>
            <div class="card-body">
                <p class="display-6 mb-3 fw-bolder">How it works</p>
                <p class="mb-0">Problem management site in all departments and sections,</p>
                <p class="mb-0">and listen to patients' complaints.</p>
                <div class="btn btn-primary">Let's Go</div>
                <div class="allbox-1">
                    <div class="box-1"> </div>
                    <div class="box-2"> </div>
                </div>
                <div class="allbox-2">
                    <div class="box-1"> </div>
                    <div class="box-2"> </div>
                </div>
                <div class="allbox-3">
                    <div class="box-1">

                    </div>
                    <div class="box-2">

                    </div>
                </div>
                <div class="box-3"></div>
                <div class="box-4"></div>
            </div>
            <div class="card-footer">
                <div class="row mb-5">

                </div>

                    <div class="col-md-5">
                        <div class="img-box">
                            <img class=""
                                src="img/1.jpg"
                                alt="">
                            <div class="box-1"></div>
                            <div class="box-2"></div>
                            <div class="box-3"></div>
                            <div class="box-4"></div>
                            <div class="box-5"></div>
                            <div class="box-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript'>#</script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>

                                </body>
                            </html>
