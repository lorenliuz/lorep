<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. ">
    <meta name="keywords" content="error, 500">

    <title>Internal server error &mdash; TheAdmin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="/dashboard-assets/css/core.min.css" rel="stylesheet">
    <link href="/dashboard-assets/css/app.min.css" rel="stylesheet">
    <link href="/dashboard-assets/css/style.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/dashboard-assets/img/apple-touch-icon.png">
    <link rel="icon" href="/dashboard-assets/img/favicon.png">
</head>

<body>


<div class="row no-margin h-fullscreen" style="padding-top: 10%">

    <div class="col-12">
        <div class="card card-transparent mx-auto text-center">
            <h1 class="text-secondary lh-1" style="font-size: 200px">500</h1>
            <hr class="w-30px">
            <h3 class="text-uppercase">Internal server error</h3>

            <p class="lead">Looks like we have an internal issue, please try again in couple of minutes.</p>
            <br>
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center fs-14">
                <li class="nav-item">
                    <a class="nav-link" href="#">Report problem</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:history.go(-1)">Return back</a>
                </li>
            </ul>
        </div>
    </div>
    <footer class="col-12 align-self-end text-center fs-13">
        <p>Copyright © {{ date('Y') }} <a class="text-dark" href="https://maxsey.com">{{ config('app.name') }}</a>. All
            rights reserved.</p>
    </footer>
</div>


<!-- Scripts -->
<script src="/dashboard-assets/js/core.min.js"></script>
<script src="/dashboard-assets/js/app.min.js"></script>
<script src="/dashboard-assets/js/script.min.js"></script>

</body>
</html>

