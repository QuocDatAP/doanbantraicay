@extends('Frontend.layouts.master')
@section('main-content')

<!-- <div id="breadcrumb" class="section">
   
    <div class="container">
      

      
    </div>

</div>



<div class="section">
 
    <div class="container">
  
        <div class="row">
           
            <div id="aside" class="col-md-3">
               
                <div class="aside">
                    <h3 class="aside-title">Categories</h3>
                    <div class="checkbox-filter">

                        ?>
                        <div class="input-checkbox">
                            <input type="checkbox" id="category-1">
                            <label for="category-1">
                                <span></span>

                                <small>(120)</small>
                            </label>
                        </div>


                    </div>
                </div>
                
                <div class="aside">
                    <h3 class="aside-title">Price</h3>
                    <div class="price-filter">
                        <div id="price-slider"></div>
                        <div class="input-number price-min">
                            <input id="price-min" type="number">
                            <span class="qty-up">+</span>
                            <span class="qty-down">-</span>
                        </div>
                        <span>-</span>
                        <div class="input-number price-max">
                            <input id="price-max" type="number">
                            <span class="qty-up">+</span>
                            <span class="qty-down">-</span>
                        </div>
                    </div>
                </div>
               
                <div class="aside">
                    <h3 class="aside-title">Brand</h3>
                    <div class="checkbox-filter">
                        <div class="input-checkbox">
                            <input type="checkbox" id="brand-1">
                            <label for="brand-1">
                                <span></span>

                                <small>(578)</small>
                            </label>
                        </div>
                    </div>

                </div>
                
            </div>
         
            <div id="store" class="col-md-9">
                <!-- store top filter -->
                <!-- <div class="store-filter clearfix">
                    <div class="store-sort">
                        <label>
                            Sort By:
                            <select class="input-select">
                                <option value="0">Popular</option>
                                <option value="1">Position</option>
                            </select>
                        </label>

                        <label>
                            Show:
                            <select class="input-select">
                                <option value="0">20</option>
                                <option value="1">50</option>
                            </select>
                        </label>
                    </div>
                    <ul class="store-grid">
                        <li class="active"><i class="fa fa-th"></i></li>
                        <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                    </ul> -->
                </div>
                <!-- /store top filter -->


                <!-- store products -->
                <!-- <div id="tab01_1st" class="tab-contain active">
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                        data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                        @foreach($data as $a)
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-05.jpg" alt="Vegetables" width="270"
                                            height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i
                                            class="biolife-icon icon-search"></i></a>
                                </div>

                                <div class="info">
                                    <b class="categories">{{$a->name}}</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">{{$a->description}}</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span
                                                    class="currencySymbol">£</span>{{$a->price}}</span></ins>

                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.
                                        </p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down"
                                                    aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        @endforeach
                    </ul>

                </div> -->
				@foreach($data as $a)
                <section style="background-color: #eee; ">
                    <div class="container py-5">
                        <div class="row justify-content-center mb-3">
                            <div class="col-md-12 col-xl-10">
                                <div class="card shadow-0 border rounded-3">
                                    <div class="card-body">
									
                                        <div class="row">
                                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                                <div class="bg-image hover-zoom ripple rounded ripple-surface">
												<a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-05.jpg" alt="Vegetables" width="270"
                                            height="270" class="product-thumnail">
                                    </a>
                                                    <a href="#!">
                                                        <div class="hover-overlay">
                                                            <div class="mask"
                                                                style="background-color: rgba(253, 253, 253, 0.15);">
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xl-6">
                                                <h5>{{$a->name}}</h5>
                                                <div class="d-flex flex-row">
                                                    <div class="text-danger mb-1 me-2">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <p class="text-truncate mb-4 mb-md-0">
												{{$a->description}}
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                                <div class="d-flex flex-row align-items-center mb-1">
                                                    <h4 class="mb-1 me-1">{{$a->price}} $</h4>
                                                   
                                                </div>
                                                <h6 class="text-success">Free shipping</h6>
                                                <div class="d-flex flex-column mt-4">
                                                    <button class="btn btn-primary btn-sm"
                                                        type="button">Details</button>
                                                    <button class="btn btn-outline-primary btn-sm mt-2" type="button">
                                                        Add to wishlist
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									
                                </div>
                            </div>
                        </div>
                        
                    </div>
					</section>
					<p>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- </p>
					@endforeach
            </div>
            <!-- /store products -->

            <!-- store bottom filter -->

            <!-- /store bottom filter -->
        </div>

        <!-- /STORE -->
    </div>
    <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /SECTION -->
@endsection