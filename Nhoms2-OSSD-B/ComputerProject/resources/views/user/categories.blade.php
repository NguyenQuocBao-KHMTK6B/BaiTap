
    <div class="toggle-list product-categories active">
        <h6 class="title">CATEGORIES</h6>
        <div class="shop-submenu">
            <ul>
                @foreach ($categories as $category)
                    <li class="current-cat"><a href="{{ route('category.products', ['category_id' => $category->category_id]) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>
     
    </div>



