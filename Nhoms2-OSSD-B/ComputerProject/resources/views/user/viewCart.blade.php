@extends('cart')
@section('cartviews')
<div class="axil-product-cart-area axil-section-gap">
    <div class="container">
        <div class="axil-product-cart-wrap">
            <div class="product-table-heading">
                <h4 class="title">Your Cart</h4>
                <a href="#" class="cart-clear">Clear Shopping Cart</a>
            </div>
            <div class="table-responsive">
                <table class="table axil-product-table axil-cart-table mb--40">
                    <thead>
                        <tr>
                            <th scope="col" class="product-remove"></th>
                            <th scope="col" class="product-thumbnail">Product</th>
                            <th scope="col" class="product-title"></th>
                            <th scope="col" class="product-price">Price</th>
                            <th scope="col" class="product-quantity">Quantity</th>
                            <th scope="col" class="product-subtotal">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(session('cart'))
                            @foreach($cart as $id => $details)
                                <tr rowId="{{ $id }}">
                                    <td class="product-remove">
                                        <a href="{{ route('user.removeCart', $id) }}" class="remove-cart-item">
                                            <i class="fal fa-times"></i>
                                        </a>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="{{ route('user.checkout') }}"><img src="{{ $details['images'] }}" alt="Digital Product"></a>
                                    </td>
                                    <td class="product-title"><a href="{{ route('user.checkout') }}">{{ $details['name'] }}</a></td>
                                    <td class="product-price" data-title="Price">
                                        <span class="currency-symbol">$</span>{{ number_format($details['price'], 3, '.', '') }}
                                    </td>
                                    <td class="product-quantity" data-title="Qty">
                                        <div class="pro-qty">
                                            <input type="number" class="quantity-input" value="{{ $details['quantity'] }}">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal">
                                        <span class="currency-symbol">$</span>{{ number_format($details['price'] * $details['quantity'], 3, '.', '') }}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="cart-total">
                <h4 class="title">Cart Total</h4>
                <div class="total-price">
                    <span class="label">Total:</span>
                    <span class="value"><span class="currency-symbol">$</span>{{ number_format($total, 3, '.', '') }}</span>
                </div>
                <a href="{{ route('user.checkout') }}" class="axil-btn btn-bg-primary checkout-btn">Process to Checkout</a>
            </div>
        </div>
    </div>
</div>
@endsection
