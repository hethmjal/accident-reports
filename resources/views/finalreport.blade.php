<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Report RM</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
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
                            <div class="d-flex flex-column justify-content-start ml-2"><span class="text-dark"> {{$event->location}}
                                    </span><span class="date text-black-50"> {{ $event->month_date }}</span>
                            </div>
                        </div>


                        <div class="mt-2">
                            <h6 class="text-info">Event Time & location/ Details</h6>

                            <p class="comment-text">Date and Time of the event: {{ $event->month_date }}</p>
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
                            <p class="comment-text">{{ $event->note->user->department->name }}</p>

                            <h6 class="text-info">Note:</h6>
                            <p class="comment-text">{{ $event->note->note }} </p>
                            <h6 class="text-info">Signature:</h6>
                            <p class="comment-text">{{ $event->note->user->department->name }}</p>
                            <hr>
                            <h6 class="text-info">Event Categoriy ( Fill out by OVR Manager/Person responsible to
                                manage the OVR):</h6>
                            <p class="comment-text">{{ $event->info->event_category }} </p>
                            <hr>
                            <h6 class="text-info">#Event Received in the Risk Unit Within.</h6>
                            <p class="comment-text">{{ $event->info->eventReceivedinTheRiskUnitWithin }}</p>
                            <h6 class="text-info"># Feedback Received with in Appropriate time(10 day)for Green and
                                Yellow Risk Level.</h6>
                            <p class="comment-text">{{ $event->info->feedbackReceivedWithInAppropriateTime }}</p>
                            <h6 class="text-info">#Feedback Sent to Reporting Department with two working days of
                                receiving responding deparment feedback.</h6>
                            <p class="comment-text">{{ $event->info->feedbackSentToReportingDepartment }}</p>
                            <h6 class="text-info">#Incident Added to the Risk Register.</h6>
                            <p class="comment-text">{{ $event->info->IncidentAddedToTheRiskRegister }} </p>
                            <hr>
                            <h6 class="text-info">Incident Risk Classification & Rating (filled by the reporter
                                direct manager/ person in charge): for review & approval by the OVR manager) Appendix D
                                & E:</h6>


                            <div class="form-check form-check-inline ">

                                <table class="text-center">
                                    <thead>
                                        <tr>
                                            <th class="ml-5" scope="row">Likelihood</th>
                                            <th class="ml-5" style="margin-right: 40px" scope="row">Impact</th>
                                            <th class="ml-5" scope="row">Risk level</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <td>
                                            <div class="ml-1"
                                                style="background:  {{ $event->info->likelihood_color }}; color: black; padding: 6px">
                                                {{ $event->info->likelihood_num }} {{ $event->info->likelihood_string }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="ml-1"
                                                style="background: {{ $event->info->impact_color }}; color: black; padding: 6px;">
                                                {{ $event->info->impact_num }}  {{ $event->info->impact_string }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="ml-1"
                                                style="background: {{ $event->info->result_color }}; color: black; padding: 6px">
                                                {{ $event->info->likelihood_num*$event->info->impact_num }}  {{ $event->info->result_string }}
                                            </div>
                                        </td>
                                    </tbody>
                                </table>


                            </div>




                            <hr>

                            <form>





                                <div class="bg-white p-2">
                                    <div class="d-flex flex-row fs-12">
                                        <div class="like p-2 cursor action-collapse" data-toggle="collapse"
                                            aria-expanded="true" aria-controls="collapse-1" href="#collapse-1"></div>
                                    </div>
                                </div>











                                </section> <!-- SECTION 3 -->
                                <h4></h4>

                                <section>
                        </div>
                        <div class="mt-2 text-right"><a href="{{route('ok')}}" class="btn btn-info btn-sm shadow-none"
                                type="button">OK</a></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'>
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
