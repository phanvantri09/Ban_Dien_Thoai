
@extends('page.index')
@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shop</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            @auth
            @foreach ($data as $p)
            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                    <div class="product-upper">
                        <img src="{{ asset("/imgUploads/$p->img1")}}" alt="">
                    </div>
                    <h2><a href="{{ route('home.product', $p->id) }}">{{$p->name}}</a></h2>
                    <div class="product-carousel-price">
                        <ins>${{$p->price}}</ins> <del>${{$p->price+1000}}</del>
                    </div>  
                    
                    <div class="product-option-shop">
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="{{ route('home.themcart', [Auth::user()->id,$p->id]) }}">Add to cart</a>
                    </div>                       
                </div>
            </div>
            @endforeach
            @else
            @foreach ($pro as $p)
            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                    <div class="product-upper">
                        <img src="{{ asset("/imgUploads/$p->img1")}}" alt="">
                    </div>
                    <h2><a href="{{ route('home.product', $p->id) }}">{{$p->name}}</a></h2>
                    <div class="product-carousel-price">
                        <ins>${{$p->price}}</ins> <del>${{$p->price+1000}}</del>
                    </div>  
                    
                    <div class="product-option-shop">
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="{{ route('home.register') }}">Add to cart</a>
                    </div>                       
                </div>
            </div>
            @endforeach
            @endauth
        </div>
    </div>
    <div style="display: flex; justify-content: center;">
        {{$data->appends(request()->all())->links()}}
    </div>
</div>
<form method="POST" action="" id="formDelete">
    @csrf @method('DELETE')
</form>
<!-- Blog Section End -->
@endsection