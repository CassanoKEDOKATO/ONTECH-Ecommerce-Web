@extends('homelayout')
@section('content')
@foreach ($detail_product as $key => $detail)
    <input type="hidden" id="product_view_id" value="{{$detail->product_id)}}">
@endforeach
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
                                 <input type="number" value="1" style="width:50px">
                              </div>
                              <div class="qty-count">
                                 <div class="cart-quantity">
                                    <div class="quant-input">
                                      
                                       <input type="hidden" value="{{$detail_products->product_id}}" class="cart_product_id_{{$detail_products->product_id}}">
                                       <input type="hidden" id="wishlist_productname{{$detail_products->product_id}}" value="{{$detail_products->product_name}}" class="cart_product_name_{{$detail_products->product_id}}">
                                       <input type="hidden" id="wishlist_productimage{{$detail_products->product_id}}" value="{{$detail_products->product_image}}" class="cart_product_image_{{$detail_products->product_id}}">
                                       <input type="hidden" id="wishlist_productprice{{$detail_products->product_id}}" value="{{number_format($detail_products->product_price)}}" class="cart_product_price_{{$detail_products->product_id}}">
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
                  
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <div class="tab-content">
                        <div id="description" class="tab-pane in active">
                           @foreach ($detail_product as $key => $detail_products) 
                           <div class="product-tab">
                           <div id="content">
                              {!!$detail_products->product_content!!}
                           </div>
                           </div>
                           @endforeach
                        </div>
                      <div id="comment" class="tab-pane">
                        <div class="blog-write-comment outer-bottom-xs outer-top-xs">
                           <div class="row">
                              <div class="col-md-12">
                                 <h4>Bình luận ý kiến</h4>
                              </div>
                              <div class="fb-comments" data-href="{{$url_canonical}}" data-width="" data-numposts="10"></div>
                           </div>
                        </div>
                      </div>
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
                                 </div>
                                 <!-- /.form-container -->
                              </form>
                              <!-- /.form-cnt -->
                              <form class="form-inline form-cnt">
                                 <div class="form-group">
                                    <label>&nbsp;</label>
                                    <span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
                                 </div>
                              </form>
                              <!-- /.form-cnt -->
                           </div>
                           <!-- /.product-tab -->
                        </div>
                        <!-- /.tab-pane -->
                     </div>
                     <!-- /.tab-content -->
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.product-tabs -->
         <div>
            <div class="fb-comments" data-href="{{$url_canonical}}" data-width="" data-numposts="10"></div>			
        
             
           
         </div>
         <!-- /.col -->
         <div class="clearfix"></div>
      </div>
      <!-- /.row -->
 
     
   </div>
   <!-- /.container -->
</div>

@endsection