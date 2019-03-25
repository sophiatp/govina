@extends('user.home.master')

@section('title')
    GOVINA-{{ $product['name'] }}
@stop

@section('content')
<div class="product-details">
    <div class="grid images_3_of_2">
        <div id="container">
            <div id="products_example">
                <div id="products">
                    <div class="slides_container">
                        <a href="#" target="_blank">
                            <img src="{{ asset('images/' . $product['image'])}}" alt="Image"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="desc span_3_of_2">
        <h2>{{ $product['name'] }}</h2>
        <div class="product-code" style="margin-top: 18px">
            <h3 style="font-family: 'ambleregular';color: #CD1F25;">Mã sản phẩm: <span>{{ $product['code'] }}</span></h3>
        </div>
        <div class="price" style="margin-top: 18px">
            <h3>Giá: <span>{{ $product['price'] }} VND</span></h3>
        </div>

        <div class="product-description" style="margin-top: 18px">
            <h3 style="font-family: 'Calibri';color: #CD1F25;"> Mô tả: </h3>
            <div class="product-description-content"
                 style="margin-top: 18px; line-height: 30px">
                {!! html_entity_decode($product['sub_title']) !!}
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div class="product_desc">
    <div id="horizontalTab">
        <ul class="resp-tabs-list">
            <li>Thông tin chi tiết</li>
            <li>Liên hệ</li>
            <div class="clear"></div>
        </ul>
        <div class="resp-tabs-container">
            <div class="product-desc">
                {!! html_entity_decode($product['description']) !!}
            </div>

            <div class="product-tags">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <h4>Add Your Tags:</h4>
                <div class="input-box">
                    <input type="text" value="">
                </div>
                <div class="button"><span><a href="#">Add Tags</a></span></div>
            </div>
        </div>
    </div>
    <script src="{{ asset('user/js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
    <link href="{{ asset('user/css/easy-responsive-tabs.css') }}" rel="stylesheet" type="text/css" media="all"/>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });
    </script>
</div>
@endsection
