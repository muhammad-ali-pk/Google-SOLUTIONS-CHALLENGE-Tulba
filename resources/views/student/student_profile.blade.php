<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
			maximum-scale=1, user-scalable=no">
    <title>Profile</title>
    <link rel="icon" href="{{asset('assets/images/Logo_Title.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/styles/Profile_Page.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('assets/scripts/sweetalert2@9.min.js') }}"></script>
</head>

<body>
    <div id="Profile_Page">
        <div id="Header">
            <img id="Profile_Picture" src="{{ asset('images').'/'.session()->get('profile_photo') }}">
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
                        <span>{{ $studentData['fullname'] }}</span>
                    </li>
                    <li>
                        <span>Father's Name</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $studentData['fatherfullname'] }}</span>
                    </li>
                    <li>
                        <span>Email Address</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $studentData['email'] }}</span>
                    </li>
                    <li>
                        <span>Gender</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $studentData['gender'] }}</span>
                    </li>
                    <li>
                        <span>Date of Birth</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $studentData['dob'] }}</span>
                    </li>
                    <li>
                        <span>Address</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $studentData['address'] }}</span>
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
                        <span>University/School Name:</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $studentData['institution'] }}</span>
                    </li>
                    <li>
                        <span>Current Semester/Year:</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $studentData['academicyear'] }}</span>
                    </li>
                    <li>
                        <span>CGPA:</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $studentData['cgpa'] }}</span>
                    </li>
                    <li>
                        <span>University/School Address:</span>
                        <svg class="Line" viewBox="0 0 129 1">
                            <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px"
                                stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
                                shape-rendering="auto" d="M 0 0 L 129 0">
                            </path>
                        </svg>
                        <span>{{ $studentData['institution_address'] }}</span>
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
            <div id="Skills">
                <span>Skills</span>
            </div>
            <div class="details">
                <ul>
                    <?php
                $skills = $studentData['skills'];
                $skills = explode (",", $skills);
                foreach ($skills as $skill) {
                    echo "<li>$skill</li><br>";
                }
                ?>
                </ul>
            </div>
            <svg class="Line_13" viewBox="0 0 129 1">
                <path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter"
                    stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_13_ea"
                    d="M 0 0 L 129 0">
                </path>
            </svg>
        </div>
        <a href="/student">
            <img id="Tulba" style="border-radius: 50%" src="{{ asset('assets/images/Logo.png') }}">
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
                <form id="form" name="profile_edit_form" method="post" action="/student/profile" target="_self">
                    @csrf
                    @method("PUT")
                    <div class="part">
                        <div>
                            <label for="home_address">Home Address</label><br />
                            <textarea id="home_address" name="address" rows="2" cols="40" wrap="soft" maxlength="400"
                                style="overflow:hidden;
                                        resize:none;" placeholder="{{ $studentData['address'] }}" required></textarea>
                        </div>
                        <div>
                            <label for="skills">Skills</label><br />
                            <textarea id="skills" name="skills" wrap="soft" maxlength="400" style="overflow:hidden;
                        resize:none;" placeholder="{{ $studentData['skills'] }}" required></textarea>
                        </div>
                    </div>
                    <div class="part">
                        <div>
                            <label for="uni_name">University/School Name</label><br />
                            <textarea id="uni_name" name="institution" rows="2" cols="40" wrap="soft" maxlength="400"
                                style="overflow:hidden;
                                            resize:none;" placeholder="{{ $studentData['institution'] }}"
                                required></textarea>
                        </div>
                        <div>
                            <label for="uni_address">University/School Address</label><br />
                            <textarea id="uni_address" name="institution_address" rows="2" cols="40" wrap="soft"
                                maxlength="400" style="overflow:hidden;
                                            resize:none;" placeholder="{{ $studentData['institution_address'] }}"
                                required></textarea>
                        </div>
                        <div>
                            <label for="academicyear">Current Year</label><br />
                            <select id="option1" name="academicyear" placeholder="{{ $studentData['academicyear'] }}"
                                required>
                                <option value="1">1st Year</option>
                                <option value="2">2nd Year</option>
                                <option value="3">3rd Year</option>
                                <option value="4">4th Year</option>
                            </select>
                        </div>
                        <div>
                            <label for="cgpa">CGPA</label><br />
                            <input id="option2" name="cgpa" type="number" step="0.01" min="0" max="4"
                                placeholder="{{ $studentData['cgpa'] }}" required />
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
    </script>
</body>

</html>
