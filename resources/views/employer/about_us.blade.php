<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/normalize.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/grid.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/ionicons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/about.min.css') }}">
    <title>About Us</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/images/safari-pinned-tab.svg') }}" color="#ffdc0d">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#ffdc0d">
    <meta name="msapplication-config" content="{{ asset('assets/images/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
    <script defer src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.min.js"></script>
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script defer src="{{ asset('assets/scripts/about.min.js') }}"></script>
</head>

<!-- Student -->


<body class="emp-body" style="background-image: url('{{ asset('assets/images/Background_2_emp.png') }}');">
    <header>
        <nav>
            <div class="row">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Tulba logo" class="logo" />
                <ul class="main-nav js--main-nav">
                    <li><a href="/employer">Home</a></li>
                    <li><a href="https://googleplay.com">Our App</a></li>
                    <li><a href="/employer/stories">Stories</a></li>
                    <li><a href="/employer/partners">Partners</a></li>
                    <!-- Student -->
                    <!-- Logged Out -->

                    <!-- Logged In

            -->
                    @if (!session()->has('userEmail'))
                    <li><a href="/employer/login" class="btn btn-full btn-login">Login</a></li>
                    @else
                    <li class="profile-container">
                        <img class="profile" alt="Profile Image"
                            src="{{ asset('images').'/'.session()->get('profile_photo') }}">
                        <div class="dropdown">
                            <ul>
                                <li><a href="/employer/profile">My Profile</a></li>
                                <li><a href="/employer/jobs">My Jobs</a></li>
                                <li><a href="/logout">Log out</a></li>
                            </ul>
                        </div>
                    </li>
                    @endif

                    <!-- Employer -->
                    <!-- Logged Out

				-->
                    <!-- Logged In

				-->

                </ul>
                <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
            </div>
        </nav>
    </header>

    <section class="section-about">
        <div class="row">
            <h2>Who are we?</h2>
            <div class="js--wp-1">
                <p class="long-copy">
                    Tulba is the brainchild of a bunch of undergraduate students who were
                    willing to defy norms and take on the challenge of solving the issue
                    of student unemployment which has seen students facing troubles in
                    terms of financing their personal projects.<br /><br />As part of
                    Developer Student Clubs, UET Taxila students have developed the
                    platform Tulba which connects students with the right
                    opportunities. It helps the local businesses acquire the best of
                    minds and individuals who satisfy their vacancy. <br /><br />This is
                    the first step in eradicating student unemployment.
                </p>
                <img alt="DSC UET Taxila Logo" src="{{ asset('assets/images/DSC_UETT_Logo.png') }}">
            </div>
        </div>
    </section>

    <section class="section-team">
        <div class="row team-container">
            <h2>Our Team</h2>
            <div class="col span-1-of-3">
                <div class="our-team">
                    <div class="pic">
                        <img alt="Shahzeb Kazmi" src="{{ asset('assets/images/shahzeb.png') }}">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Syed Shahzeb Kazmi</h3>
                        <span class="post">Flutter App Developer</span>
                    </div>
                    <ul class="social">
                        <li>
                            <a href="https://www.linkedin.com/in/shahzeb-k-a935b2128/" class="fa fa-envelope">Linkedin
                                Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col span-1-of-3">
                <div class="our-team">
                    <div class="pic">
                        <img alt="Muhammad Ali" src="{{ asset('assets/images/ali.png') }}">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Muhammad Ali</h3>
                        <span class="post">Fullstack Web Developer</span>
                    </div>
                    <ul class="social">
                        <li>
                            <a href="https://www.linkedin.com/in/muhammad-ali-4ab631198/"
                                class="fa fa-envelope">Linkedin Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col span-1-of-3">
                <div class="our-team">
                    <div class="pic">
                        <img alt="Fasih Mehmood" src="{{ asset('assets/images/fasih.png') }}">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Fasih Mehmood</h3>
                        <span class="post">Front-end Web Developer</span>
                    </div>
                    <ul class="social">
                        <li>
                            <a href="https://www.linkedin.com/in/fasih-mehmood-b857b2175/"
                                class="fa fa-envelope">Linkedin Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
