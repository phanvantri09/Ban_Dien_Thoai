@extends('page.index')
@section('content')
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('./homepage/img/breadcrumb.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Suất ăn công nghiệp</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                aria-selected="true">{{$data->name}}</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <p><b>Nội dung: </b>{{$data->content}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                            src="{{ asset("/imgUploads/$data->img")}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                aria-selected="true">Về Quang Hưng Foods</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <p>Quang Hưng Foods là đại lí bán sỉ và lẻ các loại thực phẩm tươi sống sạch như rau, củ, quả, thịt, hải sản, các gói hàng được trang trí theo yêu cầu của bạn thông qua số điện thoại (0931 452 452 hoặc 0941 681 681) để được tư vấng một cách chính xác và nhanh nhất.  </p>
                                <p>Sản phẩm của chúng tôi được láy từ các nhà cung cấp sạch có danh tiếng và lau đời vì vậy hãy mua hàng một cách thoải mái vì tất cả sản phẩm bạn đặt đã được chọn lọc một cách tỉ mĩ.</p>
                                <p>Khi lựa chọn thực phẩm dù là thực phẩm tươi sống hay thực phẩm đã đóng gói sẵn, việc đầu tiên cần quan tâm là nguồn gốc xuất xứ, thương hiệu phải uy tín và chất lượng, phải có giấy chứng nhận và các nhãn mác, logo của các đơn vị, sau đó hãy quan tâm đến giá cả. Và điều hiển nhiên, giá của những thực phẩm sạch đúng nghĩa sẽ cao hơn khá nhiều các loại thực phẩm bình thường. Vì vậy hãy ưu tiên mua hàng của chúng tôi, chúng tôi đáp ứng đầy đủ các yếu tố đó.</p>
                            </div>
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
