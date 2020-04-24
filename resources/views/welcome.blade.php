<!DOCTYPE html>
<html>

<head>
    <script language=JavaScript>
        <!-- http://www.spacegun.co.uk -->

        var message = "function disabled";

        function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }

        if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }

        document.onmousedown = rtclickcheck;

    </script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="{{ asset('assets/images/Logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/welcome.css') }}">
    <script src="{{ asset('assets/scripts/sweetalert2@9.min') }}"></script>
    <link href='https://fonts.googleapis.com/css?family=Google+Sans&display=swap' rel='stylesheet' type='text/css'>
    <title>Welcome</title>
</head>

<body>
    <section class="main">
        <img class="logo" alt="Logo Image" src="{{ asset('assets/images/Logo.png') }}">
        <div class="hero-box">
            <p class="hero-text">Are You A...</p>
            <div class="buttons">
                <a class="btn" href="/student">Student</a>
                <a class="btn" href="/employer">Employer</a>
            </div>
            <p class="bottom-text">Connecting Students and Jobs</p>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('assets/scripts/sweetalert2@9.min.js') }}"></script>
    <script>
        function confirm() {
            Swal.fire({
                title: 'Sorry...',
                text: "We're working on the mobile version of the website. Please download the Android app or use a laptop to access the website!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#000',
                cancelButtonColor: '#888',
                confirmButtonText: 'Download App',
                cancelButtonText: 'Visit anyway'
            }).then((result) => {
                if (result.value) {
                    window.location.href="https://play.google.com/store/apps?hl=en";
                }
            })
        };

        if (screen.width <= 768) {
            confirm();
            $('.btn')[0].setAttribute('href','/student-mobile');
            $('.btn')[1].setAttribute('href','/employer-mobile');
        }

    </script>
</body>

</html>
