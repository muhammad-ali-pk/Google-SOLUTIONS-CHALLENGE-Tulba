<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
            maximum-scale=1, user-scalable=no">
    <title>Student Job Portal</title>
    <link rel="icon" href="{{ asset('assets/images/Logo_Title.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/styles/Student_JobPortal.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/styles/animate.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="Student_JobPortal">
        <div id="Background">
            <svg class="Ellipse_9">
                <ellipse fill="rgba(31,90,80,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter"
                    stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_9" rx="50%" ry="45%"
                    cx="50%" cy="45%">
                </ellipse>
            </svg>
            <svg class="Ellipse_8">
                <ellipse fill="rgba(31,90,80,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter"
                    stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_8" rx="50%" ry="45%"
                    cx="50%" cy="45%">
                </ellipse>
            </svg>
        </div>
        <div id="header">
            <a href="/"><img alt="Logo Image" id="Tulba" src="{{ asset('assets/images/Logo.png') }}"></a>
            <img id="Profile" alt="Profile Photo" src="{{ asset('images').'/'.session()->get('profile_photo') }}">
            <div class="dropdown profile emp">
                <ul>
                    <li><a href="/employer/profile">My Profile</a>
                    <li><a href="/logout">Log out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="popup_background" class="fadeIn">
        <div id="popup">
            <div class="part">
                <div class="name">
                    <h1>{{ $myJobs->jobtitle }}</h1>
                </div>
                <div class="academic">
                    <h2>Academic Requirements</h2>
                    <ul>
                        <li>CGPA: {{ $myJobs->cgpa }} </li>
                        <li>Discipline: {{ $myJobs->discipline}} </li>
                    </ul>
                </div>
                <div class="skills">
                    <h2>Skills Required</h2>
                    <ul>
                        <?php
                          $skills = $myJobs->skills;
                          $skills = explode (",", $skills);
                          foreach ($skills as $skill) {
                              echo "<li>$skill</li>";
                          }
                        ?>
                    </ul>
                </div>
                <div class="time">
                    <h2>Working Hours</h2>
                    <ul>
                        <li>{{ $myJobs->working_hours }}</li>
                    </ul>
                </div>
            </div>
            <div class="part">
                <div id="company_logo">
                    <img src="{{ asset('images').'/'.$myJobs->employer['company_logo'] }}" />
                </div>
                <div id="details" style="overflow-wrap:break-word;width: 30vw">
                    <h2 style="margin-left: 25px">Location</h2>
                    <span> {{ $myJobs->joblocation }}</span>
                    <br />
                    <br>
                    <span>Salary to be discussed when accepted.</span>
                </div>
            </div>
        </div>
    </div>
    <div id="Back_button">
        <a href="/employer/myjobs" class="fadeIn">
            <svg class="Ellipse_15">
                <ellipse fill="rgba(255,255,255,1)" id="Ellipse_15" rx="100%" ry="100%" cx="100%" cy="100%">
                </ellipse>
            </svg>
            <img id="arrow_head" alt="Arrow Head" src="{{ asset('assets/images/arrow_head.png') }}">
        </a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('assets/scripts/script.js') }}"></script>
</body>

</html>
