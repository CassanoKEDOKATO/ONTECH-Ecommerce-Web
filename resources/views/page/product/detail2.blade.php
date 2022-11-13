@extends('homelayout')
@section('content')
<div class="breadcrumb">
   <div class="container">
      <div class="breadcrumb-inner">
         <ul class="list-inline list-unstyled">
            <li><a  href="{{URL::to('/')}}" >Home</a></li>
            <li><a href="#">Shop</a></li>
            <li class='active'>Detail </li>
         </ul>
      </div>
      <!-- /.breadcrumb-inner -->
   </div>
   <!-- /.container -->
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
   <div class='container'>
      <div class='row single-product'> 
         <!-- /.sidebar -->
         <div class='col-xs-12 col-sm-12 col-md-12 '>
            <div class="detail-block">
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 gallery-holder">
                     <div class="product-item-holder size-big single-product-gallery small-gallery">
                        <div id="owl-single-product">
                           <div class="single-product-gallery-item" id="slide1">
                              @foreach ($detail_product as $key => $products_img)
                              <a data-lightbox="image-1" data-title="Gallery" href="{{asset('public/upload/productImage/'.$products_img->product_image)}}">
                              <img class="img-responsive" alt="" id="wishlist_productimage{{$products_img->product_id}}" src="assets/images/blank.gif" data-echo="{{asset('public/upload/productImage/'.$products_img->product_image)}}" />
                              </a>
                              @endforeach
                           </div>
                           <div class="single-product-gallery-item" id="slide2">
                              @foreach ($detail_product as $key => $products_img)
                              <a data-lightbox="image-2" data-title="Gallery" href="{{asset('public/upload/productImage/'.$products_img->product_image)}}">
                              <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="{{asset('public/upload/productImage/'.$products_img->product_image2)}}" />
                              </a>
                              @endforeach
                           </div>
                           <!-- /.single-product-gallery-item -->
                        </div>
                        <!-- /.single-product-slider -->
                        <div class="single-product-gallery-thumbs gallery-thumbs">
                           <div id="owl-single-product-thumbnails">
                              <div class="item">
                                 @foreach ($detail_product as $key => $products_img)
                                 <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                                 <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="{{asset('public/upload/productImage/'.$products_img->product_image)}}" />
                                 </a>
                                
                                 @endforeach
                              </div>
                              <div class="item">
                                 @foreach ($detail_product as $key => $products_img)
                                 <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide2">
                                 <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="{{asset('public/upload/productImage/'.$products_img->product_image2)}}" />
                                 </a>
                                
                                 @endforeach
                             </div>
                           </div>
                           <!-- /#owl-single-product-thumbnails -->
                        </div>
                        
                        <!-- /.gallery-thumbs -->
                     </div>
                     <!-- /.single-product-gallery -->
                  </div>
                  <!-- /.gallery-holder -->     
                  <div class='col-sm-12 col-md-8 col-lg-6 product-info-block'>
                     <div class="product-info">
                        @foreach ($detail_product as $key => $detail_products)
                        <form >
                           @csrf
                        <h1 class="name"><a  id="wishlist_producturl{{$detail_products->product_id}}">{{$detail_products->product_name}}</a></h1>
                        <div class="rating-reviews m-t-20">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="pull-left">
                                    <div class="rating rateit-small"></div>
                                 </div>
                                 <div class="pull-left">
                                    <div class="reviews">
                                       <a href="#" class="lnk">(13 Reviews)</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- /.row -->		
                        </div>
                        <!-- /.rating-reviews -->
                        <div class="stock-container info-container m-t-10">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="pull-left">
                                    <div class="stock-box">
                                       <span class="label">Availability :</span>
                                    </div>
                                 </div>
                                 <div class="pull-left">
                                    <div class="stock-box">
                                       <span class="value">In Stock</span>
                                    </div>
                                 </div>
                                 
                              </div>
                           </div>
                           <!-- /.row -->	
                        </div>
                        <!-- /.stock-container -->
                        
                        <div class="description-container m-t-20">
                           {!!$detail_products->product_desc!!}
                        </div>
                        <!-- /.description-container -->
                        <div class="price-container info-container m-t-30">
                          
                           <div class="row">
                              <div class="col-sm-6 col-xs-6">
                                 <div class="price-box">
                                    <span class="price">{{number_format($detail_products->product_price)}} VND</span>
                                    <span class="price-strike">$900.00</span>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-xs-6">
                                 <div class="favorite-button m-t-5">
                                    <a  data-toggle="tooltip" data-placement="right" class="button_wishlist btn btn-primary"  id="{{$detail_products->product_id}}" onclick="add_wishlist(this.id);">
                                    <i class="fa fa-heart"></i>
                                    </a>
                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
                                    <i class="fa fa-signal"></i>
                                    </a>
                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
                                    <i class="fa fa-envelope"></i>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <!-- /.row -->
                        </div>
                        <div class="fb-share-button" data-href="{{$url_canonical}}" data-layout="button_count" 
                        data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$url_canonical}}%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                        <!-- /.price-container -->
                        
                        <div class="quantity-container info-container">
                           <div class="row">
                              <div class="add-btn">
                                 <input type="button" value="Thêm vào giỏ hàng" class="btn btn-primary add-to-cart" data-id_product="{{$detail_products->product_id}}" name="add-to-cart"/>
                                
                              </div>
                              <div class="qty">
                                 <span class="label">Số lượng :</span>
                                 <input type="number"  style="width:50px">
                              </div>
                              <div class="qty-count">
                                 <div class="cart-quantity">
                                    <div class="quant-input">
                                       <input type="hidden" value="{{$detail_products->product_id}}" class="cart_product_id_{{$detail_products->product_id}}">
                                       <input type="hidden" id="wishlist_productname{{$detail_products->product_id}}" value="{{$detail_products->product_name}}" class="cart_product_name_{{$detail_products->product_id}}">
                                       <input type="hidden" id="wishlist_productimage{{$detail_products->product_id}}" value="{{$detail_products->product_image}}" class="cart_product_image_{{$detail_products->product_id}}">
                                       <input type="hidden" id="wishlist_productprice{{$detail_products->product_id}}" value="{{($detail_products->product_price)}}" class="cart_product_price_{{$detail_products->product_id}}">
                                       <input type="hidden" value="1" class="cart_product_qty_{{$detail_products->product_id}}">
                                    </div>
                                 </div>
                              </div>
                             
                           </form>
                           </div>
                           <!-- /.row -->
                        </div>
                       
                        <!-- /.quantity-container -->
                        @endforeach
                     </div>
                     <!-- /.product-info -->
                  </div>
                  <!-- /.col-sm-7 -->
               </div>
               <!-- /.row -->
            </div>
       
				<div class="product-tabs inner-bottom-xs">
					<div class="row">
						<div class="col-sm-12 col-md-2 col-lg-2">
							<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
								<li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
								<li><a data-toggle="tab" href="#review">REVIEW</a></li>
								<li><a data-toggle="tab" href="#tags">TAGS</a></li>
							</ul><!-- /.nav-tabs #product-tabs -->
						</div>
						<div class="col-sm-12 col-md-10 col-lg-10">

							<div class="tab-content">
                                @foreach ($detail_product as $key => $detail_products) 
								<div id="description" class="tab-pane in active">
									<div class="product-tab">
										<p class="text">  {!!$detail_products->product_content!!}</p>
									</div>	
								</div><!-- /.tab-pane -->
                                @endforeach
								<div id="review" class="tab-pane">
									<div class="product-tab">
                                            <div>
                                                <div class="fb-comments" data-href="{{$url_canonical}}" data-width="" data-numposts="10"></div>			
                                            
                                             </div>						
										
							             </div><!-- /.product-tab -->
								    </div><!-- /.tab-pane -->

								<div id="tags" class="tab-pane">
									<div class="product-tag">
										
										<h4 class="title">Product Tags</h4>
										<form class="form-inline form-cnt">
											<div class="form-container">
									
												<div class="form-group">
													<label for="exampleInputTag">Add Your Tags: </label>
													<input type="email" id="exampleInputTag" class="form-control txt">
													

												</div>

												<button class="btn btn-upper btn-primary" type="submit">ADD TAGS</button>
											</div><!-- /.form-container -->
										</form><!-- /.form-cnt -->

										<form class="form-inline form-cnt">
											<div class="form-group">
												<label>&nbsp;</label>
												<span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
											</div>
										</form><!-- /.form-cnt -->

									</div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->

							</div><!-- /.tab-content -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.product-tabs -->
       
         <!-- /.col -->
         <div class="clearfix"></div>
      </div>
      <!-- /.row -->
</div>
<section class="section featured-product">
    <div class="row">
       <div class="col-lg-3">
          <h3 class="section-title">SẢN PHẨM LIÊN QUAN</h3>
          <div class="ad-imgs">
             <img class="img-responsive" src="{{asset('frontend\smallbanner\maxresdefault.jpg')}}" alt="">
             <img class="img-responsive" src="{{asset('frontend\smallbanner\gigabyte-aorus-fi32u-gaming-monitor-gaming-on.jpg')}}" alt="">
          </div>
       </div>
       <div class="col-lg-9">
          <div class="owl-carousel homepage-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
            @foreach ($related_product as $key => $lienquan)
             <div class="item item-carousel">
                <div class="products">
                   <div class="product">
                      <div class="product-image">
                         <div class="image">
                            <a href="detail.html"><img src="{{asset('public/upload/productImage/'.$lienquan->product_image)}}" alt=""></a>
                         </div>
                         <!-- /.image -->			
                         <div class="tag sale"><span>sale</span></div>
                      </div>
                      <!-- /.product-image -->
                      <div class="product-info text-left">
                         <h3 class="name"><a href="detail.html">{{$lienquan->product_name}}</a></h3>
                         <div class="rating rateit-small"></div>
                         <div class="description"></div>
                         <div class="product-price">	
                            <span class="price">
                            $650.99				</span>
                            <span class="price-before-discount">{{number_format($lienquan->product_price)}}</span>
                         </div>
                         <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                         <div class="action">
                            <ul class="list-unstyled">
                               <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>													
                                  </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                               </li>
                               <li class="lnk wishlist">
                                  <a class="add-to-cart" href="detail.html" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                  </a>
                               </li>
                               <li class="lnk">
                                  <a class="add-to-cart" href="detail.html" title="Compare">
                                  <i class="fa fa-signal"></i>
                                  </a>
                               </li>
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
          </div>
          <!-- /.home-owl-carousel -->
       </div>
    </div>
 </section>
 <!-- /.section -->
      </div>
   <!-- /.container -->
</div>

@endsection