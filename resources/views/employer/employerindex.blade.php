<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Home</title>
    <link rel="icon" href="{{ asset('assets/images/Logo_Title.png') }}" type="image/x-icon">
    <link href="{{ asset('assets/styles/Employer_W_Login_Home.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Google+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('assets/styles/animate.css') }}" type="text/css">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script defer src="{{ asset('assets/scripts/script.js') }}"></script>
</head>

<body>
    <div id="Employer_W_Login_Home">
        <div id="Nav">
            <a href="/">
                <img id="Logo" src="{{asset('assets/images/Logo.png')}}">
            </a>
            <div id="Options">
                <svg class="Rectangle_1">
                    <rect fill="rgba(255,204,0,1)" stroke="rgba(112,112,112,1)" stroke-width="1px"
                        stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto"
                        id="Rectangle_1" rx="0" ry="0" x="0" y="0" width="80%" height="80%">
                    </rect>
                </svg>
                <div id="Home">
                    <span>Home</span>
                </div>
                <div id="About">
                    <a href="/employer/aboutus">About</a>
                </div>
                <div id="Employer">
                    <span>Employer</span>
                </div>
                <div id="Stories">
                    <a href="/employer/stories">Stories</a>
                </div>
                <div id="Partners">
                    <a href="/employer/partners">Partners</a>
                </div>
                @if (!session()->has('userEmail'))
                <svg class="Path_1" viewBox="0 0 162 61">
                    <path fill="rgba(255,204,0,1)" stroke="rgba(112,112,112,1)" stroke-width="1px"
                        stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto"
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
        <div id="Home_pics">
            <img id="pic_2" src="{{ asset('assets/images/graphs_job_laptop.png') }}">
            <img id="pic_1" src="{{ asset('assets/images/architect_composition_data.png') }}">
        </div>
        <div id="Text_quote">
            <div id="there_is_no_exercise">
                <span>There is no exercise better for the<br />heart than reaching down and lifting<br />people
                    up.</span>
            </div>
            <div id="_">
                <span>"</span>
            </div>
        </div>
        <div id="Back_button">
            <a href="/">
                <svg class="Ellipse_15">
                    <ellipse fill="rgba(255,255,255,1)" id="Ellipse_15" rx="100%" ry="100%" cx="100%" cy="100%">
                    </ellipse>
                </svg>
                <img id="arrow_head" src="{{ asset('assets/images/arrow_head.png') }}">
            </a>
        </div>
        <div id="PostJob_Button">
            @if (!session()->has('userEmail'))
            <a href="/employer/login">
                @else
                <a href="/employer/postjob">
                    @endif
                    <svg class="Rectangle_2">
                        <rect fill="rgba(255,204,0,1)" stroke="rgba(112,112,112,1)" stroke-width="1px"
                            stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto"
                            id="Rectangle_2" rx="10%" ry="100%" x="0" y="0" width="90.881458966%" height="73.21428571%">
                        </rect>
                    </svg>
                    <div id="Post_A_Job">
                        <span>Post A Job</span>
                    </div>
                </a>
        </div>
    </div>
</body>

</html>
