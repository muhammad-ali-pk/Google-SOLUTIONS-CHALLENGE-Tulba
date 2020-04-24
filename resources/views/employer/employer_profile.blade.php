<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
			maximum-scale=1, user-scalable=no">
    <title>Profile</title>
    <link rel="icon" href="{{ asset('assets/images/Logo_Title.png') }}" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Product+Sans&display=swap' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets/styles/Profile_Page.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('assets/scripts/sweetalert2@9.min.js') }}"></script>
    <style>

        .Rectangle_12 {
            background-color: black;
        }

        #Submit,
        #Profile {
            color: rgba(255, 204, 0, 1);
        }

        #form div {
            margin-bottom: 5%;
        }
    </style>
</head>

<body>
    <div id="Profile_Page" style="background-image: url({{ asset('assets/images/Background_profile_emp.png') }})">
        <div id="Header">
            <img id="Profile_Picture" src="{{ asset('images').'/'.$employerData['profile_photo'] }}">
            <div class="Rectangle_12">
                <div id="Profile">
                    <span>Edit Profile</span>
                </div>
            </div>
        </div>
        <div id="Biographics_Card">
            <div class="Rectangle_10"></div>
            <div id="Biographics">
                <span>Biographics</span>
            </div>
            <div class="details">
                <ul>
                    <li>
                        <span>Full Name</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $employerData['fullname'] }}</span>
                    </li>
                    <li>
                        <span>Father's Name</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $employerData['fatherfullname'] }}</span>
                    </li>
                    <li>
                        <span>Email Address</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $employerData['email'] }}</span>
                    </li>
                    <li>
                        <span>Gender</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $employerData['gender'] }}</span>
                    </li>
                    <li>
                        <span>Date of Birth</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $employerData['dob'] }}</span>
                    </li>
                    <li>
                        <span>Address</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $employerData['address'] }}</span>
                    </li>
                </ul>
            </div>
            <svg class="Line_13" viewBox="0 0 129 1">
                <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter"
                    stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_13" d="M 0 0 L 129 0">
                </path>
            </svg>
        </div>
        <div id="Academic_Card">
            <div class="Rectangle_10"></div>
            <div id="Academic_Info">
                <span>Academic Info</span>
            </div>
            <div class="details">
                <ul>
                    <li>
                        <span>Alma Mater University Name</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $employerData['university'] }}</span>
                    </li>
                    <li>
                        <span>Graduating Discipline</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $employerData['discipline'] }}</span>
                    </li>
                    <li>
                        <span>Graduating Year</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $employerData['year'] }}</span>
                    </li>
                    <li>
                        <span>Notable Experiences</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <ul style="list-style-type: none">
                            <?php
                        $skills = $employerData['skills'];
                        $skills = explode (",", $skills);
                        foreach ($skills as $skill) {
                            echo "<li>$skill</li>";
                        }
                        ?>
                        </ul>
                    </li>
                </ul>
            </div>
            <svg class="Line_13" viewBox="0 0 129 1">
                <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter"
                    stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_13_d" d="M 0 0 L 129 0">
                </path>
            </svg>
        </div>
        <div id="Academic_Card_d">
            <div class="Rectangle_10"></div>
            <div id="Company">
                <span>Company Info</span>
            </div>
            <div class="details1">
                <ul>
                    <li>
                        <span>Company Name</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $employerData['company'] }}</span>
                    </li>
                    {{--  <li>
                        <span>Year Established</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>2014</span>
                    </li> --}}
                    <li>
                        <span>Company Address</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $employerData['companyaddress'] }}</span>
                    </li>
                    <li>
                        <span>Contact Email</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $employerData['companyphone'] }}</span>
                    </li>
                    <li>
                        <span>Total Employees</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $employerData['total_employees'] }}</span>
                    </li>
                </ul>
            </div>
            <svg class="Line_13" viewBox="0 0 129 1">
                <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter"
                    stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_13_ea"
                    d="M 0 0 L 129 0">
                </path>
            </svg>
        </div>
        <a href="/employer">
            <img id="Tulba" style="border-radius:50%" src="{{ asset('assets/images/Logo.png') }}">
        </a>
    </div>
    <div id="popup_background">
        <div id="popup">
            <span class="close">&times;</span>
            <div class="Rectangle_12">
                <div id="Submit">
                    <span>Submit</span>
                </div>
            </div>
            <div id="form_div">
                <form id="form" name="profile_edit_form" method="post" action="/employer/profile" target="_self">
                    @csrf
                    @method("PUT")
                    <div class="part">
                        <div>
                            <label for="home_address">Home Address</label><br />
                            <textarea id="home_address" name="address" rows="2" cols="40" wrap="soft" maxlength="400"
                                style="overflow:hidden;
                                        resize:none;" placeholder="{{ $employerData['address'] }}" required></textarea>
                        </div>
                        <div>
                            <label for="skills">Notable Experiences</label><br />
                            <textarea id="skills" name="skills" wrap="soft" maxlength="400" style="overflow:hidden;
                        resize:none;" placeholder="{{ $employerData['skills'] }}" required></textarea>
                        </div>
                    </div>
                    <div class="part">
                        <div>
                            <label for="company_name">Company Name</label><br />
                            <textarea id="company_name" name="company" rows="2" cols="40" wrap="soft" maxlength="400"
                                style="overflow:hidden;
                                            resize:none;" placeholder="{{ $employerData['company'] }}"
                                required></textarea>
                        </div>
                        <div>
                            <label for="company_address">Company Address</label><br />
                            <textarea id="company_address" name="companyaddress" rows="2" cols="40" wrap="soft"
                                maxlength="400" style="overflow:hidden;
                                            resize:none;" placeholder="{{ $employerData['companyaddress'] }}"
                                required></textarea>
                        </div>
                        <div>
                            <label for="company_email">Contact</label><br />
                            <textarea id="company_address" name="companyphone" rows="2" cols="40" wrap="soft"
                                maxlength="400" style="overflow:hidden;
                                            resize:none;" placeholder="{{ $employerData['companyphone'] }}"
                                required></textarea>
                        </div>
                        <div>
                            <label for="cgpa">Total Employees</label><br />
                            <input id="option2" name="total_employees"
                                placeholder="{{ $employerData['total_employees'] }}" type="number" step="1" min="0"
                                required />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function success() {
            Swal.fire({
                icon: 'success',
                title: 'Submitted Successfully',
                text: 'Your profile will be updated after verification.',
            });
        }
        var span = document.getElementsByClassName("close");
        var popup = document.getElementById("popup_background");
        var btn = document.getElementsByClassName("Rectangle_12");
        window.onclick = function(event) {
            if (event.target == popup) {
                close();
            }
        }

        function close() {
            popup.style.display = "none";
        }
        span[0].onclick = close;
        window.onload = myMain;

        function myMain() {
            btn[0].onclick = buton;
            btn[1].onclick = buton1;
        }

        function buton1(e) {

            document.forms["profile_edit_form"].submit();
            popup.style.display = "none";
            success();
        }

        function buton(e) {
            popup.style.display = "flex";
        }
        var n = 0;
    </script>
</body>

</html>
