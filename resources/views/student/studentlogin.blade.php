<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>Student Login</title>
    <link rel="icon" href=" {{ asset('assets/images/Logo_Title.png') }} " type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Product+Sans&display=swap' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('assets/styles/pretty-checkbox.min.css') }} " />
    <link href=" {{ asset('assets/styles/Student_Login.css') }} " rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/styles/animate.css') }}" type="text/css">
    <script src="{{ asset('assets/scripts/sweetalert2@9.min.js') }}"></script>
    <script type="text/javascript">
        error();

        function error() {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please make sure all fields are filled correctly',
            });
        }

        function validate_page() {
            if ((document.login_form.email.value == "") ||
                (document.login_form.password.value == "")) {
                error();
                return false;
            }
            return true;
        }

    </script>
</head>

<body>
    <div id="Student_Login">
        <div id="Background">
            <svg class="Ellipse_9">
                <ellipse fill="rgba(255,204,0,1)" id="Ellipse_9" rx="1025" ry="938" cx="1025" cy="938">
                </ellipse>
            </svg>
            <svg class="Ellipse_8">
                <ellipse fill="rgba(255,204,0,1)" id="Ellipse_8" rx="972" ry="924" cx="972" cy="924">
                </ellipse>
            </svg>
        </div>
        <div id="Login_Dialog">
            <div id="Login_To_Your_Account" style="text-align: center">
                <span>Login To Your Account</span><br>
                <span> {{ $errormessage??'' }} </span>
            </div>
            <form id="login_form" method="post" action="/student/login">
                @csrf
                <input id="Email_entry" name="email" type="email" placeholder="Email Address" required />
                <input id="Password_entry" name="password" type="password" placeholder="Password" required />
                <div class="pretty p-default p-curve p-thick Rectangle_6">
                    <input type="checkbox" name="remember" />
                    <div class="state">
                        <label>Remember Password</label>
                    </div>
                </div>
                <div id="New_Here__Register_Now">
                    <span>New Here? </span>
                    <a href="/student/register">Register Now</a>
                </div>
                <button type="submit" onclick="return validate_page()">
                    <div id="Login_button">
                        <svg class="Ellipse_10">
                            <ellipse fill="rgba(255,204,0,1)" id="Ellipse_10" rx="50%" ry="50%" cx="0" cy="50%">
                            </ellipse>
                        </svg>
                        <svg class="Ellipse_11">
                            <ellipse fill="rgba(255,255,0,0.639)" id="Ellipse_11" rx="50%" ry="50%" cx="0" cy="60%">
                            </ellipse>
                        </svg>
                        <img id="arrow_head" src=" {{ asset('assets/images/arrow_head.png') }} ">
                    </div>
                </button>
                @if ($errors->any())
                <script>
                    Swal.fire({
                    icon: 'error',
                    title: 'Authentication Error',
                    text: 'Email or Password Incorrect!',
                    })
                </script>
                @endif
            </form>
        </div>
        <a href="/">
            <img id="Logo" src=" {{ asset('assets/images/Logo.png') }}">
        </a>
        <img id="student_photo" src=" {{ asset('assets/images/student_photo.png') }}">
        <svg class="Rectangle_7">
            <rect fill="rgba(255,255,255,1)" id="Rectangle_7" rx="0" ry="0" x="0" y="0" width="4" height="972">
            </rect>
        </svg>
    </div>
</body>

</html>
