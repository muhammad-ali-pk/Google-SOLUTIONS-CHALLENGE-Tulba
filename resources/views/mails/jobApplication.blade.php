<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>JobMail</title>

    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font: 16px Helvetica, Sans-Serif;
            line-height: 24px;
            /* background: url(images/noise.jpg); */
            background-color: black;
            color: white;
        }

        .clear {
            clear: both;
        }

        #page-wrap {
            width: 800px;
            margin: 40px auto 60px;
        }

        #pic {
            float: right;
            margin: -30px 0 0 0;
        }

        h1 {
            margin: 0 0 16px 0;
            padding: 0 0 16px 0;
            font-size: 42px;
            font-weight: bold;
            letter-spacing: -2px;
            border-bottom: 1px solid #999;
        }

        h2 {
            font-size: 20px;
            margin: 0 0 6px 0;
            position: relative;
        }

        h2 span {
            position: absolute;
            bottom: 0;
            right: 0;
            font-style: italic;
            font-family: Georgia, Serif;
            font-size: 16px;
            color: #999;
            font-weight: normal;
        }

        p {
            margin: 0 0 16px 0;
        }

        a {
            color: #999;
            text-decoration: none;
            border-bottom: 1px dotted #999;
        }

        a:hover {
            border-bottom-style: solid;
            color: black;
        }

        ul {
            margin: 0 0 32px 17px;
        }

        #objective {
            width: 500px;
            float: left;
        }

        #objective p {
            font-family: Georgia, Serif;
            font-style: italic;
            color: #666;
        }

        dt {
            font-style: italic;
            font-weight: bold;
            font-size: 18px;
            text-align: right;
            padding: 0 26px 0 0;
            width: 150px;
            float: left;
            height: 100px;
            border-right: 1px solid #999;
        }

        dd {
            width: 600px;
            float: right;
        }

        dd.clear {
            float: none;
            margin: 0;
            height: 15px;
        }
    </style>
</head>

<body style="background-color: black;color: white;">

    <div id="page-wrap">

        <img src="https://static.makeuseof.com/wp-content/uploads/2018/11/dark-wallpapers-994x400.jpg"
            alt="Photo of Cthulu" id="pic" />

        <div id="contact-info" class="vcard">

            <!-- Microformats! -->

            <h1 class="fn">{{ $applicantData->fullname }}</h1>

            <p>
                Cell: <span class="tel">{{ $applicantData->phone }}</span><br />
                Email: <a class="email" aria-disabled="true">{{ $applicantData->email }}</a>
            </p>
        </div>

        <div id="objective">
            <p>
                I am an outgoing and energetic (ask anybody) young professional, seeking a
                career that fits my professional skills, personality, and murderous tendencies.
                My squid-like head is a masterful problem solver and inspires fear in who gaze upon it.
                I can bring world domination to your organization.
            </p>
        </div>

        <div class="clear"></div>

        <dl>
            <dd class="clear"></dd>

            <dt>Personal Info</dt>
            <dd>
                <h2>BioGraphics</h2>
                <p><strong>Full Name:</strong>{{ $applicantData->fullname }}<br />
                    <strong>Father's Name:</strong> {{ $applicantData->fatherfullname }}<br />
                    <strong>Email Address:</strong> {{ $applicantData->email }}<br />
                    <strong>Gender:</strong> {{ $applicantData->gender }}<br />
                    <strong>Date of Birth:</strong> {{ $applicantData->dob }}<br />
                    <strong>Residential Address:</strong> {{ $applicantData->address }}
                </p>
            </dd>

            <dd class="clear"></dd>

            <dt>Academic Info</dt>
            <dd>
                <h2>Educational Record</h2>
                <p><strong>University Name :</strong>{{ $applicantData->institution }}<br />
                    <strong>Current Semester/Year :</strong> {{ $applicantData->academicyear }}<br />
                    <strong>CGPA :</strong> {{ $applicantData->cgpa }}<br />
                    <strong>University Address :</strong> {{ $applicantData->institution_address }}
                </p>
            </dd>

            <dd class="clear"></dd>

            <dt>Experience in / Skills</dt>
            <dd>
                <h2>Academic Skills</h2>
                <p>
                    <?php
                          $skills = $applicantData->skills;
                          $skills = explode (",", $skills);
                          foreach ($skills as $skill) {
                              echo "<strong>$skill</strong><br/>";
                          }
                        ?>

                </p>
            </dd>

            <dd class="clear"></dd>
        </dl>

        <div class="clear"></div>

    </div>

</body>

</html>
