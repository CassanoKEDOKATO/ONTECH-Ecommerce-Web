@extends('homelayout')
@section('content')
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
                               <div class="cart-quantity">
                                  <div class="quant-input">
                                     <input type="number" name="qty" min="1" value="{{$cart_content->qty}}" />
                                  </div>
                               </div>
                            </td>
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
                      
                   </table>
                   <!-- /table -->
                </div>
             </div>
             <div class="col-md-4 col-sm-12 estimate-ship-tax">
                <table class="table">
                   <thead>
                      <tr>
                         <th>
                            <span class="estimate-title">Thanh toán </span>
                         </th>
                      </tr>
                   </thead>
                   <!-- /thead -->
                   <tbody>
                      <tr>
                         <td>
                            <form action="{{URL::to('order-place')}}" method="POST">
                                {{csrf_field()}}
                            <div class="form-group">
                               <label class="info-title control-label">Phương thức thanh toán <span>*</span></label>
                               <select name="select_payment" class="form-control unicase-form-control selectpicker">
                                  <option value="0">Thanh toán khi nhận hàng</option>
                                  <option value="1">Thanh toán bằng thẻ ATM</option>
                                  <option value="2">ZaloPay</option>
                                  <option value="3">Paypal</option>
                               </select>
                            </div>
                            <div class="pull-right">
                               <button type="submit" class="btn-upper btn btn-primary">ÁP DỤNG</button>
                            </div>
                        </form>
                         </td>
                      </tr>
                   </tbody>
                </table>
             </div>
             <!-- /.cart-shopping-total -->			
          </div>
          <!-- /.shopping-cart -->
       </div>
       <!-- /.row -->
       <!-- ============================================== BRANDS CAROUSEL ============================================== -->
       <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	
    </div>
    <!-- /.container -->
 </div>

@endsection