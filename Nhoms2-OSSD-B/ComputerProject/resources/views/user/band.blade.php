


<div class="toggle-list product-categories active">
    <h6 class="title">Band</h6>
    <div class="shop-submenu">
        <ul>
            @foreach ($bands as $band)
                <li class="current-cat"><a href="{{ route('band.products', ['band_id' => $band->band_id]) }}">{{ $band->name }}</a></li>
            @endforeach
        </ul>
    </div>
 
</div>



