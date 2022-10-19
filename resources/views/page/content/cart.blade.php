@extends('page.index')
@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shopping Cart</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form method="post" action="#">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                            @foreach ($products as $pro)
                            @if ($pro->id == $item->idProduct)
                    
                    
                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <a title="Remove this item" class="remove" href="{{ route('home.deleteProduct', $item->id) }}">×</a> 
                                        </td>

                                        <td class="product-thumbnail">
                                            <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="{{ asset("/imgUploads/$pro->img1")}}"></a>
                                        </td>

                                        <td class="product-name">
                                            <a href="single-product.html">{{$pro->name}}</a> 
                                        </td>

                                        <td class="product-price">
                                            <span class="amount">£{{$pro->price}}</span> 
                                        </td>

                                        <td class="product-quantity">
                                            <div class="quantity buttons_added">
                                                <a href="{{ route('home.themcart', [Auth::user()->id,$pro->id]) }}">+</a>
                                                <input style="width:30px ; text-align: center" type="text" value="{{$item->amount}}">
                                                <a href="{{ route('home.trucart', [Auth::user()->id,$pro->id]) }}">-</a>
                                                {{-- <input type="button" class="minus" value="-">
                                                <input type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
                                                <input type="button" class="plus" value="+"> --}}
                                            </div>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="amount">£{{$item->amount*$pro->price}}</span> 
                                        </td>
                                    </tr>
                                    
                                   
                                    @endif 
                            @endforeach
                            @endforeach
                            <tr>
                                <td class="actions" colspan="6">
                                    <div class="coupon">
                                        <label for="coupon_code">Total: £<strong style="color: red; font-size: 20px">{{$total}}</strong></label>
                                    </div>
                                    <a href="{{ route('home.pay') }}"></a>
                                    <a href="{{ route('home.pay') }}"><input style="text-align: center; font-size: 30px" type="text" value="Checkout" name="proceed" class="checkout-button button alt wc-forward"></a>
                                </td>
                            </tr>
                                </tbody>
                            </table>
                        </form>
                        
                        </div>
                    </div>                        
                </div>                    
            </div>
        </div>
    </div>
</div>
<form method="POST" action="" id="formDelete">
    @csrf @method('DELETE')
</form>
<!-- Blog Section End -->
@endsection