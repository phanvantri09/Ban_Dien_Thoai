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
</div>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <form style="margin-top: 20px; margin-bottom: 20px" action="{{ route('home.postthanhtoan') }}" method="POST" enctype="multipart/form-data"  class="checkout" method="post" name="checkout">
            @csrf
            <div id="customer_details" class="col2-set">
                <div class="col-md-6">
                    <div class="woocommerce-billing-fields">
                        <h3>Billing Details</h3>
                        <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                            <label class="" for="billing_first_name">Full Name <abbr title="required" class="required">*</abbr>
                            </label>
                            <input type="text" value="" placeholder="Full name" id="billing_first_name" name="name" class="input-text ">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </p>
                        <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                            <label class="" for="billing_phone">Phone <abbr title="required" class="required">*</abbr>
                            </label>
                            <input type="text" value="" placeholder="" id="billing_phone" name="numberPhone" class="input-text ">
                            @error('numberPhone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </p>
                        <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                            <label class="" for="billing_phone">Email <abbr title="required" class="required">*</abbr>
                            </label>
                            <input type="text" value="{{Auth::user()->email}}" placeholder="" id="billing_phone" name="email" class="input-text ">
                            @error('numberPhone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </p>
                        <div class="clear"></div>
        
                        <p id="billing_company_field" class="form-row form-row-wide">
                            <label class="" for="billing_company">House number - Street name</label>
                            <input type="text" value="" placeholder="" id="billing_company" name="sonha" class="input-text ">
                            @error('sonha')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </p>
                        <p id="billing_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
                            <label class="" for="billing_state">Village - Commune - Town</label>
                            <input type="text" id="billing_state" name="xa" placeholder="Village - Commune - Town" value="" class="input-text ">
                            @error('xa')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </p>
                        <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                            <label class="" for="billing_city">County <abbr title="required" class="required">*</abbr>
                            </label>
                            <input type="text" value="" placeholder="County" id="billing_city" name="huyen" class="input-text ">
                            @error('huyen')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </p>
                        <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                            <label class="" for="billing_city">Town / City <abbr title="required" class="required">*</abbr>
                            </label>
                            <input type="text" value="" placeholder="Town / City" id="billing_city" name="tinh" class="input-text ">
                            @error('tinh')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </p>
                        <input type="hidden" name="price" value="{{$total}}">
                        
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 id="order_review_heading">Your order</h3>
                    <div id="order_review" style="position: relative;">
                        <table class="shop_table">
                            <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Amount</th>
                                    <th class="product-total">Money</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                @foreach ($products as $pro)
                                @if ($pro->id == $item->idProduct)
                                <tr class="cart_item">
                                    <td class="product-name">
                                        {{$pro->name}} <strong class="product-quantity"></strong> </td>
                                        <td class="product-total">
                                            <span class="amount">{{$item->amount}}</span> </td>
                                    <td class="product-total">
                                        <span class="amount">£{{$item->amount*$pro->price}}</span> </td>
                                </tr>
                                @endif 
                                @endforeach
                                @endforeach
                                <tr style="border: 1px solid red; ">
                                    <td>Total</td>
                                    <td> = </td>
                                    <td style="background-color: #5a88ca; font-weight: bold; color: yellow; font-size: 20px">£{{$total}}</td>
                                </tr>
                            </tbody>
                            <tfoot>
                            </tfoot>
                            
                        </table>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="payment col-md-12">
                        <div class="form-row place-order">
                            <input type="submit" data-value="Place order" value="Place order" id="place_order" name="woocommerce_checkout_place_order" class="button alt">
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</section>

<form method="POST" action="" id="formDelete">
    @csrf @method('DELETE')
</form>
<!-- Blog Section End -->
@endsection
