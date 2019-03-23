@foreach($categories as $category)
    <li class="main-category"><a href="#" class="main-category-link">{{ $category['name']}}</a></li>
    @foreach($subCategories as $subCategory)
        @if($subCategory['category_id'] == $category['id'])
            <li><a href="#">{{ $subCategory['name']}}</a></li>
        @endif
    @endforeach
@endforeach
