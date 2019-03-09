<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
    <title>Free Home Shoppe Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('user/css/slider.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="{{ asset('user/js/jquery-1.7.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/startstop-slider.js') }}"></script>
</head>
<body>
<div class="wrap">
    @include('user.main_components.header')
    <div class="main">
        <div class="content">
            <div class="content_top">
                <div class="back-links">
                    <p><a href="index.html">Home</a> >>>> <a href="#">Electronics</a></p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section group">
                <div class="cont-desc span_1_of_2">
                @yield('content')
                </div>
                <div class="rightsidebar span_3_of_1">
                    <h2>CATEGORIES</h2>
                    <ul class="side-w3ls">
                        @include('user.main_components.menu')
                    </ul>
                    <div class="subscribe">
                        <h2>Newsletters Signup</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.......</p>
                        <div class="signup">
                            <form>
                                <input type="text" value="E-mail address" onfocus="this.value = '';"
                                       onblur="if (this.value == '') {this.value = 'E-mail address';"><input
                                        type="submit" value="Sign up">
                            </form>
                        </div>
                    </div>
                    <div class="community-poll">
                        <h2>Community POll</h2>
                        <p>What is the main reason for you to purchase products online?</p>
                        <div class="poll">
                            <form>
                                <ul>
                                    <li>
                                        <input type="radio" name="vote" class="radio" value="1">
                                        <span class="label"><label>More convenient shipping and delivery </label></span>
                                    </li>
                                    <li>
                                        <input type="radio" name="vote" class="radio" value="2">
                                        <span class="label"><label for="vote_2">Lower price</label></span>
                                    </li>
                                    <li>
                                        <input type="radio" name="vote" class="radio" value="3">
                                        <span class="label"><label for="vote_3">Bigger choice</label></span>
                                    </li>
                                    <li>
                                        <input type="radio" name="vote" class="radio" value="5">
                                        <span class="label"><label for="vote_5">Payments security </label></span>
                                    </li>
                                    <li>
                                        <input type="radio" name="vote" class="radio" value="6">
                                        <span class="label"><label
                                                    for="vote_6">30-day Money Back Guarantee </label></span>
                                    </li>
                                    <li>
                                        <input type="radio" name="vote" class="radio" value="7">
                                        <span class="label"><label for="vote_7">Other.</label></span>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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

