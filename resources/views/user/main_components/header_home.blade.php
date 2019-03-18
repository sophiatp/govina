<div class="header">
    <div class="headertop_desc">
        <div class="call">
            <p><span>Hotline: </span><span class="number">0931-428-343</span></p>
        </div>
        {{--should show facebook and zalo in here--}}
        <div class="account_desc">
            <ul>
                <li><a href="https://www.facebook.com/vina.max.395"><i class="fab fa-facebook-square" style="color: #4267B2;"></i>&nbsp;facebook</a></li>
                <li><a href="https://zalo.me/0931428343">zalo</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="header_top">
        <div class="logo">
            <a href="index.html"><img src="{{ asset('user/images/logo.png') }}" alt=""/></a>
        </div>
        {{--<div class="cart">--}}
            {{--<p>Welcome to our Online Store! <span>Cart:</span>--}}
            {{--<div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00--}}
                {{--<ul class="dropdown">--}}
                    {{--<li>you have no items in your Shopping cart</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--</p>--}}
        {{--</div>--}}
        <script type="text/javascript">
            function DropDown(el) {
                this.dd = el;
                this.initEvents();
            }

            DropDown.prototype = {
                initEvents: function () {
                    var obj = this;

                    obj.dd.on('click', function (event) {
                        $(this).toggleClass('active');
                        event.stopPropagation();
                    });
                }
            }

            $(function () {

                var dd = new DropDown($('#dd'));

                $(document).click(function () {
                    // all dropdowns
                    $('.wrapper-dropdown-2').removeClass('active');
                });

            });

        </script>
        <div class="clear"></div>
    </div>
    <div class="header_bottom">
        <div class="menu">
            <ul>
                <li class="active"><a href="index.html">Trang Chủ</a></li>
                <li><a href="about.html">Giới Thiệu</a></li>
                <li><a href="delivery.html">Tin Tức</a></li>
                <li><a href="news.html">Thanh Toán</a></li>
                <li><a href="contact.html">Liên Hệ</a></li>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="search_box">
            <form>
                <input type="text" value="Search" onfocus="this.value = '';"
                       onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
            </form>
        </div>
        <div class="clear"></div>
    </div>
    <div class="header_slide">
        <div class="header_bottom_left">
            <div class="categories">
                <ul>
                    @include('user.main_components.menu')
                </ul>
            </div>
        </div>
        <div class="header_bottom_right">
            <div class="slider">
                <div id="slider">
                    <div id="mover">
                        <div id="slide-1" class="slide">
                            <div class="slider-img">
                                <a href="preview.html"><img src="{{ asset('user/images/slide-1-image.png') }}" alt="learn more"/></a>
                            </div>
                            <div class="slider-text">
                                <h1>Clearance<br><span>SALE</span></h1>
                                <h2>UPTo 20% OFF</h2>
                                <div class="features_list">
                                    <h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy
                                        text</h4>
                                </div>
                                <a href="preview.html" class="button">Shop Now</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="slide">
                            <div class="slider-text">
                                <h1>Clearance<br><span>SALE</span></h1>
                                <h2>UPTo 40% OFF</h2>
                                <div class="features_list">
                                    <h4>Get to Know More About Our Memorable Services</h4>
                                </div>
                                <a href="preview.html" class="button">Shop Now</a>
                            </div>
                            <div class="slider-img">
                                <a href="preview.html"><img src="{{ asset('user/images/slide-3-image.jpg') }}" alt="learn more"/></a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="slide">
                            <div class="slider-img">
                                <a href="preview.html"><img src="{{ asset('user/images/slide-2-image.jpg') }}" alt="learn more"/></a>
                            </div>
                            <div class="slider-text">
                                <h1>Clearance<br><span>SALE</span></h1>
                                <h2>UPTo 10% OFF</h2>
                                <div class="features_list">
                                    <h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy
                                        text</h4>
                                </div>
                                <a href="preview.html" class="button">Shop Now</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
