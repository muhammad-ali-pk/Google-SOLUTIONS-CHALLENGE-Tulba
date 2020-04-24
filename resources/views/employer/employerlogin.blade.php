<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>Employer Login</title>
    <link rel="icon" href="{{ asset('assets/images/Logo_Title.png') }}" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Product+Sans&display=swap' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('assets/styles/pretty-checkbox.min.css') }}" />
    <link href="{{ asset('assets/styles/Student_Login.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/styles/animate.css') }}" rel="stylesheet" type="text/css">
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
    <style>
        #Student_Login {
            background-image: url("{{ asset('assets/images/Background_login_emp.png') }}");
            background-size: cover;
            background-position: left;
        }

        #Login_Dialog {
            background-color: #fff;
        }
    </style>
</head>

<body>
    <div id="Student_Login">
        <div id="Login_Dialog" class="fadeIn">
            <div id="Login_To_Your_Account">
                <span>Login To Your Account</span>
            </div>
            <form id="login_form" name="login_form" method="post" action="/employer/login">
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
                    <a href="/employer/register">Register Now</a>
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
                        <img id="arrow_head" alt="Arrow Head" src="{{ asset('assets/images/arrow_head.png') }}">
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
            <img id="Logo" class="fadeIn" alt="Logo Image" src="{{ asset('assets/images/Logo.png') }}">
        </a>
        <img id="student_photo" class="fadeIn" alt="Student Photo" src="{{ asset('assets/images/job_photo.png') }}">
    </div>

    <script>
        function Alert(){
                alert('hello');
        }
    </script>
</body>

</html>
