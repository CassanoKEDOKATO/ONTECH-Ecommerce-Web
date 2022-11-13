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
                        @if(Session::get('cart')==true)
                        @php
                        $total = 0;
                        @endphp
                        @foreach(Session::get('cart') as $key => $cart)
                       
                        @php
                        $subtotal = $cart['product_price']*$cart['product_qty'];
                        $total+=$subtotal;
                        // dd( $cart['product_price']*$cart['product_qty'])
                        @endphp
                        <tr>
                           <td class="romove-item"><a href="{{url('/del-product/'.$cart['session_id'])}}"" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                           <td class="cart-image">
                              <a class="entry-thumbnail" href="">
                              <img src="{{asset('public/upload/productImage/'.$cart['product_image'])}}" alt="">
                              </a>
                           </td>
                           <td class="cart-product-name-info">
                              <h4 class='cart-product-description'><a href="detail.html">{{$cart['product_name']}}</a></h4>
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
                              <form action="{{URL::to('/update-cart')}}" method="POST">
                                 {{ csrf_field() }}
                                 <div class="cart-quantity">
                                    <div class="quant-input">
                                       <input class="cart_quantity" type="number" min="1" name="cart_qty[{{$cart['session_id']}}]" value="{{$cart['product_qty']}}"  >
                                    </div>
                                 </div>
                           </td>
                           <td><input type="submit" value="Cập nhật giỏ hàng" name="update_qty" class="check_out btn btn-info btn-sm"></td>
                           </form>
                           <td class="cart-product-sub-total"><span class="cart-sub-total-price">{{number_format($cart['product_price'],0,',','.')}} VND</span></td>
                           <td class="cart-product-grand-total"><span class="cart-grand-total-price">
                              {{number_format($subtotal,0,',','.')}}đ
                              </span>
                           </td>
                        </tr> 
                        @endforeach
                        @else 
                        <tr>
                           <td colspan="7" style="text-align: center; font-size:16px">
                              
                                 @php 
                                 echo 'Làm ơn thêm sản phẩm vào giỏ hàng';
                                 @endphp
                              
                           </td>
                        </tr>
                      @endif
                     </tbody>
                     <!-- /tbody -->
                     <tfoot>
                        <tr>
                           <td colspan="7">
                              <div class="shopping-cart-btn">
                                 <span class="">
                                    <a class="btn btn-info check_out" href="{{url('/del-all-product')}}">Xóa tất cả</a>
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
                           <form action="{{URL::to('/check-coupon')}}" method="POST">
                              @csrf
                              <div class="form-group">
                                 <input type="text" name="coupon" class="form-control unicase-form-control text-input" placeholder="Mã giảm giá">
                              </div>
                              <div class="clearfix pull-right">
                                 @if(Session::get('coupon'))
                                 <a class="btn btn-danger check_out" href="{{url('/unset-coupon')}}">Xóa mã khuyến mãi</a>
                                 @endif
                                 <input type="submit" class="btn btn-success check_coupon" name="check_coupon" value="Tính mã giảm giá">
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
                            
                           </div>
                           <div>
                              <span class="inner-left-md">
                              </span>
                           </div>
                           @if(Session::get('cart')==true)
                              @php
                              $total = 0;
                              @endphp
                           <div class="cart-grand-total">
                              @foreach(Session::get('cart') as $key => $cart)
                              @php
                                 $subtotal = $cart['product_price']*$cart['product_qty'];
                                 $total+=$subtotal;
                              @endphp
                              Tổng tiền : {{number_format($total,0,',','.')}}
                              @endforeach
                              @if(Session::get('coupon'))
                              <li>
                                 @foreach(Session::get('coupon') as $key => $cou)
                                 @if($cou['coupon_condition']==1)
                                 <h5>Mã giảm : {{$cou['coupon_number']}} %</h5>
                                 <p>
                                    @php 
                                    $total_coupon = ($total*$cou['coupon_number'])/100;
                                    echo '
                                 <h5>
                              <li>Tổng giảm:'.number_format($total_coupon,0,',','.').'đ</li></h5>';
                              @endphp
                              </p>
                              <p>
                              <li>Tổng đã giảm :{{number_format($total-$total_coupon,0,',','.')}}đ</li>
                              </p>
                              @elseif($cou['coupon_condition']==2)
                              Mã giảm : {{number_format($cou['coupon_number'],0,',','.')}} k
                              <p>
                                 @php 
                                 $total_coupon = $total - $cou['coupon_number'];
                                 @endphp
                              </p>
                              <p>
                              <li>Tổng đã giảm :{{number_format($total_coupon,0,',','.')}}đ</li>
                              </p>
                              @endif
                              @endforeach
                              </li>
                              @endif 
                           </div>
                           @endif
                        </th>
                     </tr>
                  </thead>
                  <!-- /thead -->
                  <tbody>
                     <tr>
                        <td>
                           <div class="cart-checkout-btn pull-right">
                              @if(Session::get('customer_id') != NULL)
                              <a type="submit" href="{{URL::to('/checkout')}}" class="btn btn-primary checkout-btn">THANH TOÁN</a>
                              @else 
                              <a type="submit" class="btn btn-primary checkout-btn" href="{{URL::to('/login-checkout')}}">THANH TOÁN</a>
                              @endif
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