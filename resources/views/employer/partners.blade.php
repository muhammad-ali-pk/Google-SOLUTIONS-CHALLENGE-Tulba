<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
			maximum-scale=1, user-scalable=no">
    <title>Partners</title>
    <link rel="icon" href="{{ asset('assets/images/Logo_Title.png') }}" type="image/x-icon">
    <link href="{{ asset('assets/styles/Partners_wlog.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Google+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('assets/styles/animate.css') }}" type="text/css">
    <script  defer src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script  defer src="{{ asset('assets/scripts/script.js') }}"></script>
    <style>
        #Partners_login {
            background-image: url("{{ asset('assets/images/Background_2_emp.png') }}");
        }

        #Options>div,
        #Options>div>a {
            color: rgba(255, 255, 255, 1);
        }
    </style>
</head>

<body>
    <div id="Partners_login">
        <div id="Stories" class="fadeIn">
            <div class="Rectangle_14"></div>
            <img id="daraz_logo" src="{{ asset('assets/images/daraz_logo.png') }}">
            <div id="Partners">
                <span>Partners</span>
            </div>
            <img id="hbl_logo" src="{{ asset('assets/images/hbl_logo.png') }}">
            <img id="jazz_logo" src="{{ asset('assets/images/jazz_logo.png') }}">
            <img id="tehzeeb_bakers" src="{{ asset('assets/images/tehzeeb_logo.png') }}">
            <img id="telenor" src="{{ asset('assets/images/telenor_logo.png') }}">
            <img id="uber" src="{{ asset('assets/images/uber_logo.png') }}">
            <img id="mcdonalds" src="{{ asset('assets/images/mcdonalds_logo.png') }}">
        </div>
        <div id="Nav">
            <a href="Employer_Loggedin_Home.html">
                <img id="Logo" src="{{ asset('assets/images/Logo.png') }}"></a>
            <div id="Options">
                <svg class="Rectangle_1">
                    <rect fill="rgba(255,204,0,1)" id="Rectangle_1" rx="0" ry="0" x="0" y="0" width="80%" height="80%">
                    </rect>
                </svg>
                <div id="Home">
                    <a href="/employer">Home</a>
                </div>
                <div id="About">
                    <a href="/employer/aboutus">About</span>
                </div>
                <div id="Stories_b">
                    <a href="/employer/stories">Stories</a>
                </div>
                <div id="Partners_ba">
                    <span>Partners</span>
                </div>
            </div>
            @if (!session()->has('userEmail'))
                <svg class="Path_1" viewBox="0 0 162 61">
                    <path fill="rgba(0,0,0,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter"
                        stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto"
                        onclick="application.goToTargetView(event)" id="Path_1" d="M 30.5 0 L 131.5 0 C 148.3446807861328 0 162
                        13.65531349182129 162 30.5 C 162 47.34468841552734 148.3446807861328 61
                        131.5 61 L 30.5 61 C 13.65531349182129 61 0 47.34468841552734 0 30.5 C 0
                        13.65531349182129 13.65531349182129 0 30.5 0 Z">
                    </path>
                </svg>
                <a style="color: rgba(255, 204, 0, 1);" href="/employer/login">
                    <div id="Login">
                        <span>Login</span>
                    </div>
                </a>
                @else
                <img id="model" alt="Profile Image" src="{{ asset('images').'/'.session()->get('profile_photo') }}">
                <div class="dropdown emp">
                    <ul>
                        <li><a href="/employer/profile">My Profile</a></li>
                        <li><a href="/employer/myjobs">My Jobs</a></li>
                        <li><a href="/logout">Log out</a></li>
                    </ul>
                </div>
                @endif
        </div>
    </div>
</body>

</html>
