@extends('user.home.master')

@section('content')
<div class="product-details">
    <div class="grid images_3_of_2">
        <div id="container">
            <div id="products_example">
                <div id="products">
                    <div class="slides_container">
                        <a href="#" target="_blank"><img src="{{ asset('user/images/productslide-1.jpg')}}" alt=" "/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="desc span_3_of_2">
        <h2>Lorem Ipsum is simply dummy text </h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore.</p>
        <div class="price">
            <p>Price: <span>$500</span></p>
        </div>
        <div class="available">
            <p>Available Options :</p>
            <ul>
                <li>Color:
                    <select>
                        <option>Silver</option>
                        <option>Black</option>
                        <option>Dark Black</option>
                        <option>Red</option>
                    </select></li>
                <li>Size:<select>
                        <option>Large</option>
                        <option>Medium</option>
                        <option>small</option>
                        <option>Large</option>
                        <option>small</option>
                    </select></li>
                <li>Quality:<select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select></li>
            </ul>
        </div>
        <div class="share-desc">
            <div class="share">
                <p>Share Product :</p>
                <ul>
                    <li><a href="#"><img src="images/facebook.png" alt=""/></a></li>
                    <li><a href="#"><img src="images/twitter.png" alt=""/></a></li>
                </ul>
            </div>
            <div class="button"><span><a href="#">Add to Cart</a></span></div>
            <div class="clear"></div>
        </div>
        <div class="wish-list">
            <ul>
                <li class="wish"><a href="#">Add to Wishlist</a></li>
                <li class="compare"><a href="#">Add to Compare</a></li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
</div>
@endsection
