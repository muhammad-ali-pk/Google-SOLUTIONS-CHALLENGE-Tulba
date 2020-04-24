<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
            maximum-scale=1, user-scalable=no">
    <title>Post A Job</title>
    <link rel="icon" href="{{ asset('assets/images/Logo_Title.png') }}" type="image/x-icon">
    <link href="{{ asset('assets/styles/JobPost.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('assets/styles/animate.css') }}" type="text/css">
</head>

<body>
    <div id="JobPost">
        <div id="Background">
            <svg class="Ellipse_9">
                <ellipse fill="rgba(31,90,80,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter"
                    stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_9" rx="50%" ry="45%"
                    cx="50%" cy="45%">
                </ellipse>
            </svg>
            <svg class="Ellipse_8">
                <ellipse fill="rgba(31,90,80,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter"
                    stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_8" rx="50%" ry="45%"
                    cx="50%" cy="45%">
                </ellipse>
            </svg>
        </div>
        <div id="Background_he">
            <svg class="Ellipse_9_hf">
                <ellipse fill="rgba(31,90,80,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter"
                    stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_9_hf" rx="50%"
                    ry="45%" cx="50%" cy="45%">
                </ellipse>
            </svg>
            <svg class="Ellipse_8_hg">
                <ellipse fill="rgba(31,90,80,1)" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter"
                    stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_8_hg" rx="50%"
                    ry="48%" cx="50%" cy="46%">
                </ellipse>
            </svg>
        </div>
        <img id="Tulba" src="{{ asset('assets/images/Logo.png') }}">
        <form id="job_form" name="post_job" method="post" action="/employer/postjob" onsubmit="return validate_form()">
            @csrf
            <div id="application_dialog">
                <svg class="Holder">
                    <rect fill="rgba(255,255,255,1)" stroke="rgba(54,52,52,0.49)" stroke-width="1px"
                        stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto"
                        id="Holder" rx="10%" ry="10%" x="0" y="0" width="98.13780260%" height="98.3471074%">
                    </rect>
                </svg>
                <div id="Post_An_Opportunity">
                    <span>Post An Opportunity</span>
                </div>
                <input id="Job_Title" name="jobtitle" placeholder="Job Title" required />
                <select id="Job_Type" name="jobtype" placeholder="Job Type" required>
                    <option value="fulltime" selected>Full Time</option>
                    <option value="parttime">Part Time</option>
                    <option value="freelance">Freelance</option>
                    <option value="internship">Internship</option>
                    <option value="temporary">Temporary</option>
                </select>
                <input id="Website" type="text" name="website" placeholder="Company Website if any" />
                <input id="Job_Pay" type="number" name="pay" step="0.01" min="0" placeholder="Job Pay in Dollars"
                    required />
                <input id="Job_Location" type="text" name="joblocation" placeholder="Job Location" required />
                <input type="text" name="discipline" id="discipline" placeholder="Required Discipline" required>
                <input type="number" name="working_hours" id="working_hours" step="0.1" placeholder="Hours Per Week"
                    required>
                <label for="deadline">Deadline:</label>
                <input id="Deadline" type="date" name="deadline" placeholder="Deadline" required />
                <input id="cgpa" type="number" name="cgpa" step="0.01" min="0" max="4" placeholder="Minimum CGPA" required />
                <div id="Basic_Information">
                    <span>Basic Information</span>
                </div>
                <div id="Employer_Req">
                    <div id="Employer_Requirements">
                        <span>Employer Requirements</span>
                    </div>
                    <textarea id="skills" name="skills" wrap="soft" style="overflow-y:auto;
                    resize:none;" placeholder="Required Skills separated by commas" required></textarea>

                </div>
            </div>
            <button id="submit_button" type="submit" onclick="validate_page()">
                <img id="circle" src="{{ asset('assets/images/circle.png') }}" />
                <img id="arrow_head" src="{{ asset('assets/images/arrow_head.png') }}" />
            </button>
        </form>
    </div>
    <script defer src="{{ asset('assets/scripts/sweetalert2@9.min.js') }}"></script>
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
            if ((document.post_job.jobtitle.value == "") ||
                (document.post_job.pay.value == "") ||
                (document.post_job.joblocation.value == "") ||
                (document.post_job.discipline.value=="")||
                (document.post_job.workinghours.value=="")||
                (document.post_job.deadline.value == "") ||
                (document.$post_job.cgpa.value == "") ||
                (document.post_job.skills.value == "")) {
                error();
                return false;
            }
            return true;
        }
    </script>
</body>

</html>
