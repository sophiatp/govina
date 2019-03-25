<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('user/css/slider.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script type="text/javascript" src="{{ asset('user/js/jquery-1.7.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/startstop-slider.js') }}"></script>
</head>
<body>
<div class="wrap">
    @include('user.main_components.header_home')
    <div class="main">
        <div class="categories">
            <ul>
                @include('user.main_components.menu')
            </ul>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
</div>
@include('user.main_components.footer')

<script type="text/javascript">
    $(document).ready(function () {
        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

