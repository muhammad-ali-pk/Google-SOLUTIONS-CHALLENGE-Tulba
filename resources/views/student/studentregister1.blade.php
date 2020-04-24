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
    <link href="{{asset('assets/styles/animate.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="Register_Page1">
        <div id="Background">
            <svg class="Ellipse_9">
                <ellipse fill="rgba(255,204,0,1)" id="Ellipse_9" rx="50%" ry="24%" cx="47%" cy="27%">
                </ellipse>
            </svg>
            <svg class="Ellipse_8">
                <ellipse fill="rgba(255,204,0,1)" id="Ellipse_8" rx="47%" ry="28%" cx="47%" cy="27%">
                </ellipse>
            </svg>
        </div>
        <form id="registration_form" name="registration_form" method="post" action="/student/register" enctype="multipart/form-data"
            onSubmit="return validate_page2()">
            @csrf
            <div id="page_1" class="fadeIn">
                <div id="Basic_Info">
                    <input id="Applicant_Full_Name" type="text" name="fullname" placeholder="Applicant's Full Name"
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
                    <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" required="" capture>
                </div>
                <div id="forward_button" onclick="validate_page1()">
                    <svg class="Ellipse_15">
                        <ellipse fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,0.2)" stroke-width="1px"
                            stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto"
                            id="Ellipse_15" rx="100%" ry="100%" cx="100%" cy="100%">
                        </ellipse>
                    </svg>
                    <img id="arrow_head" alt="Arrow Head" src="{{ asset('assets/images/arrow_head.png') }}">
                </div>
            </div>
            <div id="page_2" class="fadeIn">
                <div id="Academic_Panel_a">
                    <textarea id="option1" name="institution" rows="14" cols="10" wrap="soft" maxlength="100"
                        style="overflow:hidden; resize:none;" placeholder="Enter University/School" required></textarea>
                    <select id="option2" name="academicyear" placeholder="Enter
                        Academic Year" required>
                        <option value="1" selected>1st Year</option>
                        <option value="2">2nd Year</option>
                        <option value="3">3rd Year</option>
                        <option value="4">4th Year</option>
                    </select>
                    <input id="option3" name="cgpa" type="number" step="0.01" min="0" max="4" placeholder="Enter CGPA"
                        required />
                    <input id="option4" name="schoolhours" type="number" min="8" max="16"
                        placeholder="Enter School Hours" required />
                </div>
                <div id="Skills_Panel_a">
                    <div id="Enter_Select_Relevant_Skills">
                        <span>Relevant Skills</span>
                    </div>
                    <textarea id="skills" name="skills" rows="14" cols="10" wrap="soft" maxlength="400" style="overflow:hidden;
                        resize:none;" placeholder="Enter skills separated by commas" required></textarea>
                </div>
                <button type="submit" onclick="validate_page1(), validate_page2()">
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
            <img id="profileImage" src="{{ asset('assets/images/plus.svg') }}" />
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
            if ((document.registration_form.fullname.value == "") ||
                (document.registration_form.fatherfullname.value == "") ||
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
            if ((document.registration_form.institution.value == "") ||
                (document.registration_form.academicyear.value == "") ||
                (document.registration_form.cgpa.value == "") ||
                (document.registration_form.schoolhours.value == "") ||
                (document.registration_form.skills.value == "")) {
                error();
                return false;
            }
            return true;
        }

        function forward() {
            document.getElementById("page_1").style.display = "none";
            document.getElementById("profile-container").style.display = "none";
            document.getElementById("page_2").style.display = "block";
        }

        function backward() {
            document.getElementById("page_1").style.display = "block";
            document.getElementById("profile-container").style.display = "block";
            document.getElementById("page_2").style.display = "none";
        }

    </script>
</body>

</html>
