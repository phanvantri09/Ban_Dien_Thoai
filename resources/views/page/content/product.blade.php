<?php
use App\Models\Product;
$pro = Product::all();
?>
@extends('page.index')
@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Product {{$data->name}} </h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row" style="margin-top: 30px; margin-bottom: 30px">
            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="product-images">
                                <div class="product-main-img">
                                    <img src="{{ asset("/imgUploads/$data->img1")}}" alt="">
                                </div>
                                <div class="product-gallery">
                                    @if (!empty($data->img2))
                                    <img src="{{ asset("/imgUploads/$data->img2")}}" alt="">
                                    @endif
                                    @if (!empty($data->img3))
                                    <img src="{{ asset("/imgUploads/$data->img3")}}" alt="">
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="product-inner">
                                <h2 class="product-name">{{$data->name}}</h2>
                                <div class="product-inner-price">
                                    <ins>${{$data->price}}</ins> <del>${{$data->price - 100}}</del>
                                </div>    
                                
                                <form action="" class="cart">
                                    <div class="quantity">
                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                    </div>
                                    <a href="{{ route('home.addcart', [Auth::user()->id,$data->id]) }}"><button class="add_to_cart_button" type="submit">Add to cart</button></a>
                                </form>   
                                
                                <div class="product-inner-category">
                                    <p>Amount: {{$data->amount}}</p>
                                </div> 
                                
                                <div role="tabpanel">
                                    
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <h2>Product Description</h2>  
                                            <p>{{$data->general}}</p>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="related-products-wrapper">
                        <h2 class="related-products-title">Related Products</h2>
                        <div class="related-products-carousel">
                            @foreach ($pro as $p)
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{ asset("/imgUploads/$p->img1")}}" alt="">
                                    <div class="product-hover">
                                        <a href="{{ route('home.themcart', [Auth::user()->id,$p->id]) }}" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="{{ route('home.product', $p->id) }}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="{{ route('home.product', $p->id) }}">{{$p->name}}</a></h2>

                                <div class="product-carousel-price">
                                    <ins>${{$p->price}}</ins> <del>${{$p->price-100}}</del>
                                </div> 
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
</section>
<form method="POST" action="" id="formDelete">
    @csrf @method('DELETE')
</form>
<!-- Blog Section End -->
@endsection
