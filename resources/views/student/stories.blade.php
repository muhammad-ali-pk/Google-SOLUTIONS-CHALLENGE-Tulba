<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
			maximum-scale=1, user-scalable=no">
    <title>Stories</title>
    <link href="{{ asset('assets/styles/Stories_wlog.css') }}" rel="stylesheet" type="text/css">
    <link rel="icon" href="{{ asset('assets/images/Logo_Title.png') }}" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Google+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('assets/styles/animate.css') }}" type="text/css">
    <script  defer src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script  defer src="{{ asset('assets/scripts/script.js') }}"></script>
</head>

<body>
    <div id="Stories_wlog">
        <div id="Nav">
            <a href="Student_W_Login_Home.html">
                <img id="Logo" src="{{ asset('assets/images/Logo.png') }}"></a>
            <div id="Options">
                <svg class="Rectangle_1">
                    <rect fill="rgba(255,204,0,1)" stroke="rgba(112,112,112,1)" stroke-width="1px"
                        stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto"
                        id="Rectangle_1" rx="0" ry="0" x="0" y="0" width="80%" height="80%">
                    </rect>
                </svg>
                <div id="Home">
                    <a href="/student">Home</a>
                </div>
                <div id="About">
                    <a href="/student/aboutus">About</a>
                </div>
                <div id="Stories">
                    <span>Stories</span>
                </div>
                <div id="Partners">
                    <a href="/student/partners">Partners</a>
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
                <a style="color: rgba(255, 204, 0, 1);" href="/student/login">
                    <div id="Login">
                        <span>Login</span>
                    </div>
                </a>
                @else
                <img id="model" alt="Student Image" src="{{ asset('images').'/'.session()->get('profile_photo') }}">
                <div class="dropdown">
                    <ul>
                        <li><a href="/student/profile">My Profile</a></li>
                        <li><a href="/logout">Log out</a></li>
                    </ul>
                </div>
                @endif
            </div>
        </div>
        <div id="Stories_bmu" class="fadeIn">
            <div class="Rectangle_14"></div>
            <div class="Rectangle_15"></div>
            <div class="Rectangle_16"></div>
            <div class="Rectangle_17"></div>
            <div id="Stories_bmz">
                <span>Success Stories Coming Soon!</span>
            </div>
            <img id="DSC_UET_Taxila_Logo_x1" src="{{ asset('assets/images/DSC_UET_Taxila_Logo_x1.png') }}">
        </div>
    </div>
</body>

</html>
