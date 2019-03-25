<div class="header">
    <div class="headertop_desc">
        <div class="call">
            <p><span>Hotline: </span><span class="number">0931-428-343</span></p>
        </div>
        {{--should show facebook and zalo in here--}}
        <div class="account_desc">
            <ul>
                <li><a href="https://www.facebook.com/vina.max.395" style="color: #0b97c4;" target="_blank"><i class="fab fa-facebook-square" style="color: #4267B2;"></i>&nbsp;facebook</a></li>
                <li><a href="https://zalo.me/0931428343" style="color: #0b93d5" target="_blank">zalo</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="header_bottom">
        <div class="menu">
            <ul>
                <li class="active"><a href="/">Trang Chủ</a></li>
                <li><a href="/">Giới Thiệu</a></li>
                <li><a href="delivery.html">Tin Tức</a></li>
                <li><a href="news.html">Thanh Toán</a></li>
                <li><a href="contact.html">Liên Hệ</a></li>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="search_box">
            {!! Form::open(['method' => 'GET']) !!}
            {!! Form::text('product_name', null, ['class' => 'form-control', 'placeholder' => 'Search']) !!}
            {{ Form::button('<i class="fa fa-search" aria-hidden="true"></i> ', ['type' => 'submit', 'style' => 'border:none; background:none; float: right; margin-top:3px; cursor: pointer;']) }}
            {!! Form::close() !!}
        </div>
        <div class="clear"></div>
    </div>
</div>
