@foreach($categories as $category)
    <li class="main-category"><a href="{{ route('index.listProductsBySlug', $category['slug']) }}" class="main-category-link">{{ $category['name']}}</a></li>
    @foreach($subCategories as $subCategory)
        @if($subCategory['category_id'] == $category['id'])
            <li><a href="{{ route('index.listProductsBySlug', $subCategory['slug']) }}">{{ $subCategory['name']}}</a></li>
        @endif
    @endforeach
@endforeach
