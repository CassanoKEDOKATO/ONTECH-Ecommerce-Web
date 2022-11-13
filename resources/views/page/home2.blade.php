@extends('homelayout')
@section('content')
<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-vs" id="top-banner-and-menu">
   <div class="container">
      <div class="row">
         <!-- ============================================== SIDEBAR ============================================== -->
         {{-- <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
            <!-- ================================== TOP NAVIGATION ================================== -->
            <div class="side-menu animate-dropdown outer-bottom-xs">
               <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Danh mục sản phẩm</div>
               <nav class="yamm megamenu-horizontal">
                  <ul class="nav">
                     <li class="dropdown menu-item">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-desktop" aria-hidden="true"></i> PC - Linh kiện</a>
                        <ul class="dropdown-menu mega-menu">
                           <li class="yamm-content">
                              <div class="row">
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><b>THƯƠNG HIỆU</b></li>
                                       @foreach ($brands as $key => $value_brand)
                                       <li><a href="#">{{$value_brand->brand_name}}</a></li>
                                       @endforeach
                                    </ul>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><b>PC GAMING</b></li>
                                       <li><a href="#">Dưới 10 triệu</a></li>
                                       <li><a href="#">Trên 10 triệu</a></li>
                                       <li><a href="#">20-30 triệu</a></li>
                                       <li><a href="#">30-40 triệu</a></li>
                                       <li><a href="#">Trên 40 triệu</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><b>PC VĂN PHÒNG</b></li>
                                       <li><a href="#">Dưới 10 triệu</a></li>
                                       <li><a href="#">Trên 10 triệu</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><b>PC WORKSTATION</b></li>
                                       <li><a href="#">Dưới 10 triệu</a></li>
                                       <li><a href="#">Trên 10 triệu</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col --> 
                              </div>
                              <!-- /.row --> 
                           </li>
                           <!-- /.yamm-content -->
                        </ul>
                        <!-- /.dropdown-menu -->
                     </li>
                     <!-- /.menu-item -->
                     <li class="dropdown menu-item">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-laptop" aria-hidden="true"></i> Laptop</a>
                        <ul class="dropdown-menu mega-menu">
                           <li class="yamm-content">
                              <div class="row">
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><b>THƯƠNG HIỆU</b></li>
                                       @foreach ($brands as $key => $value_brand)
                                       <li><a href="#">{{$value_brand->brand_name}}</a></li>
                                       @endforeach
                                    </ul>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><b>NHU CẦU</b></li>
                                       <li><a href="#">laptop Gaming</a></li>
                                       <li><a href="#">Laptop độ hoạ</a></li>
                                       <li><a href="#">Laptop mỏng nhẹ</a></li>
                                       <li><a href="#">Laptop văn phòng</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><b>KHOẢNG GIÁ</b></li>
                                       <li><a href="#">Dưới 10 triệu</a></li>
                                       <li><a href="#">Trên 10 triệu</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><b>KÍCH THƯỚC MÀN</b></li>
                                       <li><a href="#">Dưới 10 triệu</a></li>
                                       <li><a href="#">Trên 10 triệu</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col --> 
                              </div>
                              <!-- /.row --> 
                           </li>
                           <!-- /.yamm-content -->
                        </ul>
                        <!-- /.dropdown-menu -->
                     </li>
                     <li class="dropdown menu-item">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-tv aria-hidden="true"></i> Màn hình</a>
                        <ul class="dropdown-menu mega-menu">
                           <li class="yamm-content">
                              <div class="row">
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><a href="#">Dresses</a></li>
                                       <li><a href="#">Shoes </a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><a href="#">Handbags</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><a href="#">Toys &amp; Games</a></li>
                                       <li><a href="#">Jeans</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><a href="#">Sandals </a></li>
                                       <li><a href="#">Shorts</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col --> 
                              </div>
                              <!-- /.row --> 
                           </li>
                           <!-- /.yamm-content -->
                        </ul>
                        <!-- /.dropdown-menu -->
                     </li>
                     <li class="dropdown menu-item">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-keyboard-o" aria-hidden="true"></i> Bàn phím</a>
                        <ul class="dropdown-menu mega-menu">
                           <li class="yamm-content">
                              <div class="row">
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><a href="#">Dresses</a></li>
                                       <li><a href="#">Shoes </a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><a href="#">Handbags</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><a href="#">Toys &amp; Games</a></li>
                                       <li><a href="#">Jeans</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><a href="#">Sandals </a></li>
                                       <li><a href="#">Shorts</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col --> 
                              </div>
                              <!-- /.row --> 
                           </li>
                           <!-- /.yamm-content -->
                        </ul>
                        <!-- /.dropdown-menu -->
                     </li>
                     <li class="dropdown menu-item">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i> Chuột</a>
                        <ul class="dropdown-menu mega-menu">
                           <li class="yamm-content">
                              <div class="row">
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><a href="#">Dresses</a></li>
                                       <li><a href="#">Shoes </a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><a href="#">Handbags</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><a href="#">Toys &amp; Games</a></li>
                                       <li><a href="#">Jeans</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><a href="#">Sandals </a></li>
                                       <li><a href="#">Shorts</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col --> 
                              </div>
                              <!-- /.row --> 
                           </li>
                           <!-- /.yamm-content -->
                        </ul>
                        <!-- /.dropdown-menu -->
                     </li>
                     <li class="dropdown menu-item">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i> Balo</a>
                        <ul class="dropdown-menu mega-menu">
                           <li class="yamm-content">
                              <div class="row">
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><a href="#">Dresses</a></li>
                                       <li><a href="#">Shoes </a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><a href="#">Handbags</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><a href="#">Toys &amp; Games</a></li>
                                       <li><a href="#">Jeans</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                       <li><a href="#">Sandals </a></li>
                                       <li><a href="#">Shorts</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.col --> 
                              </div>
                              <!-- /.row --> 
                           </li>
                           <!-- /.yamm-content -->
                        </ul>
                        <!-- /.dropdown-menu -->
                     </li>
                  </ul>
                  <!-- /.nav --> 
               </nav>
               <!-- /.megamenu-horizontal --> 
            </div>
            <!-- /.side-menu --> 
            <!-- ================================== TOP NAVIGATION : END ================================== --> 
            <!-- ============================================== HOT DEALS ============================================== -->
            <div class="sidebar-widget hot-deals outer-bottom-xs">
               <h3 class="section-title">Hot deals</h3>
               <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
                  @foreach ($all_products as $key => $product)
                  <div class="item">
                     <div class="products">
                        <div class="hot-deal-wrapper">
                           <div class="image"> 
                              <a href="#">
                              <img src="{{asset('public/upload/productImage/'.$product->product_image)}}" alt=""> 
                              </a>
                           </div>
                           <div class="sale-offer-tag"><span>49%<br>
                              off</span>
                           </div>
                           <div class="timing-wrapper">
                              <div class="box-wrapper">
                                 <div class="date box"> <span class="key">120</span> <span class="value">DAYS</span> </div>
                              </div>
                              <div class="box-wrapper">
                                 <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                              </div>
                              <div class="box-wrapper">
                                 <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                              </div>
                              <div class="box-wrapper">
                                 <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                              </div>
                           </div>
                        </div>
                        <!-- /.hot-deal-wrapper -->
                        <div class="product-info text-left m-t-20">
                           <h3 class="name"><a href="detail.html">{{$product->product_name}}</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="product-price"> <span class="price">{{number_format($product->product_price)}} </span> <span class="price-before-discount">$800.00</span> </div>
                           <!-- /.product-price --> 
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <div class="add-cart-button btn-group">
                                 <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                 <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </div>
                           </div>
                           <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                     </div>
                  </div>
                  @endforeach
               </div>
               <!-- /.sidebar-widget --> 
            </div>
            <!-- ============================================== HOT DEALS: END ============================================== --> 
            <!-- ============================================== SPECIAL OFFER ============================================== -->
            <div class="sidebar-widget outer-bottom-small">
               <h3 class="section-title">Special Offer</h3>
               <div class="sidebar-widget-body outer-top-xs">
                  <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                     <div class="item">
                        <div class="products special-product">
                           <div class="product">
                              <div class="product-micro">
                                 <div class="row product-micro-row">
                                    <div class="col col-xs-5">
                                       <div class="product-image">
                                          <div class="image"> <a href="#"> <img src="{{asset('public\upload\productImage\ASUS-ROG-Strix-SCAR-15-2022-ThinkPro-01.jpg')}}" alt=""> </a> </div>
                                          <!-- /.image --> 
                                       </div>
                                       <!-- /.product-image --> 
                                    </div>
                                    <!-- /.col -->
                                    <div class="col col-xs-7">
                                       <div class="product-info">
                                          <h3 class="name"><a href="#"></a></h3>
                                          <div class="rating rateit-small"></div>
                                          <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                          <!-- /.product-price --> 
                                       </div>
                                    </div>
                                    <!-- /.col --> 
                                 </div>
                                 <!-- /.product-micro-row --> 
                              </div>
                              <!-- /.product-micro --> 
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="products special-product">
                           <div class="product">
                              <div class="product-micro">
                                 <div class="row product-micro-row">
                                    <div class="col col-xs-5">
                                       <div class="product-image">
                                          <div class="image"> <a href="#"> <img src="assets/images/products/p15.jpg" alt=""> </a> </div>
                                          <!-- /.image --> 
                                       </div>
                                       <!-- /.product-image --> 
                                    </div>
                                    <!-- /.col -->
                                    <div class="col col-xs-7">
                                       <div class="product-info">
                                          <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                          <div class="rating rateit-small"></div>
                                          <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                          <!-- /.product-price --> 
                                       </div>
                                    </div>
                                    <!-- /.col --> 
                                 </div>
                                 <!-- /.product-micro-row --> 
                              </div>
                              <!-- /.product-micro --> 
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="products special-product">
                           <div class="product">
                              <div class="product-micro">
                                 <div class="row product-micro-row">
                                    <div class="col col-xs-5">
                                       <div class="product-image">
                                          <div class="image"> <a href="#"> <img src="assets/images/products/p1.jpg"  alt=""> </a> </div>
                                          <!-- /.image --> 
                                       </div>
                                       <!-- /.product-image --> 
                                    </div>
                                    <!-- /.col -->
                                    <div class="col col-xs-7">
                                       <div class="product-info">
                                          <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                                          <div class="rating rateit-small"></div>
                                          <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                          <!-- /.product-price --> 
                                       </div>
                                    </div>
                                    <!-- /.col --> 
                                 </div>
                                 <!-- /.product-micro-row --> 
                              </div>
                              <!-- /.product-micro --> 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== SPECIAL OFFER : END ============================================== --> 
            <!-- ============================================== PRODUCT TAGS ============================================== -->
            <div class="sidebar-widget product-tag">
               <h3 class="section-title">Product tags</h3>
               <div class="sidebar-widget-body outer-top-xs">
                  <div class="tag-list"> 
                     <a class="item" title="Phone" href="category.html">Laptop</a> 
                     <a class="item active" title="Vest" href="category.html">Bàn phím</a> 
                     <a class="item" title="Smartphone" href="category.html">Balo</a>
                     <a class="item" title="Furniture" href="category.html">Chuột,lót chuột</a>
                     <a class="item" title="T-shirt" href="category.html">RAM </a>
                     <a class="item" title="Sweatpants" href="category.html"> Đế tản nhiệt</a>
                     <a class="item" title="Sneaker" href="category.html">CPU</a> 
                     <a class="item" title="Toys" href="category.html">GPU</a> 
                     <a class="item" title="Rose" href="category.html">Tai nghe</a>
                  </div>
                  <!-- /.tag-list --> 
               </div>
               <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== PRODUCT TAGS : END ============================================== --> 
         </div> --}}
         <!-- /.sidemenu-holder --> 
         <!-- ============================================== SIDEBAR : END ============================================== --> 
         <!-- ============================================== CONTENT ============================================== -->
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <!-- ========================================== SECTION – HERO ========================================= -->
            <div id="hero">
               <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                  <div class="item" style="background-image: url(frontend/banner/bn2.jpg);">
                     <div class="container-fluid">
                        {{-- 
                        <div class="caption bg-color vertical-center text-left">
                           <div class="slider-header fadeInDown-1">Top Brands</div>
                           <div class="big-text fadeInDown-1"> New Collections </div>
                           <div class="excerpt fadeInDown-2 hidden-xs"> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> </div>
                           <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                        </div>
                        --}}
                        <!-- /.caption --> 
                     </div>
                     <!-- /.container-fluid --> 
                  </div>
                  <!-- /.item -->
                  <div class="item" style="background-image: url(frontend/banner/banner4.jpg);">
                     <div class="container-fluid">
                        {{-- 
                        <div class="caption bg-color vertical-center text-left">
                           <div class="slider-header fadeInDown-1">Spring 2018</div>
                           <div class="big-text fadeInDown-1"> Women Fashion </div>
                           <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span> </div>
                           <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                        </div>
                        --}}
                        <!-- /.caption --> 
                     </div>
                     <!-- /.container-fluid --> 
                  </div>
                  <!-- /.item --> 
                  <div class="item" style="background-image: url(frontend/smallbanner/geforce-rtx-super-series-og-1200x630.jpg);">
                     <div class="container-fluid">
                        {{-- 
                        <div class="caption bg-color vertical-center text-left">
                           <div class="slider-header fadeInDown-1">Spring 2018</div>
                           <div class="big-text fadeInDown-1"> Women Fashion </div>
                           <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span> </div>
                           <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                        </div>
                        --}}
                        <!-- /.caption --> 
                     </div>
                     <!-- /.container-fluid --> 
                  </div>
                  <div class="item" style="background-image: url(frontend/smallbanner/maxresdefault.jpg);">
                     <div class="container-fluid">
                        {{-- 
                        <div class="caption bg-color vertical-center text-left">
                           <div class="slider-header fadeInDown-1">Spring 2018</div>
                           <div class="big-text fadeInDown-1"> Women Fashion </div>
                           <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span> </div>
                           <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                        </div>
                        --}}
                        <!-- /.caption --> 
                     </div>
                     <!-- /.container-fluid --> 
                  </div>
                  <div class="item" style="background-image: url(frontend/banner/bn1.webp);">
                     <div class="container-fluid">
                        {{-- 
                        <div class="caption bg-color vertical-center text-left">
                           <div class="slider-header fadeInDown-1">Spring 2018</div>
                           <div class="big-text fadeInDown-1"> Women Fashion </div>
                           <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span> </div>
                           <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                        </div>
                        --}}
                        <!-- /.caption --> 
                     </div>
                     <!-- /.container-fluid --> 
                  </div>
                  <!-- /.item --> 
               </div>
               <!-- /.owl-carousel --> 
            </div>
            <!-- ========================================= SECTION – HERO : END ========================================= --> 
            <!-- ============================================== SCROLL TABS ============================================== -->
            <div class="row">
               <div class="col-lg-12">
                  <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
               <div class="more-info-tab clearfix ">
                  <h3 class="new-product-title pull-left">SẢN PHẨM MỚI</h3>
                  <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                     <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
                     <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Laptop</a></li>
                     <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Ban phim</a></li>
                     <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Chuot</a></li>
                  </ul>
                  <!-- /.nav-tabs --> 
               </div>
               <div class="tab-content outer-top-xs">
                  <div class="tab-pane in active" id="all">
                     <div class="product-slider">
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                           @foreach ($all_products as $key => $show_all_products)
                          
                           <div class="item item-carousel">
                              <div class="products sanpham">
                                
                                 <div class="product">
                                    <div class="product-image">
                                       <div class="image"> 
                                          <a href="{{URL::to('chi-tiet-san-pham/'.$show_all_products->product_id)}}">
                                          <img src="{{asset('public/upload/productImage/'.$show_all_products->product_image)}}" alt=""> 
                                          <img src="{{asset('public/upload/productImage/'.$show_all_products->product_image)}}" alt="" class="hover-image">
                                          </a> 
                                       </div>
                                       <!-- /.image -->
                                       <div class="tag new"><span>new</span></div>
                                    </div>
                                    <!-- /.product-image -->
                                    <div class="product-info text-left">
                                       <h3 class="name"> <a href="{{URL::to('chi-tiet-san-pham/'.$show_all_products->product_id)}}">{{$show_all_products->product_name}}</a></h3>
                                    
                                       <div class="rating rateit-small"></div>
                                       <div class="description"></div>
                                       <div class="product-price"> <span class="price">{{number_format($show_all_products->product_price)}}</span> <span class="price-before-discount">$ 800</span> </div>
                                       <!-- /.product-price --> 
                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                       <div class="action">
                                          <ul class="list-unstyled">
                                           
                                          </ul>
                                       </div>
                                       <!-- /.action --> 
                                    </div>
                                    <!-- /.cart --> 
                                 </div>
                                 <!-- /.product --> 
                              </div>
                              <!-- /.products --> 
                           </div>
                           <!-- /.item -->
                      
                           @endforeach
                        </div>
                        <!-- /.home-owl-carousel --> 
                     </div>
                     <!-- /.product-slider --> 
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="smartphone">
                     <div class="product-slider">
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                        @foreach ($laptop as $key => $value_laptop)
                           <div class="item item-carousel">
                              <div class="products">
                                 <div class="product">
                                    <div class="product-image">
                                       <div class="image"> 
                                          <a href="{{URL::to('chi-tiet-san-pham/'.$value_laptop->product_id)}}">
                                             <img src="{{asset('public/upload/productImage/'.$value_laptop->product_image)}}" alt=""> 
                                             {{-- <img src="{{asset('public/upload/productImage/'.$value_laptop->product_image)}}" alt="" class="hover-image"> --}}
                                             <img src="{{asset('public/upload/productImage/58860_ban_phim_logitech_pro_kda_usb_rgb_den_trang_gx_brown_sw_0001_2.jpg')}}" alt="" class="hover-image">
                                             </a> 
                                          </a>
                                       </div>
                                       <!-- /.image -->
                                       <div class="tag sale"><span>sale</span></div>
                                    </div>
                                    <!-- /.product-image -->
                                    <div class="product-info text-left">
                                       <h3 class="name"> <a href="{{URL::to('chi-tiet-san-pham/'.$value_laptop->product_id)}}">{{$value_laptop->product_name}}</a></h3>
                                       <div class="rating rateit-small"></div>
                                       <div class="description"></div>
                                       <div class="product-price"> <span class="price">{{number_format($value_laptop->product_price)}}</span> <span class="price-before-discount">$ 800</span> </div>
                                       <!-- /.product-price --> 
                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                       <div class="action">
                                          <ul class="list-unstyled">
                                             <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                             </li>
                                             <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                             <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                          </ul>
                                       </div>
                                       <!-- /.action --> 
                                    </div>
                                    <!-- /.cart --> 
                                 </div>
                                 <!-- /.product --> 
                              </div>
                              <!-- /.products --> 
                           </div>
                           @endforeach
                           <!-- /.item -->
                        </div>
                        <!-- /.home-owl-carousel --> 
                     </div>
                     <!-- /.product-slider --> 
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="laptop">
                     <div class="product-slider">
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                           <div class="item item-carousel">
                              <div class="products">
                                 <div class="product">
                                    <div class="product-image">
                                       <div class="image"> 
                                          <a href="detail.html">
                                          <img src="assets/images/products/p15.jpg" alt=""> 
                                          <img src="assets/images/products/p15_hover.jpg" alt="" class="hover-image">
                                          </a>
                                       </div>
                                       <!-- /.image -->
                                       <div class="tag new"><span>new</span></div>
                                    </div>
                                    <!-- /.product-image -->
                                    <div class="product-info text-left">
                                       <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                       <div class="rating rateit-small"></div>
                                       <div class="description"></div>
                                       <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                       <!-- /.product-price --> 
                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                       <div class="action">
                                          <ul class="list-unstyled">
                                             <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                             </li>
                                             <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                             <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                          </ul>
                                       </div>
                                       <!-- /.action --> 
                                    </div>
                                    <!-- /.cart --> 
                                 </div>
                                 <!-- /.product --> 
                              </div>
                              <!-- /.products --> 
                           </div>
                           <!-- /.item -->
                        </div>
                        <!-- /.home-owl-carousel --> 
                     </div>
                     <!-- /.product-slider --> 
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="apple">
                     <div class="product-slider">
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                           <div class="item item-carousel">
                              <div class="products">
                                 <div class="product">
                                    <div class="product-image">
                                       <div class="image"> 
                                          <a href="detail.html">
                                          <img src="assets/images/products/p13.jpg" alt=""> 
                                          <img src="assets/images/products/p13_hover.jpg" alt="" class="hover-image">
                                          </a>
                                       </div>
                                       <!-- /.image -->
                                       <div class="tag sale"><span>sale</span></div>
                                    </div>
                                    <!-- /.product-image -->
                                    <div class="product-info text-left">
                                       <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                       <div class="rating rateit-small"></div>
                                       <div class="description"></div>
                                       <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                                       <!-- /.product-price --> 
                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                       <div class="action">
                                          <ul class="list-unstyled">
                                             <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                             </li>
                                             <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                             <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                          </ul>
                                       </div>
                                       <!-- /.action --> 
                                    </div>
                                    <!-- /.cart --> 
                                 </div>
                                 <!-- /.product --> 
                              </div>
                              <!-- /.products --> 
                           </div>
                           <!-- /.item -->
                        </div>
                        <!-- /.home-owl-carousel --> 
                     </div>
                     <!-- /.product-slider --> 
                  </div>
                  <!-- /.tab-pane --> 
               </div>
               <!-- /.tab-content --> 
            </div>
               </div>
            </div>
            <!-- /.scroll-tabs --> 
            <!-- ============================================== SCROLL TABS : END ============================================== --> 
            <!-- ============================================== WIDE PRODUCTS ============================================== -->
            <div class="wide-banners outer-bottom-xs">
               <div class="row">
                  <div class="col-md-4 col-sm-4">
                     <div class="wide-banner cnt-strip">
                        <div class="image"> <img class="img-responsive" src="{{asset('frontend\smallbanner\maxresdefault.jpg')}}" alt=""> </div>
                     </div>
                     <!-- /.wide-banner --> 
                  </div>
                  <div class="col-md-4 col-sm-4">
                     <div class="wide-banner cnt-strip">
                        <div class="image"> <img class="img-responsive" src="{{asset('frontend\smallbanner\JBL-Headphone-CLP-Banner-27-07-2022-Mobile.webp')}}" alt=""> </div>
                     </div>
                     <!-- /.wide-banner --> 
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4 col-sm-4">
                     <div class="wide-banner cnt-strip">
                        <div class="image"> <img class="img-responsive" src="{{asset('frontend\smallbanner\gigabyte-aorus-fi32u-gaming-monitor-gaming-on.jpg')}}" alt=""> </div>
                     </div>
                     <!-- /.wide-banner --> 
                  </div>
                  <!-- /.col --> 
               </div>
               <!-- /.row --> 
            </div>
            <!-- /.wide-banners --> 
            <!-- ============================================== FEATURED PRODUCTS ============================================== -->
            <section class="section new-arriavls">
               <h3 class="section-title">MÀN HÌNH KHUYẾN MÃI HOT</h3>
               <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                  @foreach ($monitor as $key => $value_monitor)
                  <div class="item item-carousel">
                     <div class="products">
                        <div class="product">
                           <div class="product-image">
                              <div class="image"> 
                                 <a href="{{URL::to('chi-tiet-san-pham/'.$value_monitor->product_id)}}">
                                 <img src="{{asset('public/upload/productImage/'.$value_monitor->product_image)}}" alt=""> 
                                 <img src="assets/images/products/p10_hover.jpg" alt="" class="hover-image">
                                 </a>
                              </div>
                              <!-- /.image -->
                              <div class="tag new"><span>new</span></div>
                           </div>
                           <!-- /.product-image -->
                           <div class="product-info text-left">
                              <h3 class="name"><a href="{{URL::to('chi-tiet-san-pham/'.$value_monitor->product_id)}}">{{$value_monitor->product_name}}</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price"> <span class="price">{{number_format($value_monitor->product_price)}} đ </span> <span class="price-before-discount">$ 800</span> </div>
                              <!-- /.product-price --> 
                           </div>
                           <!-- /.product-info -->
                           <div class="cart clearfix animate-effect">
                              <div class="action">
                                 <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                       <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                       <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                 </ul>
                              </div>
                              <!-- /.action --> 
                           </div>
                           <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                     </div>
                     <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  @endforeach
               </div>
               <!-- /.home-owl-carousel --> 
            </section>
            <!-- /.section --> 
            <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
            <!-- ============================================== WIDE PRODUCTS ============================================== -->
            <div class="wide-banners outer-bottom-xs">
               <div class="row">
                  <div class="col-md-8">
                     <div class="wide-banner1 cnt-strip">
                        <div class="image"> <img class="img-responsive" src="{{asset('frontend\smallbanner\aorus.jpg')}}" alt=""> </div>
                        {{-- 
                        <div class="strip strip-text">
                           <div class="strip-inner">
                              <h2 class="text-right">TEXT<br>
                                 <span class="shopping-needs">Get 40% off on selected items</span>
                              </h2>
                           </div>
                        </div>
                        --}}
                        {{-- 
                        <div class="new-label">
                           <div class="text">NEW</div>
                        </div>
                        --}}
                        <!-- /.new-label --> 
                     </div>
                     <!-- /.wide-banner --> 
                  </div>
                  <!-- /.col --> 
                  <div class="col-md-4">
                     <div class="wide-banner cnt-strip">
                        <div class="image"> <img class="img-responsive" src="{{asset('frontend\smallbanner\geforce-rtx-super-series-og-1200x630.jpg')}}" alt=""> </div>
                        <!-- /.new-label --> 
                     </div>
                     <!-- /.wide-banner --> 
                  </div>
               </div>
               <!-- /.row --> 
            </div>
            <section class="section new-arriavls">
               <h3 class="section-title">BÀN PHÍM GAMING CỰC HOT</h3>
               <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                  @foreach ($keyboard as $key => $value_keyboard)
                  <div class="item item-carousel">
                     <div class="products">
                        <div class="product">
                           <div class="product-image">
                              <div class="image"> 
                                 <a href="{{URL::to('chi-tiet-san-pham/'.$value_keyboard->product_id)}}">
                                 <img src="{{asset('public/upload/productImage/'.$value_keyboard->product_image)}}" alt=""> 
                                 <img src="assets/images/products/p10_hover.jpg" alt="" class="hover-image">
                                 </a>
                              </div>
                              <!-- /.image -->
                              <div class="tag new"><span>new</span></div>
                           </div>
                           <!-- /.product-image -->
                           <div class="product-info text-left">
                              <h3 class="name"><a href="{{URL::to('chi-tiet-san-pham/'.$value_keyboard->product_id)}}">{{$value_keyboard->product_name}}</a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price"> <span class="price">{{number_format($value_keyboard->product_price)}} đ </span> <span class="price-before-discount">$ 800</span> </div>
                              <!-- /.product-price --> 
                           </div>
                           <!-- /.product-info -->
                           <div class="cart clearfix animate-effect">
                              <div class="action">
                                 <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                       <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                       <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                 </ul>
                              </div>
                              <!-- /.action --> 
                           </div>
                           <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                     </div>
                     <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  @endforeach
               </div>
               <!-- /.home-owl-carousel --> 
            </section>
            <!-- /.wide-banners --> 
            <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
            <!-- ============================================== BLOG SLIDER ============================================== -->
            <section class="section latest-blog outer-bottom-vs">
               <h3 class="section-title">Blog</h3>
               <div class="blog-slider-container outer-top-xs">
                  <div class="owl-carousel blog-slider custom-carousel">
                     <div class="item">
                        <div class="blog-post">
                           <div class="blog-post-image">
                              <div class="image"> <a href="blog.html"><img src="{{('frontend\banner\smallbanner1.jpg')}}" alt=""></a> </div>
                           </div>
                           <!-- /.blog-post-image -->
                           <div class="blog-post-info text-left">
                              <h3 class="name"><a href="#">Build PC cực xịn chớp liền GEAR xịn</a></h3>
                              <span class="info"> &nbsp;|&nbsp; 21 March 2016 </span>
                              <p class="text">Giảm giá ngay khi thanh toán trực tiếp tại showroom</p>
                           </div>
                           <!-- /.blog-post-info --> 
                        </div>
                        <!-- /.blog-post --> 
                     </div>
                     <!-- /.item -->
                     <div class="item">
                        <div class="blog-post">
                           <div class="blog-post-image">
                              <div class="image"> <a href="blog.html"><img src="{{('frontend\banner\banner4.jpg')}}" alt=""></a> </div>
                           </div>
                           <!-- /.blog-post-image -->
                           <div class="blog-post-info text-left">
                              <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                              <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                              <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                           </div>
                           <!-- /.blog-post-info --> 
                        </div>
                        <!-- /.blog-post --> 
                     </div>
                     <!-- /.item --> 
                     <!-- /.item -->
                     <div class="item">
                        <div class="blog-post">
                           <div class="blog-post-image">
                              <div class="image"> <a href="blog.html"><img src="{{('frontend\banner\bn1.webp')}}" alt=""></a> </div>
                           </div>
                           <!-- /.blog-post-image -->
                           <div class="blog-post-info text-left">
                              <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                              <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                              <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                           </div>
                           <!-- /.blog-post-info --> 
                        </div>
                        <!-- /.blog-post --> 
                     </div>
                     <!-- /.item -->
                     <div class="item">
                        <div class="blog-post">
                           <div class="blog-post-image">
                              <div class="image"> <a href="blog.html"><img src="assets/images/blog-post/blog_big_01.jpg" alt=""></a> </div>
                           </div>
                           <!-- /.blog-post-image -->
                           <div class="blog-post-info text-left">
                              <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                              <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                              <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                           </div>
                           <!-- /.blog-post-info --> 
                        </div>
                        <!-- /.blog-post --> 
                     </div>
                     <!-- /.item -->
                     <div class="item">
                        <div class="blog-post">
                           <div class="blog-post-image">
                              <div class="image"> <a href="blog.html"><img src="assets/images/blog-post/blog_big_02.jpg" alt=""></a> </div>
                           </div>
                           <!-- /.blog-post-image -->
                           <div class="blog-post-info text-left">
                              <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                              <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                              <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                           </div>
                           <!-- /.blog-post-info --> 
                        </div>
                        <!-- /.blog-post --> 
                     </div>
                     <!-- /.item --> 
                  </div>
                  <!-- /.owl-carousel --> 
               </div>
               <!-- /.blog-slider-container --> 
            </section>
            <section class="section latest-blog outer-bottom-vs">
               <h3 class="section-title">Thương hiệu</h3>
               <div class="blog-slider-container outer-top-xs">
                  <div class="owl-carousel blog-slider custom-carousel">
                     @foreach ($brands as $key =>$brand_value)
                     <div class="item" >
                        <div class="blog-post">
                           <div class="blog-post-image">
                              <div class="image" > <a href="blog.html"><img src="{{asset('public/upload/brandImage/'.$brand_value->brand_image)}}" alt="" ></a> </div>
                           </div>
                           <!-- /.blog-post-image -->
                        </div>
                        <!-- /.blog-post --> 
                     </div>
                     @endforeach
                     <!-- /.item -->
                  </div>
                  <!-- /.owl-carousel --> 
               </div>
               <!-- /.blog-slider-container --> 
            </section>
            <!-- /.section --> 
            <!-- ============================================== BLOG SLIDER : END ============================================== --> 
         </div>
         <!-- /.homebanner-holder --> 
         <!-- ============================================== CONTENT : END ============================================== --> 
      </div>
      <!-- /.row --> 
      <!-- ============================================== BRANDS CAROUSEL ============================================== -->
      <div id="brands-carousel" class="logo-slider">
         <div class="logo-slider-inner">
            <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
               <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="{{asset('frontend/assets/images/brands/brand1.png')}}" src="assets/images/blank.gif" alt="" > </a> </div>
               <!--/.item-->
               <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
               <!--/.item-->
               <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt=""> </a> </div>
               <!--/.item-->
               <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
               <!--/.item-->
               <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
               <!--/.item-->
               <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt=""> </a> </div>
               <!--/.item-->
               <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
               <!--/.item-->
               <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
               <!--/.item-->
               <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt=""> </a> </div>
               <!--/.item-->
               <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
               <!--/.item--> 
            </div>
            <!-- /.owl-carousel #logo-slider --> 
         </div>
         <!-- /.logo-slider-inner --> 
      </div>
      <!-- /.logo-slider --> 
      <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 
   </div>
   <!-- /.container --> 
</div>
<!-- /#top-banner-and-menu --> 
@endsection