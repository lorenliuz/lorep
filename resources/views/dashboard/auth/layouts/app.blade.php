<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="utf-8"/>
    <title>{{ config('app.name', 'Lorep') }} - @yield('title')</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no"/>
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <link href="/assets/dashboard/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/dashboard/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/dashboard/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/dashboard/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"
          media="screen"/>
    <link href="/assets/dashboard/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="/assets/dashboard/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css"
          media="screen"/>
    <link href="/assets/dashboard/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="/assets/dashboard/pages/css/pages.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript">
        window.onload = function () {
            // fix for windows 8
            if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
                document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
        }
    </script>
</head>
<body class="fixed-header ">
@yield('content')
<!-- BEGIN VENDOR JS -->
<script src="/assets/dashboard/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="/assets/dashboard/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="/assets/dashboard/plugins/modernizr.custom.js" type="text/javascript"></script>
<script src="/assets/dashboard/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/assets/dashboard/plugins/tether/js/tether.min.js" type="text/javascript"></script>
<script src="/assets/dashboard/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/dashboard/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
<script src="/assets/dashboard/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="/assets/dashboard/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
<script src="/assets/dashboard/plugins/jquery-actual/jquery.actual.min.js"></script>
<script src="/assets/dashboard/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="/assets/dashboard/plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript" src="/assets/dashboard/plugins/classie/classie.js"></script>
<script src="/assets/dashboard/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
<script src="/assets/dashboard/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END VENDOR JS -->
<script src="/assets/dashboard/pages/js/pages.min.js"></script>
<script>
    $(function () {
        $('#form-login').validate()
    })
</script>
</body>
</html>