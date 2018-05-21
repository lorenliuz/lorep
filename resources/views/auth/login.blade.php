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
<div class="login-wrapper ">
    <div class="bg-pic">
        <img src="/assets/dashboard/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg"
             alt="" class="lazy">
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
            {{--<div class="col-sm-3 col-md-2 no-padding">--}}
            <img class="m-t-5" data-src="/assets/dashboard/img/demo/pages_icon.png" height="60"
                 src="/assets/dashboard/img/demo/pages_icon.png" width="60">
            {{--</div>--}}
            <h2 class="bold text-white text-uppercase">
                {{ 'Maxsey' }}
            </h2>
            <p class="text-white">Copyright © 2018 <a href="https://maxsey.com" class="text-white">Lorep</a>. All rights reserved.</p>
        </div>
    </div>
    <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
            <img src="/assets/dashboard/img/logo.png" alt="logo" data-src="/assets/dashboard/img/logo.png"
                 data-src-retina="/assets/dashboard/img/logo_2x.png" width="78" height="22">
            <p class="p-t-35">Sign In</p>
            <form id="form-login" class="p-t-15" role="form" method="post">
                @csrf
                <div class="form-group form-group-default{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>Email</label>
                    <div class="controls">
                        <input type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}" required>
                    </div>
                    @if ($errors->has('email'))
                        <label id="email-error" class="error" for="email">{{ $errors->first('email') }}</label>
                    @endif
                </div>
                <div class="form-group form-group-default{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label>Password</label>
                    <div class="controls">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    @if ($errors->has('password'))
                        <label id="password-error" class="error" for="password">{{ $errors->first('password') }}</label>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-6 no-padding sm-p-l-10">
                        <div class="checkbox check-primary">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">{{ __('Remember Me') }}</label>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-end">
                        <a href="{{ route('password.request') }}" class="text-info small">Forgot Password ?</a>
                    </div>
                </div>
                <!-- END Form Control-->
                <button class="btn btn-primary  m-t-10" type="submit">{{ __('Sign In') }}</button>
                <div class="row">
                    <button class="btn m-t-10 m-r-10"><i class="fa fa-github"></i></button>
                    <button class="btn m-t-10"><i class="fa fa-google-plus"></i></button>
                </div>
            </form>
            <!--END Login Form-->
            <div class="pull-bottom sm-pull-bottom">
                <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
                    <div class="col-sm-3 col-md-2 no-padding">
                        <img alt="" class="m-t-5" data-src="/assets/dashboard/img/demo/pages_icon.png"
                             data-src-retina="/assets/dashboard/img/demo/pages_icon_2x.png" height="60"
                             src="/assets/dashboard/img/demo/pages_icon.png" width="60">
                    </div>
                    <div class="col-sm-9 no-padding m-t-10">
                        <p>
                            <small>
                                Create a pages account. If you have a facebook account, log into it for this
                                process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#"
                                                                                                       class="text-info">Google</a>
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Login Right Container-->
</div>
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