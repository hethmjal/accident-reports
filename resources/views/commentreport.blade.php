<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Report Msnagment</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
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

        body {
            background: #eee;
        }

        .date {
            font-size: 11px;
        }

        .comment-text {
            font-size: 12px;
        }

        .fs-12 {
            font-size: 12px;
        }

        .shadow-none {
            box-shadow: none;
        }

        .name {
            color: #007bff;
        }

        .cursor:hover {
            color: blue;
        }

        .cursor {
            cursor: pointer;
        }

        .textarea {
            resize: none;
        }

        .fa-facebook {
            color: #3b5999;
        }

        .fa-twitter {
            color: #55acee;
        }

        .fa-linkedin {
            color: #0077B5;
        }

        .fa-instagram {
            color: #e4405f;
        }

        .fa-dribbble {
            color: #ea4c89;
        }

        .fa-pinterest {
            color: #bd081c;
        }

        .fa {
            cursor: pointer;
        }
    </style>
</head>

<body className='snippet-body'>
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="d-flex flex-column comment-section" id="myGroup">
                    <div class="bg-white p-2">
                        <div class="d-flex flex-row user-info"><img class="rounded-circle"
                                src="{{ asset('img/user.png') }}" width="40">
                            <div class="d-flex flex-column justify-content-start ml-2"><span
                                    class="text-dark">{{ $event->location ?? '' }}</span><span
                                    class="date text-black-50"> {{$event->month_date}}</span></div>
                        </div>


                        <div class="mt-2">
                            <h6 class="text-info">Event Time & location/ Details</h6>

                            <p class="comment-text">Date and Time of the event: {{ $event['event-date'] }}</p>
                            <p class="comment-text">Event Location: {{ $event->location ?? '' }} </p>
                            <p class="comment-text">Reporting Department/ Section:
                                {{ $event['reporting-department'] }}</p>
                            <p class="comment-text">Responding Department/ Section:
                                {{ $event['responding-department'] }}</p>
                            <p class="comment-text">Other Involved Department: {{ $event['other-department'] }}</p>
                            <h6 class="text-info">Patient Information</h6>
                            <p class="comment-text">Patient's Name: {{ $event['patient-name'] }}</p>
                            <p class="comment-text">Medical Record: {{ $event['medical-record'] }}</p>
                            <h6 class="text-info">What is being reported</h6>
                            <p class="comment-text">{{ $event->whatIsBeingReported }} </p>
                            <h6 class="text-info">Factual Description of the Event</h6>
                            <p class="comment-text">{{ $event['event-detail'] }} </p>
                            <h6 class="text-info">Report Date</h6>
                            <p class="comment-text">Date: {{ $event['date'] }} </p>
                            <p class="comment-text">Reporter's Name: {{ $event['reporter-name'] }}</p>
                            <p class="comment-text">Mobile Number: {{ $event['reporter-phone'] }}</p>
                            <p class="comment-text">E-mail Adress: {{ $event['reporter-email'] }}</p>
                            <p class="comment-text">Reporter's Position Title: {{ $event['reporter-position'] }}
                            </p>
                            <h6 class="text-info">Immediate action taken</h6>
                            <p class="comment-text">{{ $event['action-taken'] }} </p>

                            <h6 class="text-info">(Yes/No),If yes please fill information</h6>
                            <p class="comment-text">Type of injury: {{ $event['typeOfInjury'] }}</p>
                            <p class="comment-text">Level of Harm: {{ $event['levelOFHarm'] }}</p>
                            <p class="comment-text">Likelihood Category: {{ $event['likelihoodCategory'] }}</p>
                            <p class="comment-text">For Medication Error only: {{ $event['medicationError'] }}</p>
                            <h6 class="text-info">Filled out by the reporter / person in charge</h6>
                            <p class="comment-text">
                                @if ($event->contriputingFactors)

                                @foreach ($event->contriputingFactors as $item)
                                    {{ $item }} |
                                @endforeach
                                @endif
                            </p>
                            <h6 class="text-info">Departments:</h6>
                            <p class="comment-text">{{ Auth::user()->department->name }}</p>




                        </div>
                    </div>


                </div>
                <div class="bg-white p-2">
                    <div class="d-flex flex-row fs-12">
                        <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true"
                            aria-controls="collapse-1" href="#collapse-1"><i class="fa fa-commenting-o"></i><span
                                class="ml-1 text-info ">Comment and signature of the department</span></div>
                    </div>
                </div>


                <div id="collapse-1" class="bg-light p-2 collapse" data-parent="#myGroup">
                    <div class="d-flex flex-row align-items-start">
                        <label class="text-info" for="basic-url">Note: </label>&nbsp;&nbsp;&nbsp;
                        <input type="hidden" class="event_id" value="{{$event->id}}" name="">
                        <textarea class="form-control ml-1 shadow-none note">@if ($event->note)
                                {{ $event->note->note }}

                        @endif</textarea>
                    </div>
                    <div class="mt-2 text-right">

                           <button  class="btn btn-info btn-sm shadow-none send" >Send</button>
                            <button class="btn btn-outline-info btn-sm ml-1 shadow-none save" >Save</button>
                            <button class="btn btn-outline-info btn-sm ml-1 shadow-none cancel" >Cancel</button>
                        </div>





                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'>
    </script>

    <script type='text/javascript'>
        var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener('click', function(e) {
            e.preventDefault();
        });
    </script>


    <script>
         $(document).ready(function() {
                    $(".send").click(function() {

                        var event_id = $('.event_id').val();
                        var note = $('.note').val();
                        console.log(note);
                        console.log(event_id);
                        $.get("/send_comment", {
                            note: note,
                            event_id: event_id
                        }, function(data, status) {
                            Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'تمت الاضافة بنجاح  ',
                            showConfirmButton: false,
                            timer: 1500
                            })
                        }), 'json';
                    });




                    $(".save").click(function() {

                    var event_id = $('.event_id').val();
                    var note = $('.note').val();
                    console.log(note);
                    console.log(event_id);
                    $.get("/save_comment", {
                        note: note,
                        event_id: event_id
                    }, function(data, status) {
                        Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'تمت الحفظ بنجاح  ',
                        showConfirmButton: false,
                        timer: 1500
                        })
                    }), 'json';
                    });



                });
    </script>

</body>

</html>
