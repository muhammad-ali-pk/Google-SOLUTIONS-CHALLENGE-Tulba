<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
            maximum-scale=1, user-scalable=no">
    <title>Student Job Portal</title>
    <link rel="icon" href="{{ asset('assets/images/Logo_Title.png') }}" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets/styles/Student_JobPortal.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/styles/animate.css') }}" type="text/css">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script defer src="{{ asset('assets/scripts/script.js') }}"></script>
</head>


<body>
    <div id="Student_JobPortal">
        <div id="Background">
            <svg class="Ellipse_9">
                <ellipse fill="rgba(255,204,0,1)" stroke="rgba(112,112,112,1)" stroke-width="1px"
                    stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto"
                    id="Ellipse_9" rx="50%" ry="45%" cx="50%" cy="45%">
                </ellipse>
            </svg>
            <svg class="Ellipse_8">
                <ellipse fill="rgba(255,204,0,1)" stroke="rgba(112,112,112,1)" stroke-width="1px"
                    stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto"
                    id="Ellipse_8" rx="50%" ry="45%" cx="50%" cy="45%">
                </ellipse>
            </svg>
        </div>
        <div id="header">
            <a href="/student"><img id="Tulba" style="border-radius: 50%" src="{{ asset('assets/images/Logo.png') }}"></a>
            <img id="Profile" alt="Profile Photo" src="{{ asset('images').'/'.session()->get('profile_photo') }}">
            <div class="dropdown profile">
                <ul>
                    <li><a href="/student/profile">My Profile</a></li>
                    <li><a href="/logout">Log out</a></li>
                </ul>
            </div>
            <div id="Available_Job_Opportunities">
                <span>Available Job Opportunities</span>
            </div>
        </div>
        <div id="jobPostings">
            <div id="flex-container">
                @forelse ($allJobs as $job)
                <div>
                    <div><img class="logo" src="{{ asset('images').'/'.$job->employer['company_logo'] }}">
                    </div>
                    <div class="job">
                        <span> {{ $job->jobtitle }} </span>
                    </div>
                    <a href="/student/job-{{ $job->id }}/jobdetails">
                        <div class="apply_but">
                            <div class="apply_text">
                                <span>Details</span>
                            </div>
                        </div>
                    </a>
                </div>
                @empty
                <div>
                    <div class="job">
                        <span> Sorry! There are no jobs at the moment. </span>
                    </div>

                </div>
                @endforelse
            </div>
            <div id="view_more" onclick="viewmore()">
                <img class="arrow_head" src="{{ asset('assets/images/arrow_head.png') }}">
                <div class="View">
                    <span>View More</span>
                </div>
            </div>
            <div id="view_less" onclick="viewless()">
                <img class="arrow_head" src="{{ asset('assets/images/arrow_head.png') }}">
                <div class="View">
                    <span>View Less</span>
                </div>
            </div>
        </div>
    </div>

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
    </script>
</body>

</html>
