<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons Icon -->

<title>ezone premium HTML5 &amp; CSS3 template</title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="{{ asset('themes/ezone/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('themes/ezone/assets/css/font-awesome.css" media="all') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('themes/ezone/assets/css/simple-line-icons.css" media="all') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('themes/ezone/assets/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('themes/ezone/assets/css/owl.theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('themes/ezone/assets/css/jquery.bxslider.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('themes/ezone/assets/css/jquery.mobile-menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('themes/ezone/assets/css/revslider.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('themes/ezone/assets/css/style.css') }}" media="all">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index index">
<div id="page">

  @include('themes.ezone.partials.header')

  @include('themes.ezone.partials.navbar')

  @yield('content')

  <div class="promo-section">
  <div class="container">
  <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><img alt="promotion banner" src="{{ asset('themes/ezone/assets/images/promo-banner1.jpg') }}"></div>
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><img alt="promotion banner" src="{{ asset('themes/ezone/assets/images/promo-banner2.jpg') }}"></div>
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><img alt="promotion banner" src="{{ asset('themes/ezone/assets/images/promo-banner3.jpg') }}"></div>
  </div>
  </div>
  </div>

  <!-- Featured Slider -->
  <section class="featured-pro container wow bounceInUp animated">
    <div class="slider-items-products container">
      <div class="new_title center">
        <h2>ezone Products</h2>
        <div class="starSeparator"></div>
      </div>
      <div id="featured-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4 products-grid">
          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="#"> <img alt="Retis lapen casen" src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}"> </a>
                  <div class="new-label new-top-left">new</div>
                  <div class="box-timer">
                      <div class="countbox_2 timer-grid"></div>
                    </div>
                  <div class="actions">
                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                    <p data-original-title="Out of Stock" title="" data-placement="right" data-toggle="tooltip" class="availability out-of-stock"><span class="ava-out-of-stock">Out of stock</span></p>
                  </div>
                  <div class="rating">
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:80%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="Retis lapen casen" href="#"> Retis lapen casen </a> </div>
                  <div class="item-content">
                    <div class="item-price">
                      <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="#"> <img alt="Retis lapen casen" src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}"> </a>
                  <div class="actions">
                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                    <div class="add_cart">
                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                    </div>
                  </div>
                  <div class="rating">
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:80%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="Retis lapen casen" href="#"> Retis lapen casen </a> </div>
                  <div class="item-content">
                    <div class="item-price">
                      <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item -->

          <!-- Item -->
          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="#"> <img alt="Retis lapen casen" src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}"> </a>
                  <div class="sale-label new-top-left">Sale</div>
                  <div class="actions">
                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                    <div class="add_cart">
                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                    </div>
                  </div>
                  <div class="rating">
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:80%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="Retis lapen casen" href="#"> Retis lapen casen </a> </div>
                  <div class="item-content">
                    <div class="item-price">
                      <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item -->

          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="#"> <img alt="Retis lapen casen" src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}"> </a>
                  <div class="actions">
                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                    <div class="add_cart">
                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                    </div>
                  </div>
                  <div class="rating">
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:80%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="Retis lapen casen" href="#"> Retis lapen casen </a> </div>
                  <div class="item-content">
                    <div class="item-price">
                      <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="#"> <img alt="Retis lapen casen" src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}"> </a>
                  <div class="actions">
                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                    <div class="add_cart">
                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                    </div>
                  </div>
                  <div class="rating">
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:80%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="Retis lapen casen" href="#"> Retis lapen casen </a> </div>
                  <div class="item-content">
                    <div class="item-price">
                      <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item -->
          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="#"> <img alt="Retis lapen casen" src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}"> </a>
                  <div class="actions">
                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                    <div class="add_cart">
                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                    </div>
                  </div>
                  <div class="rating">
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:80%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="Retis lapen casen" href="#"> Retis lapen casen </a> </div>
                  <div class="item-content">
                    <div class="item-price">
                      <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Item -->
          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="#"> <img alt="Retis lapen casen" src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}"> </a>
                     <div class="actions">
                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                    <div class="add_cart">
                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                    </div>
                  </div>
                  <div class="rating">
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:80%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="Retis lapen casen" href="#"> Retis lapen casen </a> </div>
                  <div class="item-content">
                    <div class="item-price">
                      <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item -->

        </div>
      </div>
    </div>
  </section>
  <!-- End Featured Slider -->

   <!--Promotion Banner-->
  <div class="offer-slider parallax parallax-2">
    <div class="container">
      <h2> Deals of the day</h2>
         <div class="starSeparator"></div>
      <p>ezone Men's clothing store is updated regularly with offers.</p>
     <div class="box-timer">
                      <div class="countbox_1 timer-grid"></div>
                    </div>
      <a href="#" class="shop-now">Shop Now</a> </div>
  </div>
  <!--Promotion Banner End-->

  <div class="container">
    <div class="row">
      <div class="products-grid">
        <div class="col-md-12">
          <div class="std">
            <div class="home-tabs wow bounceInUp animated">
              <div class="producttabs">
                <div id="thm_producttabs1" class="thm-producttabs">
                  <!--<h3></h3>-->
                  <div class="thm-pdt-container">
                    <!--Begin Tab Nav -->
                    <div class="thm-pdt-nav">
                      <ul class="pdt-nav">
                        <li class="item-nav" data-type="order" data-catid="" data-orderby="best_sales" data-href="pdt_best_sales"><span class="title-navi">Best Seller</span></li>
                        <li class="item-nav tab-loaded tab-nav-actived" data-type="order" data-catid="" data-orderby="new_arrivals" data-href="pdt_new_arrivals"><span class="title-navi">New Arrivals</span></li>
                        <li class="item-nav" data-type="order" data-catid="" data-orderby="featured" data-href="pdt_featured"><span class="title-navi">Featured</span></li>
                      </ul>
                    </div>
                    <!-- End Tab Nav -->
                    <!--Begin Tab Content -->
                    <div class="thm-pdt-content wide-5">
                      <div class="pdt-content is-loaded pdt_best_sales">
                        <ul class="pdt-list products-grid zoomOut play">
                          <li class="item item-animate wide-first">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}" alt="Retis lapen casen"></a>

                                  <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item item-animate">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}" alt="Retis lapen casen"></a>

                                  <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item item-animate">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}" alt="Retis lapen casen"></a>

                                  <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item last item-animate">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}" alt="Retis lapen casen"></a>

                                  <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="pdt-content pdt_new_arrivals is-loaded  tab-content-actived">
                        <ul class="pdt-list products-grid zoomOut play">
                          <li class="item item-animate wide-first">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}" alt="Retis lapen casen"></a>
                                            <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item item-animate">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}" alt="Retis lapen casen"></a>
                                         <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item item-animate">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}" alt="Retis lapen casen"></a>

                                  <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item item-animate last">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}" alt="Retis lapen casen"></a>
                                         <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="pdt-content pdt_featured is-loaded">
                        <ul class="pdt-list products-grid zoomOut play">
                          <li class="item item-animate wide-first">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}" alt="Retis lapen casen"></a>
                                      <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item item-animate">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}" alt="Retis lapen casen"></a>
                                  <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item item-animate">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}" alt="Retis lapen casen"></a>
                                          <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item item-animate last">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="{{ asset('themes/ezone/assets/products-images/product.jpg') }}" alt="Retis lapen casen"></a>
                                      <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Latest Blog -->
  <section class="latest-blog wow bounceInUp animated">
    <div class="container">
      <div class="new_title center">
        <h1>Latest Blog</h1>
        <div class="starSeparator"></div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
          <div class="blog_post">
                  <div class="thumbnail">
               <h2> <a href="#">Lorem ipsum dolor sit amet, consect adipiscing elit</a> </h2>
					<div class="featured-img">
					<span class="gradient-overlay"></span>
					 <img src="{{ asset('themes/ezone/assets/images/blog-img1.jpg') }}" alt="blog post">

					</div>

                    </div>
                    <div class="entry-meta">
			<a href="#">
  <span class="author-avatar byline"><img alt="" src="{{ asset('themes/ezone/assets/images/admin-photo.jpg') }}" class="avatar avatar-96 photo">By John Doe</span> <span class="timestamp">January 26, 2016</span>
</a>



		</div>
                    <p> Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien.</p>
                    <p> Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend... </p>
                   <a href="#" class="continue-btn">Continue Reading <span>›</span></a>
                  </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
          <div class="blog_post">
                  <div class="thumbnail">
               <h2> <a href="#"> Pellentesque aliquet, sem eget laoreet ultrices</a> </h2>
					<div class="featured-img">
					<span class="gradient-overlay"></span>
					 <img src="{{ asset('themes/ezone/assets/images/blog-img2.jpg') }}"  alt="blog post 2">

					</div>

                    </div>
                    <div class="entry-meta">
			<a href="#">
  <span class="author-avatar byline"><img alt="" src="{{ asset('themes/ezone/assets/images/admin-photo1.jpg') }}"  class="avatar avatar-96 photo">By Saraha Smith</span>
</a>
<span class="timestamp">January 20, 2016</span>


		</div>
                    <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales.</p>
                    <p> Donec eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu turpis... </p>
                   <a href="#" class="continue-btn">Continue Reading <span>›</span></a>
                  </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Latest Blog -->

  <div class="brand-logo wow bounceInUp animated">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6">

            <!-- Item -->
            <div class="item"><a href="#"><img src="{{ asset('themes/ezone/assets/images/b-logo3.png') }}" alt="Image"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item"><a href="#"><img src="{{ asset('themes/ezone/assets/images/b-logo2.png') }}" alt="Image"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item"><a href="#"><img src="{{ asset('themes/ezone/assets/images/b-logo1.png') }}" alt="Image"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item"><a href="#"><img src="{{ asset('themes/ezone/assets/images/b-logo4.png') }}" alt="Image"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item"><a href="#"><img src="{{ asset('themes/ezone/assets/images/b-logo5.png') }}" alt="Image"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item"><a href="#"><img src="{{ asset('themes/ezone/assets/images/b-logo6.png') }}" alt="Image"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item"><a href="#"><img src="{{ asset('themes/ezone/assets/images/b-logo1.png') }}" alt="Image"></a> </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="item"><a href="#"><img src="{{ asset('themes/ezone/assets/images/b-logo4.png') }}" alt="Image"></a> </div>
            <!-- End Item -->

          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="our-features-box">
    <div class="container">
      <ul>
        <li>
          <div class="feature-box red_bg"> <span class="icon-globe-alt"></span>
            <div class="content">
              <h3>FREE SHIPPING WORLDWIDE</h3>
            </div>
          </div>
        </li>
                <li>
          <div class="feature-box yellow_bg"> <span class="icon-support"></span>
            <div class="content">
              <h3>24/7 CUSTOMER SUPPORT</h3>
            </div>
          </div>
        </li>
          <li class="last">
          <div class="feature-box brown_bg"> <span class="icon-share-alt"></span>
            <div class="content">
              <h3>RETURNS AND EXCHANGES</h3>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>

  @include('themes.ezone.partials.footer')

<!-- JavaScript -->
<script type="text/javascript" src="{{ asset('themes/ezone/assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/ezone/assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/ezone/assets/js/common') }}.js"></script>
<script type="text/javascript" src="{{ asset('themes/ezone/assets/js/countdown') }}.js"></script>
<script type="text/javascript" src="{{ asset('themes/ezone/assets/js/owl.carousel.min') }}.js"></script>
<script type="text/javascript" src="{{ asset('themes/ezone/assets/js/jquery.mobile-menu.min') }}.js"></script>
<script type="text/javascript" src="{{ asset('themes/ezone/assets/js/revolution-slider') }}.js"></script>
<script type="text/javascript" src="{{ asset('themes/ezone/assets/js/revolution.extension') }}.js"></script>
  <script type="text/javascript">
var dthen1 = new Date("12/25/17 11:59:00 PM");
	start = "05/03/15 03:02:11 AM";
	start_date = Date.parse(start);
	var dnow1 = new Date(start_date);
	if (CountStepper > 0)
	ddiff = new Date((dnow1) - (dthen1));
	else
	ddiff = new Date((dthen1) - (dnow1));
	gsecs1 = Math.floor(ddiff.valueOf() / 1000);

	var iid1 = "countbox_1";
	CountBack_slider(gsecs1, "countbox_1", 1);

	var dthen1 = new Date("12/12/17 11:59:00 PM");
	start = "01/20/16 03:02:11 AM";
	start_date = Date.parse(start);
	var dnow1 = new Date(start_date);
	if (CountStepper > 0)
	ddiff = new Date((dnow1) - (dthen1));
	else
	ddiff = new Date((dthen1) - (dnow1));
	gsecs1 = Math.floor(ddiff.valueOf() / 1000);

	var iid1 = "countbox_2";
	CountBack_slider(gsecs1, "countbox_2", 1);
</script>

<script type="text/javascript">
					var tpj=jQuery;
					var revapi4;
					tpj(document).ready(function() {
						if(tpj("#rev_slider_4_1").revolution == undefined){
							revslider_showDoubleJqueryError("#rev_slider_4_1");
						}else{
							revapi4 = tpj("#rev_slider_4_1").show().revolution({
								sliderType:"standard",
								sliderLayout:"fullwidth",
								dottedOverlay:"none",
								delay:9000,
								navigation: {
									keyboardNavigation:"off",
									keyboard_direction: "horizontal",
									mouseScrollNavigation:"off",
									onHoverStop:"off",
									touch:{
										touchenabled:"on",
										swipe_threshold: 75,
										swipe_min_touches: 1,
										swipe_direction: "horizontal",
										drag_block_vertical: false
									}
									,
									arrows: {
										style:"zeus",
										enable:true,
										hide_onmobile:true,
										hide_under:750,
										hide_onleave:true,
										hide_delay:200,
										hide_delay_mobile:1200,
										tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
										left: {
											h_align:"left",
											v_align:"center",
											h_offset:30,
											v_offset:0
										},
										right: {
											h_align:"right",
											v_align:"center",
											h_offset:30,
											v_offset:0
										}
									}
									,
									bullets: {
										enable:true,
										hide_onmobile:true,
										hide_under:600,
										style:"metis",
										hide_onleave:true,
										hide_delay:200,
										hide_delay_mobile:1200,
										direction:"horizontal",
										h_align:"center",
										v_align:"bottom",
										h_offset:0,
										v_offset:30,
										space:5,

									}
								},
								viewPort: {
									enable:true,
									outof:"pause",
									visible_area:"80%"
								},
								responsiveLevels:[1240,1024,778,480],
								gridwidth:[768,1024,778,480],
								gridheight:[890,600,500,400],
								lazyType:"none",
								parallax: {
									type:"mouse",
									origo:"slidercenter",
									speed:2000,
									levels:[2,3,4,5,6,7,12,16,10,50],
								},
								shadow:0,
								spinner:"off",
								stopLoop:"off",
								stopAfterLoops:-1,
								stopAtSlide:-1,
								shuffle:"off",
								autoHeight:"off",
								hideThumbsOnMobile:"off",
								hideSliderAtLimit:0,
								hideCaptionAtLimit:0,
								hideAllCaptionAtLilmit:0,
								debugMode:false,
								fallbacks: {
									simplifyAll:"off",
									nextSlideOnWindowFocus:"off",
									disableFocusListener:false,
								}
							});
						}
					});	/*ready*/
				</script>


</body>
</html>
