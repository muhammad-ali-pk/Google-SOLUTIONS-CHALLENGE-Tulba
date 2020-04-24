<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
            maximum-scale=1, user-scalable=no">
    <title>Employer Jobs</title>
    <link rel="icon" href="{{ asset('assets/images/Logo_Title.png') }}" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets/styles/Student_JobPortal.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/styles/animate.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="Student_JobPortal">
        <div id="Background">
            <svg class="Ellipse_9">
                <ellipse fill="" stroke="rgba(31,90,80,1)" stroke-width="1px" stroke-linejoin="miter"
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
        <div id="header">
            <a href="/"><img id="Tulba" alt="Logo Image" style="border-radius: 50%" src="{{ asset('assets/images/Logo.png') }}"></a>
            <img id="Profile" alt="Profile Photo" src="{{ asset('images').'/'.session()->get('profile_photo') }}">
            <div class="dropdown profile emp">
                <ul>
                    <li><a href="/employer/profile">My Profile</a>
                    <li><a href="/logout">Log out</a></li>
                </ul>
            </div>
            <div id="Available_Job_Opportunities" class="my-jobs">
                <span>My Jobs</span>
            </div>
        </div>
        <div id="jobPostings" class="fadeIn">
            <div id="flex-container">
                @forelse ($myJobs as $job)
                <div>
                    <div><img class="logo" alt="Logo Image" src="{{ asset('images').'/'.$job->employer['company_logo'] }}">
                    </div>
                    <div class="job">
                        <span>{{ $job->jobtitle }}</span>
                    </div>
                    <a href="/employer/myjob-{{ $job->id }}/delete">
                        <div class="apply_but emp">
                            <div class="apply_text">
                                <span>Remove</span>
                            </div>
                        </div>
                    </a>
                    <a href="/employer/myjob-{{ $job->id }}">
                        <div class="apply_but emp">
                            <div class="apply_text">
                                <span>Preview</span>
                            </div>
                        </div>
                    </a>
                </div>
                @empty
                <h2 style="margin-left: 20px">Sorry! You don't have any pending Jobs.</h2>
                @endforelse
            </div>
            <div id="view_more" onclick="viewmore()">
                <img class="arrow_head" alt="Arrow Head" src="{{ asset('assets/images/arrow_head.png') }}">
                <div class="View">
                    <span>View More</span>
                </div>
            </div>
            <div id="view_less" onclick="viewless()">
                <img class="arrow_head" alt="Arrow Head" src="{{ asset('assets/images/arrow_head.png') }}">
                <div class="View">
                    <span>View Less</span>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('assets/scripts/script.js') }}"></script>
    <script>
        var extradivs = document.querySelectorAll("#flex-container div:nth-child(n+7)");

        function viewmore() {
            document.getElementById("view_more").style.display = "none";
            document.getElementById("view_less").style.display = "block";
            document.getElement
            document.getElementById("flex-container").style.overflowY = "scroll";
            var x;
            for (x of extradivs) {
                x.style.display = "block";
            }
        }

        function viewless() {
            document.getElementById("view_more").style.display = "block";
            document.getElementById("view_less").style.display = "none";
            document.getElementById("flex-container").style.overflowY = "hidden";
            var x;
            for (x of extradivs) {
                x.style.display = "none";
            }
        }

        if (extradivs.length == 0) {
            document.getElementById("view_more").style.display = "none";
        }
    </script>
</body>

</html>
