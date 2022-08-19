<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Notification</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>

    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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

        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

        body {

            font-family: 'Manrope', sans-serif;
            background: #df99ff;
            ;
            color: #fff
        }


        .topbar {
            height: 4.375rem;
        }

        .topbar .nav-item .nav-link {
            height: 4.375rem;
            display: flex;
            align-items: center;
            padding: 0 .75rem;
        }


        .topbar .nav-item .nav-link .badge-counter {
            position: absolute;
            transform: scale(.7);
            transform-origin: top right;
            right: .25rem;
            margin-top: -.25rem;
        }

        .topbar.navbar-light .navbar-nav .nav-item .nav-link {
            color: #d1d3e2;
        }

        .dropdown-toggle::after {
            content: none !important;
        }

        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .35rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .form-control:focus {

            box-shadow: none !important;
        }

        .input-group-append button {
            box-shadow: none !important;
        }



        .topbar .nav-item .nav-link .badge-counter {
            position: absolute;
            transform: scale(.7);
            transform-origin: top right;
            right: .25rem;
            margin-top: -.25rem;
        }

        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .35rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }


        .rounded-circle {

            width: 40px;
            height: 40px;
        }



        .topbar .topbar-divider {
            width: 0;
            border-right: 1px solid #e3e6f0;
            height: calc(4.375rem - 2rem);
            margin: auto 1rem;
        }




        .topbar .dropdown-list {
            width: 20rem !important;
        }


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

        @import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&family=Poppins:wght@600&display=swap');

        * {
            box-sizing: border-box;
        }

        body {
            background-color: #d9ecf2;
            font-family: 'Poppins', sans-serif;
            color: #666;
        }

        .h2 {
            color: #444;
            font-family: 'PT Sans', sans-serif;
        }

        thead {
            font-family: 'Poppins', sans-serif;
            font-weight: bolder;
            font-size: 20px;
            color: #666;
        }

        img {
            width: 40px;
            height: 40px;
        }

        .name {
            display: inline-block;
        }

        .bg-blue {
            background-color: #EBF5FB;
            border-radius: 8px;
        }

        .fa-check,
        .fa-minus {
            color: blue;
        }

        .bg-blue:hover {
            background-color: #3e64ff;
            color: #eee;
            cursor: pointer;
        }

        .bg-blue:hover .fa-check,
        .bg-blue:hover .fa-minus {
            background-color: #3e64ff;
            color: #eee;
        }

        .table thead th,
        .table td {
            border: none;
        }

        .table tbody td:first-child {
            border-bottom-left-radius: 10px;
            border-top-left-radius: 10px;
        }

        .table tbody td:last-child {
            border-bottom-right-radius: 10px;
            border-top-right-radius: 10px;
        }

        #spacing-row {
            height: 10px;
        }

        @media(max-width:575px) {
            .container {
                width: 125%;
                padding: 20px 10px;
            }
        }
    </style>
</head>

<body className='snippet-body'>
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" id="myInput" class="form-control bg-light border-0 small" placeholder="Search for...">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fa fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

        <ul class="navbar-nav ml-auto">





            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell fa-fw"></i>
                @php
                    $i =0;
                    foreach ($events as  $event) {
                        if ($event->status == '0')
                        $i++;
                    }
                @endphp
                    <span  class="count badge badge-danger badge-counter">{{$i}}</span>
                </a>

                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in">


                    <h6 class="dropdown-header">
                        new events
                    </h6>
                    <div class="notification">
                        @foreach ($events as $event)
                        @if ($event->status == '0')

                            <a class="dropdown-item d-flex align-items-center"
                                href="{{ route('riskmanager.shareReport', $event->id) }}">
                                <div class="mr-3">
                                    <div class="icon-circle">
                                        <i class="fa fa-file"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">{{ $event['event-date'] }}</div>
                                    <span class="font-weight-bold">{{ $event->location }}</span>
                                </div>
                            </a>
                            @endif

                        @endforeach
                    </div>








                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All</a>


                </div>



            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Risk Manager</span>
                    <img class="img-profile rounded-circle" src="img/avatar.jpg">
                </a>

                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="" data-toggle="modal"
                        data-target="#logoutModal">
                        <a href="{{ route('logout') }}">   <i class="fa fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout</a>

                    </a>
                </div>
            </li>

        </ul>

    </nav>







    <div class="container rounded mt-5 bg-white p-md-5">
        <div class="h2 font-weight-bold">List of complaints</div>
        <div class="table-responsive">
            <table id="events" class="table">
                <thead>
                    <tr>
                        <th scope="col">Event Location</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody  id="myTable" >
                    @foreach ($events as $event)
                        @if ($event->status == '1')
                            <tr class="bg-blue mb-5">
                                <td class="pt-2">
                                    <div class="pl-lg-5 pl-md-3 pl-1 name">{{ $event->location }}</div>
                                </td>
                                <td class="pt-3 mt-1">{{ $event['event-date'] }}</td>
                                <td class="pt-3">{{ date('H:i', strtotime($event['event-date'])) }}</td>
                                <td class="pt-3"><span class="fa fa-minus pl-3"></span></td>
                                <td class="pt-3"> <a
                                        href="{{ route('riskmanager.addinforeport', $event->id) }}" <span
                                        class="fa fa-ellipsis-v btn"></span></a></td>
                            </tr>
                            <tr id="spacing-row">
                                <td></td>
                                </tr>

                        @elseif($event->status == '2')
                            <tr class="bg-blue mb-5">
                                <td class="pt-2">
                                    <div class="pl-lg-5 pl-md-3 pl-1 name">{{ $event->location }}</div>
                                </td>
                                <td class="pt-3 mt-1">{{ $event['event-date'] }}</td>
                                <td class="pt-3">{{ date('H:i', strtotime($event['event-date'])) }}</td>
                                <td class="pt-3"><span class="fa fa-check pl-3"></span></td>
                                <td class="pt-3"> <a href="{{ route('riskmanager.final_report', $event->id) }}" <span
                                        class="fa fa-ellipsis-v btn"></span></a></td>
                            </tr>
                            <tr id="spacing-row">
                                <td></td>
                                </tr>
                        @endif
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'>
    </script>

    <script type='text/javascript'>
        $(document).ready(function() {
            $('#events').DataTable();
        });
    </script>

    <script type='text/javascript'>
        var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener('click', function(e) {
            e.preventDefault();
        });
    </script>

<script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<script src="https://js.pusher.com/7.1/pusher.min.js"></script>
<script>

  // Enable pusher logging - don't include this in production
  Pusher.logToConsole = true;

  var pusher = new Pusher('df27f43402a4858b2483', {
    cluster: 'ap2',
    authEndpoint: "/broadcasting/auth",
  });

  var channel = pusher.subscribe('private-App.Models.User.{{ Auth::id() }}');
  channel.bind('Illuminate\\Notifications\\Events\\BroadcastNotificationCreated', function(data) {
   var count = $('.count').text();
  // console.log("count");

   console.log(count);
    $('.count').html(++count);

    $(".notification").prepend(` <a class="dropdown-item d-flex align-items-center"
                                href="risk-manager/report/${data.event.id}">
                                <div class="mr-3">
                                    <div class="icon-circle">
                                        <i class="fa fa-file"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">${data.event['event-date']}</div>
                                    <span class="font-weight-bold">${data.event.location}</span>
                                </div>
                            </a>`);

                            const audio = new Audio("{{asset('not.mp3')}}");
                              audio.play();
                        });



</script>
</body>

</html>
