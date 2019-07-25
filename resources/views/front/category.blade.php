@extends('layouts.front')

@section('content')
    

<section class="section-margin--small mb-5">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
              <div class="sidebar-categories">
                <div class="head">Browse Categories</div>
                <ul class="main-categories">
                  <li class="common-filter">
                    <form action="#">
                      <ul>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="men" name="brand"><label for="men">Men<span> (3600)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="women" name="brand"><label for="women">Women<span> (3600)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="accessories" name="brand"><label for="accessories">Accessories<span> (3600)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="footwear" name="brand"><label for="footwear">Footwear<span> (3600)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="bayItem" name="brand"><label for="bayItem">Bay item<span> (3600)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="electronics" name="brand"><label for="electronics">Electronics<span> (3600)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="food" name="brand"><label for="food">Food<span> (3600)</span></label></li>
                      </ul>
                    </form>
                  </li>
                </ul>
              </div>
              <div class="sidebar-filter">
                <div class="top-filter-head">Product Filters</div>
                <div class="common-filter">
                  <div class="head">Brands</div>
                  <form action="#">
                    <ul>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Apple<span>(29)</span></label></li>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Asus<span>(29)</span></label></li>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
                    </ul>
                  </form>
                </div>
                <div class="common-filter">
                  <div class="head">Color</div>
                  <form action="#">
                    <ul>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Black
                          Leather<span>(29)</span></label></li>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Black
                          with red<span>(19)</span></label></li>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
                    </ul>
                  </form>
                </div>
                <div class="common-filter">
                  <div class="head">Price</div>
                  <div class="price-range-area">
                    <div id="price-range" class="noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-origin" style="left: 27.1429%;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="50.0" aria-valuenow="27.1" aria-valuetext="2000.00" style="z-index: 5;"></div></div><div class="noUi-connect" style="left: 27.1429%; right: 50%;"></div><div class="noUi-origin" style="left: 50%;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="27.1" aria-valuemax="100.0" aria-valuenow="50.0" aria-valuetext="4000.00" style="z-index: 6;"></div></div></div></div>
                    <div class="value-wrapper d-flex">
                      <div class="price">Price:</div>
                      <span>$</span>
                      <div id="lower-value">2000.00</div>
                      <div class="to">to</div>
                      <span>$</span>
                      <div id="upper-value">4000.00</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7">
              <!-- Start Filter Bar -->
              <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting">
                  <select style="display: none;">
                    <option value="1">Default sorting</option>
                    <option value="1">Default sorting</option>
                    <option value="1">Default sorting</option>
                  </select><div class="nice-select" tabindex="0"><span class="current">Default sorting</span><ul class="list"><li data-value="1" class="option selected focus">Default sorting</li><li data-value="1" class="option">Default sorting</li><li data-value="1" class="option">Default sorting</li></ul></div>
                </div>
                <div class="sorting mr-auto">
                  <select style="display: none;">
                    <option value="1">Show 12</option>
                    <option value="1">Show 12</option>
                    <option value="1">Show 12</option>
                  </select><div class="nice-select" tabindex="0"><span class="current">Show 12</span><ul class="list"><li data-value="1" class="option selected focus">Show 12</li><li data-value="1" class="option">Show 12</li><li data-value="1" class="option">Show 12</li></ul></div>
                </div>
                <div>
                  <div class="input-group filter-bar-search">
                    <input type="text" placeholder="Search">
                    <div class="input-group-append">
                      <button type="button"><i class="ti-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Filter Bar -->

              <!-- Start Best Seller -->
              <section class="lattest-product-area pb-40 category-list">
                <div class="row">

                  @foreach ($products as $product)
                      
                  
                  <div class="col-md-6 col-lg-4">
                    <div class="card text-center card-product">
                      <div class="card-product__img">
                      <img class="card-img" src="{{asset('products/'.$product->productImages->first()->path)}}" alt="">
                        <ul class="card-product__imgOverlay">
                          <li><button><i class="ti-search"></i></button></li>
                          <li><button><i class="ti-shopping-cart"></i></button></li>
                          <li><button><i class="ti-heart"></i></button></li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <p>Accessories</p>
                        <h4 class="card-product__title"><a href="{{route('front.single-product', [$product->slug])}}">{{$product->title}}</a></h4>
                        <p class="card-product__price">${{$product->price}}</p>
                      </div>
                    </div>
                  </div>

                  @endforeach

                  
                </div>
              </section>
              <!-- End Best Seller -->
            </div>
          </div>
        </div>
      </section>
  

	<!--================ Start related Product area =================-->  
	<section class="related-product-area section-margin--small mt-0">
		<div class="container">
			<div class="section-intro pb-60px">
        <p>Popular Item in the market</p>
        <h2>Top <span class="section-intro__style">Product</span></h2>
      </div>
			<div class="row mt-30">
        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="#"><img src="{{asset('img/product/product-sm-1.png')}}" alt=""></a>
              <div class="desc">
                  <a href="#" class="title">Gray Coffee Cup</a>
                  <div class="price">$170.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="{{asset('img/product/product-sm-2.png')}}" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Gray Coffee Cup</a>
                <div class="price">$170.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="{{asset('img/product/product-sm-3.png')}}" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Gray Coffee Cup</a>
                <div class="price">$170.00</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="#"><img src="{{asset('img/product/product-sm-4.png')}}" alt=""></a>
              <div class="desc">
                  <a href="#" class="title">Gray Coffee Cup</a>
                  <div class="price">$170.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="{{asset('img/product/product-sm-5.png')}}" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Gray Coffee Cup</a>
                <div class="price">$170.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="{{asset('img/product/product-sm-6.png')}}" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Gray Coffee Cup</a>
                <div class="price">$170.00</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="#"><img src="{{asset('img/product/product-sm-7.png')}}" alt=""></a>
              <div class="desc">
                  <a href="#" class="title">Gray Coffee Cup</a>
                  <div class="price">$170.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="{{asset('img/product/product-sm-8.png')}}" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Gray Coffee Cup</a>
                <div class="price">$170.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="{{asset('img/product/product-sm-9.png')}}" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Gray Coffee Cup</a>
                <div class="price">$170.00</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="#"><img src="{{asset('img/product/product-sm-1.png')}}" alt=""></a>
              <div class="desc">
                  <a href="#" class="title">Gray Coffee Cup</a>
                  <div class="price">$170.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="{{asset('img/product/product-sm-2.png')}}" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Gray Coffee Cup</a>
                <div class="price">$170.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="{{asset('img/product/product-sm-3.png')}}" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Gray Coffee Cup</a>
                <div class="price">$170.00</div>
              </div>
            </div>
          </div>
        </div>
      </div>
		</div>
	</section>
	<!--================ end related Product area =================-->  	

    @endsection