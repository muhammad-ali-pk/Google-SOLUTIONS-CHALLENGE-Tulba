<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
            maximum-scale=1, user-scalable=no">
    <title>Apply Confirmation</title>
    <link rel="icon" href="{{ asset('assets/images/Logo_Title.png') }}" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets/styles/Confirmation.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/styles/animate.css') }}" type="text/css">
</head>

<body>
    <div id="Confirmation">
        <div id="Background">
            <svg class="Ellipse_9">
                <ellipse fill="rgba(255,204,0,1)" id="Ellipse_9" rx="54.5%" ry="46.5%" cx="54.5%" cy="46%">
                </ellipse>
            </svg>
            <svg class="Ellipse_8">
                <ellipse fill="rgba(255,204,0,1)" id="Ellipse_8" rx="53%" ry="47.5%" cx="53%" cy="47.5%">
                </ellipse>
            </svg>
        </div>
        <div id="Header">
            <img id="Tulba" src="{{ asset('assets/images/Logo.png') }}">
            <a href="/student" class="fadeIn">
                <div id="forward_button">
                    <svg class="Ellipse_15">
                        <ellipse fill="rgba(255,255,255,1)" stroke="rgba(112,112,112,0.2)" stroke-width="1px"
                            stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto"
                            id="Ellipse_15" rx="100%" ry="100%" cx="100%" cy="100%">
                        </ellipse>
                    </svg>
                    <img id="arrow_head" src="{{ asset('assets/images/arrow_head.png') }}">
                </div>
            </a>
        </div>
        <div id="Congratulations_on_successfull" class="fadeIn">
            <span>Congratulations on successfully applying through Tulba!</span>
        </div>
    </div>
</body>

</html>
