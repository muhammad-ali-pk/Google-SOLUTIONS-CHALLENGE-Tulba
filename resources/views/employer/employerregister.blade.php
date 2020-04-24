<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
            maximum-scale=1, user-scalable=no">
    <title>Registration</title>
    <link rel="icon" href="{{ asset('assets/images/Logo_Title.png') }}" type="image/x-icon">
    <link href="{{ asset('assets/styles/Register_Page1.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/styles/pretty-checkbox.min.css') }}" />
    <link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets/styles/animate.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="Register_Page1">
        <div id="Background">
            <svg class="Ellipse_9">
                <ellipse fill="rgba(31,90,80,1)" id="Ellipse_9" rx="50%" ry="24%" cx="47%" cy="27%">
                </ellipse>
            </svg>
            <svg class="Ellipse_8">
                <ellipse fill="rgba(31,90,80,1)" id="Ellipse_8" rx="47%" ry="28%" cx="47%" cy="27%">
                </ellipse>
            </svg>
        </div>
        <form id="registration_form" name="registration_form" method="post" action="/employer/register" enctype="multipart/form-data" >
            @csrf
            <div id="page_1" class="fadeIn">
                <div id="Basic_Info">
                    <input id="Employer_Full_Name" type="text" name="fullname" placeholder="Employer's Full Name"
                        required />
                    <input id="Fathers_Full_Name" type="text" name="fatherfullname" placeholder="Father's Full Name"
                        required />
                    <input id="Email_Address" type="email" name="email" placeholder="Email Address" required />
                    <input id="Password" type="password" name="password" pattern=".{6,}" placeholder="Password"
                        required />
                    <input id="Home_Address" type="text" name="address" placeholder="Home Address" required />
                    <label for="dob">Date Of Birth:</label>
                    <input id="Date_Of_Birth" type="date" name="dob" placeholder="Date Of Birth" required />
                    <input id="Phone" type="tel" name="phone" placeholder="Applicant's Phone Number" required />
                    <div id="Gender">
                        <div class="pretty p-default p-round">
                            <input type="radio" name="gender" value="male" default>
                            <div class="state">
                                <label>Male</label>
                            </div>
                        </div>
                        <div class="pretty p-default p-round">
                            <input type="radio" name="gender" value="female">
                            <div class="state">
                                <label>Female</label>
                            </div>
                        </div>
                        <div class="pretty p-default p-round">
                            <input type="radio" name="gender" value="other">
                            <div class="state">
                                <label>Other</label>
                            </div>
                        </div>
                    </div>
                    <label for="profile_photo" class="profile-label">Upload Profile Picture</label>
                    <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" required >
                </div>
                <div id="forward_button" onclick="forward()">
                    <svg class="Ellipse_15">
                        <ellipse fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,0.2)" stroke-width="1px"
                            stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto"
                            id="Ellipse_15" rx="100%" ry="100%" cx="100%" cy="100%">
                        </ellipse>
                    </svg>
                    <img id="arrow_head" src="{{ asset('assets/images/arrow_head.png') }}">
                </div>
            </div>
            <div id="page_2" class="fadeIn">
                <div id="Academic_Panel">
                    <input class="option" name="university" type="text" placeholder="University Name" required />
                    <input class="option" name="discipline" type="text" placeholder="Graduating Discipline" required />
                    <input class="option" name="year" type="number" step="1" min="1900" max="2050"
                        placeholder="Graduating Year" required />
                    <div class="Relevant_Experiences">
                        <span>Relevant Experiences</span>
                    </div>
                    <textarea class="skills" name="skills" rows="1" cols="5" wrap="soft" maxlength="400" style="overflow:hidden;
                            resize:true;" placeholder="Enter experiences separated by commas" required></textarea>
                    <label for="company_logo" class="company-label">Upload Company Logo</label>
                    <input id="logoUpload" type="file" name="company_logo" placeholder="Photo" required="" capture>
                </div>
                <div id="Academic_Panel_b">
                    <input class="option" name="company" type="text" placeholder="Company Name" required />
                    <input class="option" name="companyaddress" type="text" placeholder="Company Address" required />
                    <input class="option" type="email" name="companyemail" placeholder="Company Email" required />
                    <input class="option" name="companyphone" type="tel" placeholder="Company Phone Number" required />
                    <input class="option" name="position" type="text" placeholder="Position in Company" required>
                    <input class="option" name="total_employees" type="number" step="1" min="0"
                        placeholder="Total Employees" required />
                </div>
                <button type="submit" >
                    <div id="forward_button_a">
                        <svg class="Ellipse_15_a">
                            <ellipse fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,0.2)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" id="Ellipse_15_a" rx="100%" ry="100%" cx="100%" cy="100%">
                            </ellipse>
                        </svg>
                        <img id="arrow_head" alt="Arrow Head" src="{{ asset('assets/images/arrow_head.png') }}">
                    </div>
                </button>
                <div id="backward_button" onclick="backward()">
                    <svg class="Ellipse_15_b">
                        <ellipse fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,0.2)" stroke-width="1px"
                            stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto"
                            id="Ellipse_15_b" rx="100%" ry="100%" cx="100%" cy="100%">
                        </ellipse>
                    </svg>
                    <img id="arrow_head" alt="Arrow Head" src="{{ asset('assets/images/arrow_head.png') }}">
                </div>
            </div>
        </form>
        <div id="profile-container" class="fadeIn">
            <img id="profileImage" src="{{asset('assets/images/plus.svg')}}" />
        </div>
        <div id="logo-container" class="fadeIn">
            <img id="logoImage" src="{{ asset('assets/images/plus.svg') }}" />
        </div>
        <a href="/">
            <img id="Tulba" alt="Logo Image" src="{{ asset('assets/images/Logo.png') }}"></a>
        <div id="Register_An_Account">
            <span>Register An Account</span>
        </div>
    </div>

    <script src="{{ asset('assets/scripts/sweetalert2@9.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('assets/scripts/script.js') }}"></script>
    <script type="text/javascript">
        function error() {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please make sure all fields are filled correctly',
            });
        }

        function validate_page1() {
            if ((document.registration_form.fname.value == "") ||
                (document.registration_form.fatherfname.value == "") ||
                (document.registration_form.email.value == "") ||
                (document.registration_form.password.value == "") ||
                (document.registration_form.address.value == "") ||
                (document.registration_form.dob.value == "") ||
                (document.registration_form.phone.value == "") ||
                (document.registration_form.profile_photo.value == "") ||
                ((document.registration_form.gender[0].checked == false) &&
                    (document.registration_form.gender[1].checked == false) &&
                    (document.registration_form.gender[2].checked == false))) {
                error();
                return;
            }
            if (document.registration_form.password.value.length < 6) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Make sure the password is atleast 6 characters long.'
                });
                return;
            }
            forward();
        }

        function validate_page2() {
            if ((document.registration_form.company.value == "") ||
                (document.registration_form.position.value == "") ||
                (document.registration_form.university.value == "") ||
                (document.registration_form.discipline.value == "") ||
                (document.registration_form.year.value == "") ||
                (document.registration_form.company_address.value == "") ||
                (document.registration_form.company_email.value == "") ||
                (document.registration_form.company_phone.value == "") ||
                (document.registration_form.total_employees.value == "") ||
                (document.registration_form.company_logo.value == "") ||
                (document.registration_form.experience.value == "")) {
                error();
                return false;
            }
            return true;
        }

        function forward() {
            document.getElementById("page_1").style.display = "none";
            document.getElementById("profile-container").style.display = "none";
            document.getElementById("logo-container").style.display = "block";
            document.getElementById("page_2").style.display = "block";
        }

        function backward() {
            document.getElementById("page_1").style.display = "block";
            document.getElementById("profile-container").style.display = "block";
            document.getElementById("logo-container").style.display = "none";
            document.getElementById("page_2").style.display = "none";
        }

    </script>
</body>

</html>
