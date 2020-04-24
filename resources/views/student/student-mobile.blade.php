<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="{{ asset('assets/images/Logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/ionicons.min.css') }}">
    <title>Tulaba</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/styles/student-index.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Google+Sans&display=swap' rel='stylesheet' type='text/css'>
</head>

<body style="background-image: url('{{ asset('assets/images/Background.png') }}')">
    <header>
        <nav>
            <div class="row">
                <img alt="Tulba logo" class="logo" src="{{ asset('assets/images/Logo.png') }}">
                <ul class="nav js--nav">
                    <li><span class="current-tab">Home</span></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Stories</a></li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#" class="btn">Login</a></li>
                </ul>
                <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
            </div>
        </nav>
    </header>
    <section class="home-content">
        <div class="row">
            <div class="col span-1-of-2 text">
                <h2>Student</h2>
                <blockquote>
                    Opportunity is missed by most people because it is dressed in overalls and looks like work.
                </blockquote>
                <a href="#" class="btn job-invert">Find A Job</a>
            </div>
            <div class="col span-1-of-2 pics">
                <img class="pic_1" alt="Group of people sitting"
                    src="{{ asset('assets/images/group_of_people_sitting.png') }}">
                <img class="pic_2" alt="Woman writing on a notebook"
                    src="{{ asset('assets/images/woman_writing_on_a_notebook.png') }}">
            </div>
        </div>
    </section>
    <footer class="row">
        <a href="/">
            <ion-icon class="back-button" name="chevron-back-outline"></ion-icon>
        </a>
    </footer>


    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('assets/scripts/sweetalert2@9.min.js') }}"></script>
    <script>
        function error() {
            Swal.fire({
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Download App",
                cancelButtonText: 'Close',
                confirmButtonColor: '#000',
                title: 'Sorry...',
                text: "We're working on the mobile version of the website. Please download the android app or visit the website on a laptop."
            })
        };

        $(document).ready(function() {

            /* Mobile nav */
            $('.js--nav-icon').click(function() {
                var nav = $('.js--nav');
                var icon = $('.js--nav-icon i');

                nav.slideToggle(200);
                if (icon.hasClass('ion-navicon-round')) {
                    icon.addClass('ion-close-round');
                    icon.removeClass('ion-navicon-round');
                } else {
                    icon.removeClass('ion-close-round');
                    icon.addClass('ion-navicon-round');
                }
            });
            $('a[href="#"]').click(function() {
                error();
                $('.swal2-confirm').click(function() {
                    window.location.href="https://play.google.com/store/apps?hl=en"
                });
            });
        });

    </script>
</body>

</html>
