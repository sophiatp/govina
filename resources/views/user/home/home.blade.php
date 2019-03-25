@extends('user.home.master')

@section('title')
    GOVINA-Trang chủ
@stop

@section('content')
<div class="content_top">
    <div class="heading">
        <h3>Danh Sách Sản Phẩm</h3>
    </div>
    <div class="clear"></div>
</div>

<div class="section group">
    @foreach($congAnNinh as $item)
    <div class="grid_1_of_4 images_1_of_4">
        <a href="{{route('products.show', $item['slug'])}}">
            <img src="{{ asset('images/' . $item['image']) }}" alt="" height="160px"/>
        </a>
        <h3>{{$item['name']}}</h3>
        <div class="price-details">
            <div class="price-number">
                <p>
                    <span class="rupees">Giá : {{$item['price']}} VND</span>
                </p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    @endforeach
</div>

<div class="section group">
    @foreach($temTu as $item)
    <div class="grid_1_of_4 images_1_of_4">
        <a href="preview.html"><img src="{{ asset('images/' . $item['image']) }}" alt="Image" height="160px"/></a>
        <h3>{{ $item['name'] }}</h3>
        <div class="price-details">
            <div class="price-number">
                <p><span class="rupees">Giá: {{ $item['price'] }} VND</span></p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    @endforeach
</div>

<div class="section group">
    @foreach($keKhoHang as $item)
    <div class="grid_1_of_4 images_1_of_4">
        <a href="preview.html"><img src="{{ asset('images/' . $item['image']) }}" alt="Image" height="160px"/></a>
        <h3>{{ $item['name'] }}</h3>
        <div class="price-details">
            <div class="price-number">
                <p><span class="rupees">Giá: {{ $item['price'] }} VND</span></p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    @endforeach
</div>

<div class="section group">
    @foreach($goTemTu as $item)
    <div class="grid_1_of_4 images_1_of_4">
        <a href="preview.html"><img src="{{ asset('images/' . $item['image']) }}" alt="Image" height="160px"/></a>
        <h3>{{ $item['name'] }}</h3>
        <div class="price-details">
            <div class="price-number">
                <p><span class="rupees">Giá: {{ $item['price'] }} VND</span></p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    @endforeach
</div>

<div class="section group">
    @foreach($thietBiSieuthi as $item)
    <div class="grid_1_of_4 images_1_of_4">
        <a href="preview.html"><img src="{{ asset('images/' . $item['image']) }}" alt="Image" height="160px"/></a>
        <h3>{{ $item['name'] }}</h3>
        <div class="price-details">
            <div class="price-number">
                <p><span class="rupees">Giá: {{ $item['price'] }} VND</span></p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    @endforeach
</div>

@endsection
