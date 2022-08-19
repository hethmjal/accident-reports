<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Report RM</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="{{ asset('dist/themes/toasteur-default.min.css') }}" />
    <script src="{{ asset('dist/toasteur.min.js') }}"></script>

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
                                    class="date text-black-50"> {{ $event->month_date }}</span></div>
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
                        </div>
                    </div>
                </div>
                <div class="bg-white p-2">
                    <div class="d-flex flex-row fs-12">
                        <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true"
                            aria-controls="collapse-1" href="#collapse-1"><i class="fa fa-plus-circle"></i><span
                                class="ml-1 text-info">Add Information</span></div>
                    </div>
                </div>







                <div id="collapse-1" class="bg-light p-2 collapse" data-parent="#myGroup">
                    <div class="d-flex flex-row align-items-start"><img class="rounded-circle"
                            src="{{ asset('img/user.png') }}" width="40">
                        <section>

                            <form id="info">
                                @csrf
                                <input type="hidden" name="event_id" value="{{ $event->id }}">
                                <p class="text-info">&nbsp;&nbsp;Event Categoriy ( Fill out by OVR Manager/Person
                                    responsible to manage the OVR):</p>
                                <div>
                                    <input type="radio"
                                        @if ($event->info) @if ($event->info->event_category == 'Infection Control Related Issues') checked @endif
                                        @endif
                                    id="contactChoice1" name="event_category"
                                    value="Infection Control Related Issues">
                                    <label for="contactChoice1">1.Infection Control Related
                                        Issues.&nbsp;&nbsp;&nbsp;</label>

                                    <input type="radio"
                                        @if ($event->info) @if ($event->info->event_category == 'Behavior') checked @endif
                                        @endif
                                    id="contactChoice2" name="event_category" value="Behavior">
                                    <label for="contactChoice2">16.Behavior.</label>
                                </div>
                                <div>
                                    <input type="radio"
                                        @if ($event->info) @if ($event->info->event_category == 'Occupational Health') checked @endif
                                        @endif
                                    id="contactChoice1" name="event_category" value="Occupational Health">
                                    <label for="contactChoice1">2.Occupational
                                        Health.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                                    <input type="radio"
                                        @if ($event->info) @if ($event->info->event_category == 'Staff related Issues') checked @endif
                                        @endif
                                    id="contactChoice2" name="event_category" value="Staff related Issues">
                                    <label for="contactChoice2">17.Staff related Issues.</label><br>
                                    <div>
                                        <div>
                                            <input type="radio"
                                                @if ($event->info) @if ($event->info->event_category == 'Houskeeping') checked @endif
                                                @endif
                                            id="contactChoice1" name="event_category" value="Houskeeping">
                                            <label
                                                for="contactChoice1">3.Houskeeping.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                                            <input type="radio"
                                                @if ($event->info) @if ($event->info->event_category == 'Patient Care Managment') checked @endif
                                                @endif
                                            id="contactChoice2" name="event_category"
                                            value="Patient Care Managment">
                                            <label for="contactChoice2">18.Patient Care Managment.</label>
                                        </div>
                                        <div>
                                            <input type="radio"
                                                @if ($event->info) @if ($event->info->event_category == 'Intravenous') checked @endif
                                                @endif
                                            id="contactChoice1" name="event_category" value="Intravenous">
                                            <label
                                                for="contactChoice1">4.Intravenous.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                                            <input type="radio"
                                                @if ($event->info) @if ($event->info->event_category == 'Laboratory Related Issues') checked @endif
                                                @endif
                                            id="contactChoice2" name="event_category"
                                            value="Laboratory Related Issues">
                                            <label for="contactChoice2">19.Laboratory Related Issues.</label><br>
                                            <div>
                                                <div>
                                                    <input type="radio"
                                                        @if ($event->info) @if ($event->info->event_category == 'Pressure Ulcer(injury)') checked @endif
                                                        @endif
                                                    id="contactChoice1" name="event_category"
                                                    value="Pressure Ulcer(injury)">
                                                    <label for="contactChoice1">5.Pressure
                                                        Ulcer(injury).&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                                                    <input type="radio"
                                                        @if ($event->info) @if ($event->info->event_category == 'Procedural') checked @endif@endif
                                                    id="contactChoice2" name="event_category" value="Procedural">
                                                    <label for="contactChoice2">20.Procedural.</label>
                                                </div>
                                                <div>
                                                    <input type="radio"
                                                        @if ($event->info) @if ($event->info->event_category == 'Skin Lesion Integrity') checked @endif
                                                        @endif
                                                    id="contactChoice1" name="event_category"
                                                    value="Skin Lesion Integrity">
                                                    <label for="contactChoice1">6.Skin Lesion
                                                        Integrity.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                                                    <input type="radio"
                                                        @if ($event->info) @if ($event->info->event_category == 'Medical Equipment Issues') checked @endif
                                                        @endif
                                                    id="contactChoice2" name="event_category"
                                                    value="Medical Equipment Issues">
                                                    <label for="contactChoice2">21.Medical Equipment Issues.</label><br>
                                                    <div>
                                                        <div>
                                                            <input type="radio"
                                                                @if ($event->info) @if ($event->info->event_category == 'Medication') checked @endif
                                                                @endif
                                                            id="contactChoice1" name="event_category"
                                                            value="Medication">
                                                            <label
                                                                for="contactChoice1">7.Medication.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                                                            <input type="radio"
                                                                @if ($event->info) @if ($event->info->event_category == 'Facility Mantenance') checked @endif
                                                                @endif
                                                            id="contactChoice2" name="event_category"
                                                            value="Facility Mantenance">
                                                            <label for="contactChoice2">22.Facility Mantenance.</label>
                                                        </div>
                                                        <div>
                                                            <input type="radio" value="Communication Issuse"
                                                                @if ($event->info) @if ($event->info->event_category == 'Communication Issuse') checked @endif
                                                                id="contactChoice1" name="event_category"> @endif
                                                            @endif

                                                            <label for="contactChoice1">8.Communication
                                                                Issuse.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                            <br>

                                                            <input type="radio"
                                                                @if ($event->info) @if ($event->info->event_category == 'Enviroment / Safety') checked @endif
                                                                @endif
                                                            id="contactChoice2" name="event_category"
                                                            value="Enviroment / Safety">
                                                            <label
                                                                for="contactChoice2">23.Enviroment/Safety.</label><br>
                                                            <div>
                                                                <div>
                                                                    <input type="radio"
                                                                        @if ($event->info) @if ($event->info->event_category == 'Falls') checked @endif
                                                                        @endif
                                                                    id="contactChoice1" name="event_category"
                                                                    value="Falls">
                                                                    <label
                                                                        for="contactChoice1">9.Falls.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                                                                    <input type="radio"
                                                                        @if ($event->info) @if ($event->info->event_category == 'Accommodation related Issues') checked @endif
                                                                        @endif
                                                                    id="contactChoice2" name="event_category"
                                                                    value="Accommodation related Issues">
                                                                    <label for="contactChoice2">24.Accommodation related
                                                                        Issues.</label>
                                                                </div>
                                                                <div>
                                                                    <input type="radio" id="contactChoice1"
                                                                        name="event_category"
                                                                        value="Redition treatment( Ionizing radiationnNon-Ionizing(US, UV,MRI,Laser, other)">
                                                                    <label for="contactChoice1">10.Redition treatment(
                                                                        Ionizing radiationnNon-Ionizing(US,
                                                                        UV,MRI,Laser,
                                                                        other).&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                                                                    <input type="radio"
                                                                        @if ($event->info) @if ($event->info->event_category == 'Information Technology Related Issuse') checked @endif
                                                                        @endif
                                                                    id="contactChoice2" name="event_category"
                                                                    value="Information Technology Related Issuse">
                                                                    <label for="contactChoice2">25.Information
                                                                        Technology Related Issuse.</label><br>
                                                                    <div>
                                                                        <div>
                                                                            <input type="radio"
                                                                                @if ($event->info) @if ($event->info->event_category == 'Labor and Deilvery related issues') checked @endif
                                                                                @endif
                                                                            id="contactChoice1"
                                                                            name="event_category"
                                                                            value="Labor and Deilvery related issues">
                                                                            <label for="contactChoice1">11.Labor and
                                                                                Deilvery related issues.</label>

                                                                            <input type="radio"
                                                                                @if ($event->info) @if ($event->info->event_category == 'Medical Imaging and Diagnostic Procedures') checked @endif
                                                                                @endif
                                                                            id="contactChoice2"
                                                                            name="event_category"
                                                                            value="Medical Imaging and Diagnostic
                                                                            Procedures">
                                                                            <label for="contactChoice2">26.Medical
                                                                                Imaging and Diagnostic
                                                                                Procedures.</label>
                                                                        </div>
                                                                        <div>
                                                                            <input type="radio"
                                                                                @if ($event->info) @if ($event->info->event_category == 'Supply Chain issuse (logistics)') checked @endif
                                                                                @endif
                                                                            id="contactChoice1"
                                                                            name="event_category"
                                                                            value="Supply Chain issuse (logistics)">
                                                                            <label for="contactChoice1">12.Supply Chain
                                                                                issuse
                                                                                (logistics).&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                                                                            <input type="radio"
                                                                                @if ($event->info) @if ($event->info->event_category == 'Food Service') checked @endif
                                                                                @endif
                                                                            id="contactChoice2"
                                                                            name="event_category"
                                                                            value="Food Service">
                                                                            <label for="contactChoice2">27.Food
                                                                                Service.</label><br>
                                                                            <div>
                                                                                <div>
                                                                                    <input type="radio"
                                                                                        @if ($event->info) @if ($event->info->event_category == 'Laundry services') checked @endif
                                                                                        @endif
                                                                                    id="contactChoice1"
                                                                                    name="event_category"
                                                                                    value="Laundry services">
                                                                                    <label
                                                                                        for="contactChoice1">13.Laundry
                                                                                        services.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                                                                                    <input type="radio"
                                                                                        id="contactChoice2"
                                                                                        @if ($event->info) @if ($event->info->event_category == 'Clinical Nutrition') checked @endif
                                                                                        @endif
                                                                                    name="event_category"
                                                                                    value="Clinical Nutrition">
                                                                                    <label
                                                                                        for="contactChoice2">28.Clinical
                                                                                        Nutrition.</label>
                                                                                </div>
                                                                                <div>
                                                                                    <input type="radio"
                                                                                        id="contactChoice1"
                                                                                        @if ($event->info) @if ($event->info->event_category == 'Sentiinel Events') checked @endif
                                                                                        @endif
                                                                                    name="event_category"
                                                                                    value="Sentiinel Events">
                                                                                    <label
                                                                                        for="contactChoice1">14.Sentiinel
                                                                                        Events.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                                                                                    <input type="radio"
                                                                                        id="contactChoice2"
                                                                                        @if ($event->info) @if ($event->info->event_category == 'ID/Document/Consnt') checked @endif
                                                                                        @endif
                                                                                    name="event_category"
                                                                                    value="ID/Document/Consnt">
                                                                                    <label
                                                                                        for="contactChoice2">29.ID/Document/Consnt.</label><br>
                                                                                    <div>
                                                                                        <div>
                                                                                            <input type="radio"
                                                                                                id="contactChoice1"
                                                                                                @if ($event->info) @if ($event->info->event_category == 'Security Related Issues') checked @endif
                                                                                                @endif
                                                                                            name="event_category"
                                                                                            value="Security Related
                                                                                            Issues">
                                                                                            <label
                                                                                                for="contactChoice1">15.Security
                                                                                                Related Issues.</label>
                                                                                        </div>
                                                                                    </div>
                            </form>
                    </div>
                    <hr "text-info">




                    <div class="form-check form-check-inline">
                        <label class="form-check-label text-info" for="inlineCheckbox2"># Event Received in the Risk
                            Unit Within.
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</label>

                        <input class="form-check-input" type="radio"
                            @if ($event->info) @if ($event->info->eventReceivedinTheRiskUnitWithin == 'Yes') checked @endif
                            @endif
                        name="eventReceivedinTheRiskUnitWithin" id="inlineCheckbox1" value="Yes">
                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            @if ($event->info) @if ($event->info->eventReceivedinTheRiskUnitWithin == 'No') checked @endif
                            @endif
                        name="eventReceivedinTheRiskUnitWithin" id="inlineCheckbox2" value="No">
                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                    </div>

                    <div class="form-check form-check-inline"></div>
                    <label class="form-check-label text-info" for=""># Feedback Received with in
                        Appropriate time(10 day)for Green and Yellow Risk Level.</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="feedbackReceivedWithInAppropriateTime"
                        @if ($event->info) @if ($event->info->feedbackReceivedWithInAppropriateTime == 'Yes') checked @endif
                        @endif
                    id="inlineCheckbox3" value="Yes">
                    <label class="form-check-label" for="inlineCheckbox3">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="feedbackReceivedWithInAppropriateTime"
                        @if ($event->info) @if ($event->info->feedbackReceivedWithInAppropriateTime == 'No') checked @endif
                        @endif
                    id="inlineCheckbox4" value="No">
                    <label class="form-check-label" for="inlineCheckbox4">No</label>
                </div>
                <div class="form-check form-check-inline"></div>
                <label class="form-check-label text-info" for=""># Feedback Sent to Reporting Department
                    with two working days of receiving responding deparment feedback. </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="feedbackSentToReportingDepartment"
                    @if ($event->info) @if ($event->info->feedbackSentToReportingDepartment == 'Yes') checked @endif @endif
                id="inlineCheckbox5" value="Yes">
                <label class="form-check-label" for="inlineCheckbox5">Yes</label>
            </div>
            <div class="form-check form-check-inline"></div>
            <input class="form-check-input" type="radio" name="feedbackSentToReportingDepartment"
                @if ($event->info) @if ($event->info->feedbackSentToReportingDepartment == 'No') checked @endif @endif
            id="inlineCheckbox6" value="No">
            <label class="form-check-label" for="inlineCheckbox6">No</label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label text-info" for=""># Incident Added to the Risk Register.
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

            <input type="radio" class="form-check-input" name="IncidentAddedToTheRiskRegister"
                @if ($event->info) @if ($event->info->IncidentAddedToTheRiskRegister == 'Yes') checked @endif @endif
            id="inlineCheckbox7" value="Yes">
            <label class="form-check-label" for="inlineCheckbox7">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="IncidentAddedToTheRiskRegister"
                @if ($event->info) @if ($event->info->IncidentAddedToTheRiskRegister == 'No') checked @endif @endif
            id="inlineCheckbox8" value="No">
            <label class="form-check-label" for="inlineCheckbox8">No</label>
        </div>
        <hr>

        <div class="mt-2">
            <h6 class="text-info">Incident Risk Classification & Rating (filled by the reporter direct manager/
                person in charge): for review & approval by the OVR manager) Appendix D & E:</h6>
        </div>

        <div class="form-check form-check-inline row">
            <label class="m-2" for=""> Likelihood</label>
            <select name="likelihood" id="Likelihood" style="background-color:white; color: rgb(0, 0, 0);" id="">
                <option value=""></option>
                <option value="1" style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0)">1 Rare</option>
                <option value="2" style="background-color: rgb(8, 200, 27); color: rgb(0, 0, 0)">2 Unlikely</option>
                <option value="3" style="background-color: rgb(246, 249, 40); color: rgb(0, 0, 0)">3 Possible</option>
                <option value="4" style="background-color: rgb(254, 145, 3); color: rgb(0, 0, 0)">4 Likely</option>
                <option value="5" style="background-color: rgb(238, 0, 0); color: rgb(0, 0, 0)">5 Almst cert</option>

            </select>

            <label class="m-2" for=""> Impact scores</label>
            <select name="impact" id="Impact" style="background-color: #ffffff; color: rgb(0, 0, 0);" id="">
                <option value=""></option>
                <option value="5" style="background-color: rgb(238, 0, 0); color: rgb(0, 0, 0)">5 Catatstrophic</option>
                <option value="4" style="background-color: rgb(254, 145, 3); color: rgb(0, 0, 0)">4 Maior</option>
                <option value="3" style="background-color: rgb(246, 249, 40); color: rgb(0, 0, 0)">3 Moderate</option>
                <option value="2" style="background-color: rgb(8, 200, 27); color: rgb(0, 0, 0)">2 Minor</option>
                <option value="1" style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0)">1 Nigligible
                </option>

            </select>

            <div id="result" class="ml-5" style="background: white; color: #000000; padding: 6px">

            </div>
        </div>

        <div>
            <img class="mt-3" src="{{ asset('img/5.png') }}" width="">
        </div>
        <hr>





        </section> <!-- SECTION 3 -->
        <h4></h4>

        <section>
    </div>
    <div class="mt-2 text-right"><button class=" send btn btn-info btn-sm shadow-none"
            type="button">Send</button><button class="save btn btn-outline-info btn-sm ml-1 shadow-none"
            type="button">Save</button><button class="btn btn-outline-info btn-sm ml-1 shadow-none"
            type="button">Cancel</button></div>

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

    <script>
        $(document).ready(function() {
            $(".send").click(function() {
                var formData = $('#info').serializeArray();
                console.log("after");
                console.log(formData);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '/addinforeport/store',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        console.log("success:");
                        console.log(response);
                        new Toasteur().success("success!", 'Success!', () => {});

                    }
                });
            });





            $(".save").click(function() {
                var formData = $('#info').serializeArray();
                console.log("after");
                console.log(formData);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '/addinforeport/save',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        console.log("success:");
                        console.log(response);
                        new Toasteur().success("success!", 'Success!', () => {});

                    }
                });
            });






            let val1, val2, res;
            $('#Impact').change(
                function() {

                    var color = $('option:selected', this).css('background-color');
                    $(this).css('background-color', color);
                    val1 = $(this).val();

                    if (val1 && val2) {
                       // console.log(val1);
                       // console.log(val2);
                        res = val1 * val2;
                        console.log(res);

                        if (res =="4" || res =="5" || res =="6") {
                            console.log("val2");
                            $("#result").html(res+" Moderate Risk");
                            $("#result").css("background-color","rgb(246, 249, 40)");
                        }

                       else if (res =="1" || res =="2" || res =="3") {
                            console.log("val2");
                            $("#result").html(res+" Low Risk");
                            $("#result").css("background-color","rgb(8, 200, 27)");
                        }

                        else if (res =="8" || res =="9" || res =="10"|| res=="11" || res=="12") {
                            console.log("val2");
                            $("#result").html(res+" High Risk");
                            $("#result").css("background-color","rgb(254, 145, 3)");
                        }

                        else if (15<=res<=25) {
                            console.log("val2");
                            $("#result").html(res+" Extreme Risk");
                            $("#result").css("background-color","rgb(238, 0, 0)");
                        }
                    }



                }
            ).change();

            $('#Likelihood').change(
                function() {
                    var color = $('option:selected', this).css('background-color');
                    $(this).css('background-color', color);

                    val2 = $(this).val();
                    if (val1 && val2) {
                       // console.log(val1);
                       // console.log(val2);
                        res = val1 * val2;
                        console.log(res);
                        if (res =="4" || res =="5" || res =="6") {
                            console.log("val2");
                            $("#result").html(res+" Moderate Risk");
                            $("#result").css("background-color","rgb(246, 249, 40)");
                        }

                       else if (res =="1" || res =="2" || res =="3") {
                            console.log("val2");
                            $("#result").html(res+" Low Risk");
                            $("#result").css("background-color","rgb(8, 200, 27)");
                        }

                        else if (res =="8" || res =="9" || res =="10"|| res=="11" || res=="12") {
                            console.log("val2");
                            $("#result").html(res+" High Risk");
                            $("#result").css("background-color","rgb(254, 145, 3)");
                        }

                        else if (15<=res<=25) {
                            console.log("val2");
                            $("#result").html(res+" Extreme Risk");
                            $("#result").css("background-color","rgb(238, 0, 0)");
                        }
                    }


                }
            ).change();


        });
    </script>
</body>

</html>
