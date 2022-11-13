<!DOCTYPE html>
<html lang="en">
   <head>

      <link  rel="canonical" href="{{$url_canonical}}" />
{{-- 
      <meta property="og:image" content="{{$image_og}}" />  
      <meta property="og:site_name" content="{{$url_canonical}}" />
      <meta property="og:url" content="{{$url_canonical}}" />
      <meta property="og:type" content="website" />   --}}
    
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="keywords" content="MediaCenter, Template, eCommerce">
      <meta name="robots" content="all">
      <link rel="icon"  href="{{asset('frontend\assets\images\default-monochrome-black.svg')}}">
      <title>ONTECH-PC,Laptop..</title>
      <!-- Bootstrap Core CSS -->
      <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
      <!-- Customizable CSS -->
      <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/blue.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.transitions.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.cs')}}s">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/rateit.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap-select.min.css')}}">

      <link href="{{asset('frontend/assets/css/sweetalert.css')}}" rel="stylesheet">
      <!-- Icons/Glyphs -->
      <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.css')}}">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

      
   </head>
   <body class="cnt-home">
     
      <!-- ============================================== HEADER ============================================== -->
      <header class="header-style-1">
         <!-- ============================================== TOP MENU ============================================== -->
         <div class="top-bar animate-dropdown">
            <div class="container">
               <div class="header-top-inner">
                  <div class="cnt-account">
                     <ul class="list-unstyled">
                        
                          <li class="myaccount"><a href="{{URL::to('login-checkout')}}"><span><?php $customer_name = Session::get('customer_name'); if($customer_name){ echo'<p>'.$customer_name.'</p>'; }?></span></a></li>
                        <?php
                        $customer_id =Session::get('customer_id');
                        $shipping_id =Session::get('shipping_id');
                        if ($customer_id!=NULL && $shipping_id!=NULL) {
                        ?>
                      <li class="header_cart hidden-xs"><a href="{{URL::to('payment')}}"><span>Thanh toán</span></a></li>
                       <?php
                        }  else{
                        ?>
                          <li class="header_cart hidden-xs"><a href="{{URL::to('login-checkout')}}"><span>Thanh toán</span></a></li>
                        <?php 
                        }
                        ?>
                        <li class="check"><a href="{{URL::to('gio-hang')}}"><span>Giỏ hàng</span></a></li>
                         <?php
                         $customer_id =Session::get('customer_id');
                         if ($customer_id!=NULL) {
                         ?>
                        <li class="login"><a href="{{URL::to('logout-checkout')}}"><span>Đăng xuất</span></a></li>
                        <?php
                         }  else{
                         ?>
                          <li class="login"><a href="{{URL::to('login-checkout')}}"><span>Đăng nhập</span></a></li>
                         <?php 
                         }
                         ?>
                     </ul>
                  </div>
                  <!-- /.cnt-account -->
                  <div class="cnt-block">
                     <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small lang">
                           <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a>
                           <ul class="dropdown-menu">
                              <li><a href="#">English</a></li>
                              <li><a href="#">Vietnamese</a></li>
                           </ul>
                        </li>
                     </ul>
                     <!-- /.list-unstyled --> 
                  </div>
                  <!-- /.cnt-cart -->
                  <div class="clearfix"></div>
               </div>
               <!-- /.header-top-inner --> 
            </div>
            <!-- /.container --> 
         </div>
         <!-- /.header-top --> 
         <!-- ============================================== TOP MENU : END ============================================== -->
         <div class="main-header">
            <div class="container">
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                     <!-- ============================================================= LOGO ============================================================= -->
                     <div class="logo"> <a  href="{{URL::to('/')}}" > <img src="{{asset('frontend\assets\images\default-monochrome-white.svg')}}" alt="logo" width="250px" height="50"> </a> </div>
                     <!-- /.logo --> 
                     <!-- ============================================================= LOGO : END ============================================================= --> 
                  </div>
                  <!-- /.logo-holder -->
                  <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder">
                     <!-- /.contact-row --> 
                     <!-- ============================================================= SEARCH AREA ============================================================= -->
                     <div class="search-area">
                        <form action="{{URL::to('/tim-kiem')}}" method="POST" autocomplete="off">
                           <div class="control-group">
                              <ul class="categories-filter animate-dropdown">
                                 <li class="dropdown">
                                    <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu" >
                                       <li class="menu-header">Computer</li>
                                       <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
                                       <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
                                       <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
                                       <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>
                                    </ul>
                                 </li>
                              </ul>
                              {{csrf_field()}}
                              <input type="text" name="keyword" id="keywords" value="{{old('keyword')}} "class="search-field" placeholder="Nhập tên sản phẩm cần tìm ..." />
                            
                              <a type="submit" class="search-button"  ></a> 
                              <div id="search_ajax"></div>
                           </div>
                        </form>
                     </div>
                     <!-- /.search-area --> 
                     <!-- ============================================================= SEARCH AREA : END ============================================================= --> 
                  </div>
                  <!-- /.top-search-holder -->
                  <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 animate-dropdown top-cart-row">
                     <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
                   
                     <div class="dropdown dropdown-cart">
                        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                           <div class="items-cart-inner">
                              <div class="basket">
                                 <div class="basket-item-count"><span class="count">1</span></div>
                                 <div class="total-price-basket"> <span class="lbl">Giỏ hàng</span> <span class="value"></span> </div>
                                
                              </div>
                           </div>
                           
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              @if(Session::get('cart')==true)
                              @php
                                    $total = 0;
                              @endphp
                      
                              @foreach(Session::get('cart') as $key => $cart)
                                 @php
                                    $subtotal = $cart['product_price']*$cart['product_qty'];
                                    $total+=$subtotal;
                                 @endphp
                              <div class="cart-item product-summary">
                                 <div class="row">
                                    <div class="col-xs-4">
                                       <div class="image"> <a href=""><img src="{{asset('public/upload/productImage/'.$cart['product_image'])}}" alt=""></a> </div>
                                    </div>
                                    <div class="col-xs-7">
                                       <h4 class="name"><a href="">{{$cart['product_name']}}</a></h4>
                                       <div class="price">{{number_format($cart['product_price'],0,',','.')}} VND</div>
                                    </div>
                                    <div class="col-xs-1 action"> <a href="{{URL::to('/delete-cart/')}}"><i class="fa fa-trash"></i></a> </div>
                                 </div>
                                 
                              </div>
                              @endforeach
                              @else 
                              @php 
                              echo 'Làm ơn thêm sản phẩm vào giỏ hàng';
                              @endphp
                              @endif
                              <!-- /.cart-item -->
                              <div class="clearfix"></div>
                              <hr>
                              <div class="clearfix cart-total">
                                 {{-- <div class="pull-right"> <span class="text"> Tổng tiền :{{number_format($total)}}</span><span class='price'></span> </div> --}}
                                 <div class="clearfix"></div>
                                 <a href="{{URL::to('gio-hang')}}" class="btn btn-upper btn-primary btn-block m-t-20">Thanh toán</a> 
                              </div>
                              <!-- /.cart-total--> 
                           </li>
                        </ul>
                        
                       
                        <!-- /.dropdown-menu--> 
                     </div>
                     <!-- /.dropdown-cart --> 
                     <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> 
                  </div>
                  <!-- /.top-cart-row --> 
               </div>
               <!-- /.row --> 
            </div>
            <!-- /.container --> 
         </div>
         <!-- /.main-header --> 
         <!-- ============================================== NAVBAR ============================================== -->
         <div class="header-nav animate-dropdown">
            <div class="container">
               <div class="yamm navbar navbar-default" role="navigation">
                  <div class="navbar-header">
                     <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
                     <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                  </div>
                  <div class="nav-bg-class">
                     <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                           <ul class="nav navbar-nav">
                              <li class="active dropdown"> <a  href="{{URL::to('/')}}">Home</a> </li>
                              <li class="dropdown yamm mega-menu">
                                 <a href="" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Danh mục sản phẩm</a>
                                 <ul class="dropdown-menu container">
                                    <li>
                                       <div class="yamm-content ">
                                          <div class="row">
                                             @foreach ($category as $key => $value_cate)
                                             <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                <h2 class="title"><a href="{{URL::to('/danh-muc-san-pham/'.$value_cate->category_id)}}">{{$value_cate->category_name}}</a></h2>
                                                <ul class="links">
                                                </ul>
                                             </div>
                                             <!-- /.col -->
                                             <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img class="img-responsive" src="{{asset('public/upload/categoryImage/'.$value_cate->category_image)}}" alt="" width="100" height="100"> </div>
                                             @endforeach
                                             <!-- /.yamm-content --> 
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </li>
                              <li class="dropdown mega-menu">
                                 <a href="{{URL::to('/blog-list')}}"  data-hover="dropdown" class="dropdown-toggle">Thông tin công nghệ <span class="menu-label hot-menu hidden-xs">hot</span> </a>
                                 
                              </li>
                              <li class="dropdown hidden-sm"> <a href="category.html">Xây dựng cấu hình<span class="menu-label new-menu hidden-xs">new</span> </a> </li>
                              <li class="dropdown hidden-sm"> <a href="category.html">Khuyến mãi</a> </li>
                              <li class="dropdown"> <a href="contact.html">Sản phẩm yêu thích</a> </li>
                              <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">ContactUs</a>
                                 <ul class="dropdown-menu pages">
                                    <li>
                                       <div class="yamm-content">
                                          <div class="row">
                                             <div class="col-xs-12 col-menu">
                                                <ul class="links">
                                                   <li><a href="home.html">Home</a></li>
                                                   <li><a href="category.html">Category</a></li>
                                                   <li><a href="detail.html">Detail</a></li>
                                                   <li><a href="shopping-cart.html">Shopping Cart Summary</a></li>
                                                   <li><a href="checkout.html">Checkout</a></li>
                                                   <li><a href="blog.html">Blog</a></li>
                                                   <li><a href="blog-details.html">Blog Detail</a></li>
                                                   <li><a href="contact.html">Contact</a></li>
                                                   <li><a href="sign-in.html">Sign In</a></li>
                                                   <li><a href="my-wishlist.html">Wishlist</a></li>
                                                   <li><a href="terms-conditions.html">Terms and Condition</a></li>
                                                   <li><a href="track-orders.html">Track Orders</a></li>
                                                   <li><a href="product-comparison.html">Product-Comparison</a></li>
                                                   <li><a href="faq.html">FAQ</a></li>
                                                   <li><a href="404.html">404</a></li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </li>
                              <li class="dropdown  navbar-right special-menu"> <a href="#">Get 30% off on selected items</a> </li>
                           </ul>
                           <!-- /.navbar-nav -->
                           <div class="clearfix"></div>
                        </div>
                        <!-- /.nav-outer --> 
                     </div>
                     <!-- /.navbar-collapse --> 
                  </div>
                  <!-- /.nav-bg-class --> 
               </div>
               <!-- /.navbar-default --> 
            </div>
            <!-- /.container-class --> 
         </div>
         <!-- /.header-nav --> 
         <!-- ============================================== NAVBAR : END ============================================== --> 
      </header>
      @yield('content')
      <!-- ============================================== INFO BOXES ============================================== -->
     
      <!-- /.info-boxes --> 
      <!-- ============================================== INFO BOXES : END ============================================== --> 
      <!-- ============================================================= FOOTER ============================================================= -->
      <footer id="footer" class="footer color-bg">
         <div class="footer-bottom">
            <div class="container">
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-3">
                     <div class="address-block">
                        <!-- /.module-heading -->
                        <div class="module-body">
                           <ul class="toggle-footer" style="">
                              <li class="media">
                                 <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                                 <div class="media-body">
                                    <p>Trần Đại Nghĩa ,Ngũ Hành Sơn ,TP.Đà Nẵng </p>
                                 </div>
                              </li>
                              <li class="media">
                                 <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                                 <div class="media-body">
                                    <p> 0826206225</p>
                                 </div>
                              </li>
                              <li class="media">
                                 <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                                 <div class="media-body"> <span><a href="#">doanweb@vku.udn.vn</a></span> </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!-- /.module-body --> 
                  </div>
                  <!-- /.col -->
                  <div class="col-xs-12 col-sm-6 col-md-3">
                     <div class="module-heading">
                        <h4 class="module-title">Customer Service</h4>
                     </div>
                     <!-- /.module-heading -->
                     <div class="module-body">
                        <ul class='list-unstyled'>
                           <li class="first"><a href="{{URL::to('login-checkout')}}" title="Contact us">My Account</a></li>
                           <li><a href="{{URL::to('login-auth')}}" title="About us">Login Admin</a></li>
                           <li><a href="#" title="faq">FAQ</a></li>
                           <li><a href="#" title="Popular Searches">Specials</a></li>
                           <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>
                        </ul>
                     </div>
                     <!-- /.module-body --> 
                  </div>
                  <!-- /.col -->
                  <div class="col-xs-12 col-sm-6 col-md-3">
                     <div class="module-heading">
                        <h4 class="module-title">Corporation</h4>
                     </div>
                     <!-- /.module-heading -->
                     <div class="module-body">
                        <ul class='list-unstyled'>
                           <li class="first"><a title="Your Account" href="#">About us</a></li>
                           <li><a title="Information" href="#">Customer Service</a></li>
                           <li><a title="Addresses" href="#">Company</a></li>
                           <li><a title="Addresses" href="#">Investor Relations</a></li>
                           <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
                        </ul>
                     </div>
                     <!-- /.module-body --> 
                  </div>
                  <!-- /.col -->
                  <div class="col-xs-12 col-sm-6 col-md-3">
                     <div class="module-heading">
                        <h4 class="module-title">Why Choose Us</h4>
                     </div>
                     <!-- /.module-heading -->
                     <div class="module-body">
                        <ul class='list-unstyled'>
                           <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                           <li><a href="#" title="Blog">Blog</a></li>
                           <li><a href="#" title="Company">Company</a></li>
                           <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                           <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
                        </ul>
                     </div>
                     <!-- /.module-body --> 
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright-bar">
            <div class="container">
               <div class="col-xs-12 col-sm-4 no-padding social">
                  <ul class="link">
                     <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
                     <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
                     <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
                     <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
                     <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li>
                     <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
                     <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
                  </ul>
               </div>
               <div class="col-xs-12 col-sm-4 no-padding">
                  <div class="clearfix payment-methods">
                     <ul>
                        <li><img src="{{asset('frontend/assets/images/payments/1.pn')}}g" alt=""></li>
                        <li><img src="{{asset('frontend/assets/images/payments/2.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/images/payments/3.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/images/payments/4.png')}}" alt=""></li>
                        <li><img src="{{asset('frontend/assets/images/payments/5.png')}} alt=""></li>
                     </ul>
                  </div>
                  <!-- /.payment-methods --> 
               </div>
            </div>
         </div>
      </footer>
      <!-- ============================================================= FOOTER : END============================================================= --> 
      <!-- For demo purposes – can be removed on production --> 
      <!-- For demo purposes – can be removed on production : End --> 
      <!-- JavaScripts placed at the end of the document so the pages load faster --> 
      <script src="{{asset('frontend/assets/js/jquery-1.11.1.min.js')}}"></script> 
      <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script> 
      <script src="{{asset('frontend/assets/js/bootstrap-hover-dropdown.min.js')}}"></script> 
      <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script> 
      <script src="{{asset('frontend/assets/js/echo.min.js')}}"></script> 
      <script src="{{asset('frontend/assets/js/jquery.easing-1.3.min.js')}}"></script> 
      <script src="{{asset('frontend/assets/js/bootstrap-slider.min.js')}}"></script> 
      <script src="{{asset('frontend/assets/js/jquery.rateit.min.js')}}"></script> 
      <script src="{{asset('frontend/assets/js/lightbox.min.js')}}"></script> 
      <script src="{{asset('frontend/assets/js/bootstrap-select.min.js')}}"></script> 
      <script src="{{asset('frontend/assets/js/wow.min.js')}}"></script> 
      <script src="{{asset('frontend/assets/js/scripts.js')}}"></script>
      <script >
         <div id="fb-root"></div>
         <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="Go3QQBud"></script> 
        </script>
      
{{-- ajaxcart --}}
<script type="text/javascript">

   $(document).ready(function(){
     $('.send_order').click(function(){
         swal({
           title: "Xác nhận đơn hàng",
           text: "Đơn hàng sẽ không được hoàn trả khi đặt,bạn có muốn đặt không?",
           type: "warning",
           showCancelButton: true,
           confirmButtonClass: "btn-danger",
           confirmButtonText: "Cảm ơn, Mua hàng",

             cancelButtonText: "Đóng,chưa mua",
             closeOnConfirm: false,
             closeOnCancel: false
         },
         function(isConfirm){
              if (isConfirm) {
                 var shipping_email = $('.shipping_email').val();
                 var shipping_name = $('.shipping_name').val();
                 var shipping_address = $('.shipping_address').val();
                 var shipping_phone = $('.shipping_phone').val();
                 var shipping_notes = $('.shipping_notes').val();
                 var shipping_method = $('.payment_select').val();
                 var order_fee = $('.order_fee').val();
                 var order_coupon = $('.order_coupon').val();
                 var _token = $('input[name="_token"]').val();

                 $.ajax({
                     url: '{{url('/confirm-order')}}',
                     method: 'POST',
                     data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token:_token,order_fee:order_fee,order_coupon:order_coupon,shipping_method:shipping_method},
                     success:function(){
                        swal("Đơn hàng", "Đơn hàng của bạn đã được gửi thành công", "success");
                     }
                 });

                 window.setTimeout(function(){ 
                     location.reload();
                 } ,300000);

               } else {
                 swal("Đóng", "Đơn hàng chưa được gửi, làm ơn hoàn tất đơn hàng", "error");

               }
       
         });

        
     });
 });


</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{asset('frontend/assets/js/sweetalert.min.js')}}"></script>
<script type="text/javascript">
   $(document).ready(function(){
       $('.add-to-cart').click(function(){

           var id = $(this).data('id_product');
           // alert(id);
           var cart_product_id = $('.cart_product_id_' + id).val();
           var cart_product_name = $('.cart_product_name_' + id).val();
           var cart_product_image = $('.cart_product_image_' + id).val();
           var cart_product_price = $('.cart_product_price_' + id).val();
           var cart_product_qty = $('.cart_product_qty_' + id).val();
           var _token = $('input[name="_token"]').val();
           $.ajax({
               url: '{{url('/add-cart-ajax')}}',
               method: 'POST',
               data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
               success:function(){

                  swal({
                                title: "Đã thêm sản phẩm vào giỏ hàng",
                                text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                showCancelButton: true,
                                cancelButtonText: "Xem tiếp",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Đi đến giỏ hàng",
                                closeOnConfirm: false
                            },
                       function() {
                           window.location.href = '{{url('/gio-hang')}}';
                       });

               }

           });
       });
   });
</script>
<div id="fb-root">
</div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="sqPmIObf">
</script>
<script type="text/javascript">
   $(document).ready(function(){
      $('#sort').on('change', function(){
         var url =$(this).val();
         if(url)
         {
            window.location =url
         }
         return false;
      });
   });
</script>


<script type="text/javascript">
  function view(){
    if(localStorage.getItem('data')!=null){
      var data = JSON.parse(localStorage.getItem('data'));
      data.reverse();
      document.getElementById('row_wishlist').style.overflow = 'scroll';
      document.getElementById('row_wishlist').style.height = '200px';
      for(var i=0; i<data.length; i++){
         var name = data[i].name;
         var price = data[i].price;
         var image = data[i].image;
         var url = data[i].url;
         // $("#row_wishlist").append('<h1>'+name+'</h1>')
         // $("#row_wishlist").append('<div class="row" style="margin:10px 0"><div class="col-md-4"><img scr="'+new_Item.image+'" width="100%"> <h4>'+new_Item.name+'</h4><h4>'+new_Item.price+'</h4> <a herf="'+new_Item.url+'">Dathang</a> </div></div>')
         $("#row_wishlist").append('<div class="item"><div class="products special-product"> <div class="product">  <div class="product-micro"><div class="row product-micro-row"> <div class="col col-xs-5"><div class="product-image">  <div class="image"> <a href="'+url+'"> <img src="'+image+'" alt=""> </a> </div> </div>   </div> <div class="col col-xs-7"><div class="product-info">  <h3 class="name">'+name+'<a href="'+url+'"></a></h3> <div class="rating rateit-small"></div>  <div class="product-price"> <span class="price"> '+price+' </span> </div> </div> </div> </div> </div></div> </div></div>');
      }
    }
  }
  view();
   function add_wishlist(clicked_id){
      var id =clicked_id;
      var name = document.getElementById('wishlist_productname'+id).value;
      var price = document.getElementById('wishlist_productprice'+id).value;
      var image = document.getElementById('wishlist_productimage'+id).src;
      var url = document.getElementById('wishlist_producturl'+id).href;
      alert('Đã thêm sản phẩm yêu thích')
      var new_Item = {
         'url' : url,
         'id' : id,
         'name' : name ,
         'price' : price ,
         'image' : image 

      }
      if(localStorage.getItem('data') == null){
         localStorage.setItem('data' ,'[]');
      }
      var old_data = JSON.parse(localStorage.getItem('data'));
      var matches  = $.grep(old_data,function(obj){
         return obj.id == id;
      })
       if(matches.length){
         alert('san pham da yeu thich , ko the them')
       }else{
         old_data.push(new_Item);
         $("#row_wishlist").append('<div class="row" style="margin:10px 0"><div class="col-md-4"><img scr="'+new_Item.image+'" width="100%"> <h4>'+new_Item.name+'</h4><h4>'+new_Item.price+'</h4> <a herf="'+new_Item.url+'">Dathang</a> </div></div>')
         // $("#row_wishlist").append(' <div class="item"><div class="products special-product"> <div class="product">  <div class="product-micro"><div class="row product-micro-row"> <div class="col col-xs-5"><div class="product-image">  <div class="image"> <a href="'+new_Item.url+'"> <img src="'+new_Item.image+'" alt=""> </a> </div> </div>   </div> <div class="col col-xs-7"><div class="product-info">  <h3 class="name">'+new_Item.name+'<a href="'+new_Item.url+'"></a></h3> <div class="rating rateit-small"></div>  <div class="product-price"> <span class="price"> '+new_Item.price+' </span> </div> </div> </div> </div> </div></div> </div></div>');
       }
       localStorage.setItem('data',JSON.stringify(old_data));
   }
</script>
<script type="text/javascript">
   function viewed(){
     if(localStorage.getItem('viewed')!=null){
       var data = JSON.parse(localStorage.getItem('viewed'));
       data.reverse();
       document.getElementById('row_viewed').style.overflow = 'scroll';
       document.getElementById('row_viewed').style.height = '200px';
       for(var i=0; i<data.length; i++){
          var name = data[i].name;
          var price = data[i].price;
          var image = data[i].image;
          var url = data[i].url;
         
          $("#row_viewed").append('<div class="item"><div class="products special-product"> <div class="product">  <div class="product-micro"><div class="row product-micro-row"> <div class="col col-xs-5"><div class="product-image">  <div class="image"> <a href="'+url+'"> <img src="'+image+'" alt=""> </a> </div> </div>   </div> <div class="col col-xs-7"><div class="product-info">  <h3 class="name">'+name+'<a href="'+url+'"></a></h3> <div class="rating rateit-small"></div>  <div class="product-price"> <span class="price">'+price+'</span> </div> </div> </div> </div> </div></div> </div></div>');
       }
     }
   }
   viewed();
    function sp_daxem(clicked_id){
      var id_product = $('#product_view_id').val();
      if(id_product != undefined){
       var name = document.getElementById('viewed_productname'+id).value;
       var price = document.getElementById('viewed_productprice'+id).value;
       var image = document.getElementById('viewed_productimage'+id).value;
       var url = document.getElementById('viewed_producturl'+id).value;
       alert('Đã thêm sản phẩm yêu thích')
       var new_Item = {
          'url' : url,
          'id' : id,
          'name' : name ,
          'price' : price ,
          'image' : image 
 
       }
       if(localStorage.getItem('viewed') == null){
          localStorage.setItem('viewed' ,'[]');
       }
       var old_data = JSON.parse(localStorage.getItem('viewed'));
       var matches  = $.grep(old_data,function(obj){
          return obj.id == id;
       })
        if(matches.length){
          alert('san pham da yeu thich , ko the them')
        }else{
          old_data.push(new_Item);
          $("#row_viewed").append('<div class="row" style="margin:10px 0"><div class="col-md-4"><img scr="'+new_Item.image+'" width="100%"> <h4>'+new_Item.name+'</h4><h4>'+new_Item.price+'</h4> <a herf="'+new_Item.url+'">Dathang</a> </div></div>')
          // $("#row_wishlist").append(' <div class="item"><div class="products special-product"> <div class="product">  <div class="product-micro"><div class="row product-micro-row"> <div class="col col-xs-5"><div class="product-image">  <div class="image"> <a href="'+new_Item.url+'"> <img src="'+new_Item.image+'" alt=""> </a> </div> </div>   </div> <div class="col col-xs-7"><div class="product-info">  <h3 class="name">'+new_Item.name+'<a href="'+new_Item.url+'"></a></h3> <div class="rating rateit-small"></div>  <div class="product-price"> <span class="price"> '+new_Item.price+' </span> </div> </div> </div> </div> </div></div> </div></div>');
        }
        localStorage.setItem('viewed',JSON.stringify(old_data));
    }
   }
 </script>

<script type="text/javascript">
$('#keywords').keyup(function(){
   var query =$(this).val();
   if(query != '')
   {
      var _token =$('input[name="_token"]').val();
      $.ajax({
         url:"{{url('/autocomplete-ajax')}}",
         method:"POST",
         data:{query:query,_token:_token},
         success:function (data) {
            $('#search_ajax').fadeIn();
            $('#search_ajax').html(data);
         }
      });
      
   }else{
      $('#search_ajax').fadeOut();
   }
});
$(document).on('click', 'li_search_ajax',function(){
   $('#keywords').val($(this).text());
   $('#search_ajax').fadeOut();
});

</script>
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "108574702071011");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v15.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html>