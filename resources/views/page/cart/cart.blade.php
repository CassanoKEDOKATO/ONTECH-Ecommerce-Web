@extends('homelayout')
@section('content')
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
   <div class="container">
      <div class="breadcrumb-inner">
         <ul class="list-inline list-unstyled">
            <li><a  href="{{URL::to('/')}}" >Home</a></li>
            <li class='active'>Shopping Cart</li>
         </ul>
      </div>
      <!-- /.breadcrumb-inner -->
   </div>
   <!-- /.container -->
</div>
<div class="alert alert-success" role="alert">
   <?php 
   $message = Session::get('message');
if ($message){
     echo '<p style="color:rgb(75, 226, 75)"> '. $message.'</p>';
     $message = Session::put('message',null);
}    
  ?>  
 </div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
   <div class="container">
      <div class="row ">
         <div class="shopping-cart">
            <div class="shopping-cart-table ">
               <div class="table-responsive">
                  <table class="table">
                     <thead>
                        <tr>
                           <th class="cart-romove item">Xoá</th>
                           <th class="cart-description item">Ảnh</th>
                           <th class="cart-product-name item">Tên sản phẩm</th>
                           <th class="cart-qty item">Số lượng</th>
                           <th class="cart-edit item">Chỉnh sửa</th>
                           <th class="cart-sub-total item">Thành tiền</th>
                           <th class="cart-total last-item">Tổng tiền</th>
                        </tr>
                     </thead>
                     <!-- /thead -->
                     <tbody>
                        @foreach (Cart::content() as $cart_content)
                        <tr>
                           <td class="romove-item"><a href="{{URL::to('/delete-cart/'.$cart_content->rowId)}}" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                           <td class="cart-image">
                              <a class="entry-thumbnail" href="">
                              <img src="{{asset('public/upload/productImage/'.$cart_content->options->image)}}" alt="">
                              </a>
                           </td>
                           <td class="cart-product-name-info">
                              <h4 class='cart-product-description'><a href="detail.html">{{$cart_content->name}}</a></h4>
                              <div class="row">
                                 <div class="col-sm-12">
                                    <div class="rating rateit-small"></div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="reviews">
                                       (06 Reviews)
                                    </div>
                                 </div>
                              </div>
                              <!-- /.row -->
                              <div class="cart-product-info">
                              </div>
                           </td>
                           <td class="cart-product-quantity">
                              <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                 {{ csrf_field() }}
                              <div class="cart-quantity">
                                 <div class="quant-input">
                                    <input type="text" name="qty" value="{{$cart_content->qty}}" />
                                    <input type="hidden" value="{{$cart_content->rowId}}" name="rowId_cart" class="form-control">
                                 </div>
                              </div>
                              
                           </td>
                           <td class="cart-product-edit"><input type="submit" value="Cập nhật" name="update_qty" class="btn btn-info btn-sm"></td>
                        </form>
                           <td class="cart-product-sub-total"><span class="cart-sub-total-price">{{number_format($cart_content->price)}} VND</span></td>
                           <td class="cart-product-grand-total"><span class="cart-grand-total-price">
                              <?php 
                                 $subtotal = $cart_content->price * $cart_content->qty;
                                 echo number_format($subtotal),' VND';
                                    ?>
                              </span>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                     <!-- /tbody -->
                     <tfoot>
                        <tr>
                           <td colspan="7">
                              <div class="shopping-cart-btn">
                                 <span class="">
                                 <a href="{{URL::to('/')}}" class="btn btn-upper btn-primary outer-left-xs">Tiếp tục mua sắm</a>
                                 </span>
                              </div>
                              <!-- /.shopping-cart-btn -->
                           </td>
                        </tr>
                     </tfoot>
                  </table>
                  <hr >
                  <!-- /table -->
               </div>
            </div>
            <!-- /.shopping-cart-table -->				
            <div class="col-md-4 col-sm-12 estimate-ship-tax">
              
            </div>
            <!-- /.estimate-ship-tax -->
            <div class="col-md-4 col-sm-12 estimate-ship-tax">
               <table class="table">
                  <thead>
                     <tr>
                        <th>
                           <span class="estimate-title">Giảm giá</span>
                           <p>Nhập mã giảm giá Coupon</p>
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     @if (Session::get('cart'))
                     <tr>
                        <td>
                           <form action="{{URL::to('save-coupon')}}" method="POST">
                              {{@csrf_field()}}
                           <div class="form-group">
                              <input type="text" name="coupon" class="form-control unicase-form-control text-input" placeholder="Mã giảm giá">
                           </div>
                           <div class="clearfix pull-right">
                              <button type="submit" class="btn-upper btn btn-primary">Mã giảm giá</button>
                           </div>
                        </form>
                        </td>
                     </tr>
                     @endif
                  </tbody>
                  <!-- /tbody -->
               </table>
               <!-- /table -->
            </div>
            <!-- /.estimate-ship-tax -->
            <div class="col-md-4 col-sm-12 cart-shopping-total">
               <table class="table">
                  <thead>
                     <tr>
                        <th>
                           <div>
                              Vận chuyển <span class="inner-left-md">{{(Cart::discount())}}</span>
                           </div>
                           <div>
                            
                              <span class="inner-left-md">
                                
                              </span>
                              
                           </div>
                           <div class="cart-grand-total">
                             Tổng tiền : {{Cart::priceTotal()}}
                           </div>
                        </th>
                     </tr>
                  </thead>
                  <!-- /thead -->
                  <tbody>
                     <tr>
                        <td>
                           <div class="cart-checkout-btn pull-right">
                              <?php
                              $customer_id =Session::get('customer_id');
                              $shipping_id =Session::get('shipping_id');
                              if ($customer_id!=NULL && $shipping_id!=NULL) {
                              ?>
                            <a type="submit" href="{{URL::to('payment')}}" class="btn btn-primary checkout-btn">THANH TOÁN</a>
                             <?php
                              }  else{
                              ?>
                                <a type="submit" href="{{URL::to('checkout')}}" class="btn btn-primary checkout-btn">THANH TOÁN</a>
                              <?php 
                              }
                              ?>
                              
                              <span class="">Checkout with multiples address!</span>
                           </div>
                        </td>
                     </tr>
                  </tbody>
                  <!-- /tbody -->
               </table>
               <!-- /table -->
            </div>
            <!-- /.cart-shopping-total -->			
         </div>
         <!-- /.shopping-cart -->
      </div>
   </div>
   <!-- /.container -->
</div>

@endsection
