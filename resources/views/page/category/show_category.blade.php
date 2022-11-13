@extends('homelayout')
@section('content')
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-inner">
        <ul class="list-inline list-unstyled">
          <li><a href="#">Home</a></li>
          <li class='active'>Handbags</li>
        </ul>
      </div>
      <!-- /.breadcrumb-inner --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.breadcrumb -->
  <div class="body-content outer-top-xs">
    <div class='container'>
      <div class='row'>
        <div class='col-xs-12 col-sm-12 col-md-3 sidebar'> 
         <!-- ================================== TOP NAVIGATION ================================== -->
         <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Danh mục sản phẩm</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
                <li class="dropdown menu-item"> <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-desktop" aria-hidden="true"></i> PC - Linh kiện</a>
                  <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                        <div class="row">
                            <div class="col-sm-12 col-md-3">
                              <ul class="links list-unstyled">
                                  <li><b>THƯƠNG HIỆU</b></li>
                                  @foreach ($brands as $key => $value_brand)
                                  <li><a href="">{{$value_brand->brand_name}}</a></li>
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
                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-laptop" aria-hidden="true"></i> Laptop</a>
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
                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-tv aria-hidden="true"></i> Màn hình</a>
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
                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-keyboard-o" aria-hidden="true"></i> Bàn phím</a>
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
                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i> Chuột</a>
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
                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i> Balo</a>
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
          <div class="sidebar-module-container">
            <div class="sidebar-filter"> 
              <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
              <div class="sidebar-widget">
                <h3 class="section-title">Shop by</h3>
                <div class="widget-header">
                  <h4 class="widget-title">Category</h4>
                </div>
                <div class="sidebar-widget-body">
                  <div class="accordion">
                    @foreach ($category as $key => $value_cate)
                        
                  
                    <div class="accordion-group">
                      <div class="accordion-heading"> <a href="{{URL::to('/danh-muc-san-pham/'.$value_cate->category_id)}}"  class="accordion-toggle collapsed"> {{$value_cate->category_name}} </a> </div>
                      <!-- /.accordion-heading -->
                      {{-- <div class="accordion-body collapse" id="collapseOne" style="height: 0px;">
                        <div class="accordion-inner">
                          <ul>
                            <li><a href="#">gaming</a></li>
                          </ul>
                        </div>
                        <!-- /.accordion-inner --> 
                      </div> --}}
                      <!-- /.accordion-body --> 
                    </div>
                    <!-- /.accordion-group -->
         
                    @endforeach
                    
                  </div>
                  <!-- /.accordion --> 
                </div>
                <!-- /.sidebar-widget-body --> 
              </div>
              <!-- /.sidebar-widget --> 
              <!-- ============================================== SIDEBAR CATEGORY : END ============================================== --> 
              
              <!-- ============================================== PRICE SILDER============================================== -->
              <div class="sidebar-widget">
                <div class="widget-header">
                  <h4 class="widget-title">Price Slider</h4>
                </div>
                <div class="sidebar-widget-body m-t-10">
                  <div class="price-range-holder"> <span class="min-max"> <span class="pull-left">$200.00</span> <span class="pull-right">$800.00</span> </span>
                    <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
                    <input type="text" class="price-slider" value="" >
                  </div>
                  <!-- /.price-range-holder --> 
                  <a href="#" class="lnk btn btn-primary">Show Now</a> </div>
                <!-- /.sidebar-widget-body --> 
              </div>
              <!-- /.sidebar-widget --> 
              <!-- ============================================== PRICE SILDER : END ============================================== --> 
              <!-- ============================================== MANUFACTURES============================================== -->
              <div class="sidebar-widget">
                <div class="widget-header">
                  <h4 class="widget-title">Manufactures</h4>
                </div>
                <div class="sidebar-widget-body">
                  <ul class="list">
                    @foreach ($brands as $key => $value_brand)
                    <li><a href="{{URL::to('thuong-hieu-san-pham/'.$value_brand->brand_id)}}">{{$value_brand->brand_name}}</a></li>
                    @endforeach
                  </ul>
                  <!--<a href="#" class="lnk btn btn-primary">Show Now</a>--> 
                </div>
                <!-- /.sidebar-widget-body --> 
              </div>
              <!-- /.sidebar-widget --> 
              <!-- ============================================== MANUFACTURES: END ============================================== --> 
              <!-- ============================================== COLOR============================================== -->
              <div class="sidebar-widget">
                <div class="widget-header">
                  <h4 class="widget-title">Colors</h4>
                </div>
                <div class="sidebar-widget-body">
                  <ul class="list">
                    <li><a href="#">Red</a></li>
                    <li><a href="#">Blue</a></li>
                    <li><a href="#">Yellow</a></li>
                    <li><a href="#">Pink</a></li>
                    <li><a href="#">Brown</a></li>
                    <li><a href="#">Teal</a></li>
                  </ul>
                </div>
                <!-- /.sidebar-widget-body --> 
              </div>
              <!-- /.sidebar-widget --> 
              <!-- ============================================== COLOR: END ============================================== --> 
              <!-- ============================================== COMPARE============================================== -->
              <div class="sidebar-widget outer-top-vs">
                <h3 class="section-title">Compare products</h3>
                <div class="sidebar-widget-body">
                  <div class="compare-report">
                    <p>You have no <span>item(s)</span> to compare</p>
                  </div>
                  <!-- /.compare-report --> 
                </div>
                <!-- /.sidebar-widget-body --> 
              </div>
              <!-- /.sidebar-widget --> 
              <!-- ============================================== COMPARE: END ============================================== --> 
              <!-- ============================================== PRODUCT TAGS ============================================== -->
              <div class="sidebar-widget product-tag outer-top-vs">
                <h3 class="section-title">Product tags</h3>
                <div class="sidebar-widget-body outer-top-xs">
                  <div class="tag-list"> <a class="item" title="Phone" href="category.html">Phone</a> <a class="item active" title="Vest" href="category.html">Vest</a> <a class="item" title="Smartphone" href="category.html">Smartphone</a> <a class="item" title="Furniture" href="category.html">Furniture</a> <a class="item" title="T-shirt" href="category.html">T-shirt</a> <a class="item" title="Sweatpants" href="category.html">Sweatpants</a> <a class="item" title="Sneaker" href="category.html">Sneaker</a> <a class="item" title="Toys" href="category.html">Toys</a> <a class="item" title="Rose" href="category.html">Rose</a> </div>
                  <!-- /.tag-list --> 
                </div>
                <!-- /.sidebar-widget-body --> 
              </div>
              <!-- /.sidebar-widget --> 
           
              
             
            </div>
            <!-- /.sidebar-filter --> 
          </div>
          <!-- /.sidebar-module-container --> 
        </div>
        <!-- /.sidebar -->
        <div class="col-xs-12 col-sm-12 col-md-9 rht-col"> 
          <!-- ========================================== SECTION – HERO ========================================= -->
          
          <div id="category" class="category-carousel hidden-xs">
            <div class="item">
              <div class="image"> <img src="{{asset('public\upload\sliderImage\banner-web-laptop-11.png')}}" alt="" class="img-responsive" style="width: 100%"> </div>
              <div class="container-fluid">
                
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
          </div>
          
       
          <div class="clearfix filters-container m-t-10">
            <div class="row">
              <div class="col col-sm-6 col-md-3 col-lg-3 col-xs-6">
                <div class="filter-tabs">
                  <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                    <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                    <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-bars"></i>List</a></li>
                  </ul>
                </div>
                <!-- /.filter-tabs --> 
              </div>
              <!-- /.col -->
              <div class="col col-sm-12 col-md-5 col-lg-5 hidden-sm">
                <div class="col col-sm-6 col-md-6 no-padding">
                  <div class="lbl-cnt"> <span class="lbl">Sort by</span>
                    <div class="fld inline">
                      <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                        <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Position <span class="caret"></span> </button>
                        <ul role="menu" class="dropdown-menu">
                          <li role="presentation"><a href="#">position</a></li>
                          <li role="presentation"><a href="#">Price:Lowest first</a></li>
                          <li role="presentation"><a href="#">Price:HIghest first</a></li>
                          <li role="presentation"><a href="#">Product Name:A to Z</a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- /.fld --> 
                  </div>
                  <!-- /.lbl-cnt --> 
                </div>
                <!-- /.col -->
                <div class="col col-sm-6 col-md-6 no-padding hidden-sm hidden-md">
                  <div class="lbl-cnt"> <span class="lbl">Show</span>
                    <div class="fld inline">
                      <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                        <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> 1 <span class="caret"></span> </button>
                        <ul role="menu" class="dropdown-menu">
                          <li role="presentation"><a href="#">1</a></li>
                          <li role="presentation"><a href="#">2</a></li>
                          <li role="presentation"><a href="#">3</a></li>
                          <li role="presentation"><a href="#">4</a></li>
                          <li role="presentation"><a href="#">5</a></li>
                          <li role="presentation"><a href="#">6</a></li>
                          <li role="presentation"><a href="#">7</a></li>
                          <li role="presentation"><a href="#">8</a></li>
                          <li role="presentation"><a href="#">9</a></li>
                          <li role="presentation"><a href="#">10</a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- /.fld --> 
                  </div>
                  <!-- /.lbl-cnt --> 
                </div>
                <!-- /.col --> 
              </div>
              <!-- /.col -->
              <div class="col col-sm-6 col-md-4 col-xs-6 col-lg-4 text-right">
                <div class="pagination-container">
                  <ul class="list-inline list-unstyled">
                    <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                  </ul>
                  <!-- /.list-inline --> 
                </div>
                <!-- /.pagination-container --> </div>
              <!-- /.col --> 
            </div>
            <!-- /.row --> 
          </div>
          <div class="search-result-container ">
            <div id="myTabContent" class="tab-content category-list">
              <div class="tab-pane active " id="grid-container">
                <div class="category-product">
                  <div class="row">
                    @foreach ($category_by_id as $key => $product_by_id)
           
                    <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="item">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> 
                            <a href="{{URL::to('/chi-tiet-san-pham/'.$product_by_id->product_id)}}">
                              <img src="{{asset('public/upload/productImage/'.$product_by_id->product_image)}}" alt=""> 
                                <img src="{{asset('public/upload/productImage/'.$product_by_id->product_image)}}" alt=""  class="hover-image"> 
                            </a> 
                         </div>
                            <!-- /.image -->
                            
                            <div class="tag new"><span>new</span></div>
                          </div>
                          <!-- /.product-image -->
                          
                          <div class="product-info text-left">
                            <h3 class="name"><a href="{{URL::to('/chi-tiet-san-pham/'.$product_by_id->product_id)}}">{{$product_by_id->product_name}}</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> {{number_format($product_by_id->product_price)}}  VND</span> <span class="price-before-discount">$ 800</span> </div>
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
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
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
                    </div>
                                 
                    @endforeach
                    <!-- /.item -->
                  </div>
                  <!-- /.row --> 
                </div>
                <!-- /.category-product --> 
                
              </div>
              <!-- /.tab-pane -->
            
              <!-- /.tab-pane #list-container --> 
            </div>
            <!-- /.tab-content -->
            <div class="clearfix filters-container bottom-row">
              <div class="text-right">
                <div class="pagination-container">
                  <ul class="list-inline list-unstyled">
                    <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                  </ul>
                  <!-- /.list-inline --> 
                </div>
                <!-- /.pagination-container --> </div>
              <!-- /.text-right --> 
              
            </div>
            <!-- /.filters-container --> 
            
          </div>
          <!-- /.search-result-container --> 
          
        </div>
        <!-- /.col --> 
      </div>
      <!-- /.row --> 
    
    
  </div>
  <!-- /.body-content --> 

@endsection