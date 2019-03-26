@extends('user.home.master')

@section('title')
    GOVINA-{{ $subCategory['name'] }}
@stop

@section('content')
    <div class="content_top">
        <div class="heading">
            <h3>Danh Sách Sản Phẩm {{ $subCategory['name'] }}</h3>
        </div>
        <div class="clear"></div>
    </div>
    @if (count($products) > 1)
    <div class="section group">
        @foreach($products as $item)
            <div class="grid_1_of_4 images_1_of_4">
                <a href="{{route('products.show', $item->slug)}}">
                    <img src="{{ asset('images/' . $item->image) }}" alt="" height="160px"/>
                </a>
                <h3>{{$item->name}}</h3>
                <div class="price-details">
                    <div class="price-number">
                        <p>
                            <span class="rupees">Giá : {{$item->price}} VND</span>
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- pagination -->
    <div class="pagination pull-right">
        {!! $products->appends(Request::except('page'))->links() !!}
    </div>
    @else
        <div class="section group" style="margin-top: 30px; text-align: center">
            <p>Không có sản phẩm nào!</p>
        </div>
    @endif
@stop
