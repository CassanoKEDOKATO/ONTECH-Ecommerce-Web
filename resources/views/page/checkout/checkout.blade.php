@extends('homelayout')
@section('content')
<div class="body-content">
<div class="container">
   <div class="sign-in-page">
      <div class="row">
         <div class="col-md-6 col-sm-6 create-new-account">
            <h4 class="checkout-subtitle">ĐIỀN THÔNG TIN GỬI HÀNG</h4>
            <p class="text title-tag-line"></p>
            <form class="register-form outer-top-xs" role="form" method="POST"  >
				@csrf 
               <div class="form-group">
                  <label class="info-title" for="exampleInputEmail2">Địa chỉ E-mail <span>*</span></label>
                  <input type="text" name="shipping_email" class="form-control unicase-form-control text-input shipping_email" id="exampleInputEmail2" >
               </div>
               <div class="form-group">
                  <label class="info-title" for="exampleInputEmail1"> Họ và tên <span>*</span></label>
                  <input type="text" name="shipping_name" class="form-control unicase-form-control text-input shipping_name" id="exampleInputEmail1" >
               </div>
               <div class="form-group">
                  <label class="info-title" for="exampleInputEmail1">Số điện thoại<span>*</span></label>
                  <input type="text" name="shipping_phone" class="form-control unicase-form-control text-input shipping_phone" id="exampleInputEmail1" >
               </div>
			   <div class="form-group">
				<label class="info-title" for="exampleInputEmail1">Địa chỉ giao hàng<span>*</span></label>
				<input type="text" name="shipping_address" class=" form-control unicase-form-control text-input shipping_address" placeholder="Địa chỉ gửi hàng">
			 </div>
			   <div class="form-group">
				<label class="info-title control-label">Phương thức thanh toán <span>*</span></label>
				<select name="payment_select" class="form-control payment_select ">
					<option value="0">Qua chuyển khoản</option>
					<option value="1">Tiền mặt</option>   
				</select>
				<div class="form-group">
					<label class="info-title" for="exampleInputEmail1">Ghi chú gửi hàng <span>*</span></label>
					<textarea name="shipping_notes" id="" cols="90" rows="10" class="shipping_notes"></textarea>
				 </div>
			 </div>

			   @if(Session::get('fee'))
			   <input type="hidden" name="order_fee" class="order_fee" value="{{Session::get('fee')}}">
		   @else 
			   <input type="hidden" name="order_fee" class="order_fee" value="10000">
		   @endif

		   @if(Session::get('coupon'))
			   @foreach(Session::get('coupon') as $key => $cou)
				   <input type="hidden" name="order_coupon" class="order_coupon" value="{{$cou['coupon_code']}}">
			   @endforeach
		   @else 
			   <input type="hidden" name="order_coupon" class="order_coupon" value="no">
		   @endif
		   <input type="button" value="Xác nhận đơn hàng" name="send_order" class="btn btn-primary btn-sm send_order">
			</form>
			<form>
				@csrf 
               <div class="form-group">
                  <label >Chọn thành phố</label>
                  <select name="city" id="city" class="form-control input-md m-bot15 choose city">
                     <option value="">--Chọn tỉnh thành phố--</option>
                     @foreach($city as $key => $ci)
                     <option value="{{$ci->matp}}">{{$ci->name_city}}</option>
                     @endforeach
                  </select>
               </div>
               <div class="form-group">
                  <label for="exampleInputPassword1">Chọn quận huyện</label>
                  <select name="province" id="province" class="form-control input-md m-bot15 province choose">
                     <option value="">--Chọn quận huyện--</option>
                  </select>
               </div>
               <div class="form-group">
                  <label for="exampleInputPassword1">Chọn xã phường</label>
                  <select name="wards" id="wards" class="form-control input-md m-bot15 wards" >
                     <option value="">--Chọn xã phường--</option>
                  </select>
               </div>
               
			 
			   <input type="button" value="Tính phí vận chuyển" name="calculate_order" class="btn btn-primary btn-sm calculate_delivery">
            </form>
         </div>
		 
      </div>
   </div>
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
					@endif
					@foreach(Session::get('cart') as $key => $cart)
						@php
							$subtotal = $cart['product_price']*$cart['product_qty'];
							$total+=$subtotal;
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
				 </tbody>
			
				<!-- /tbody -->
				
			 </table>
			
		
			 <div class="col-md-4 col-sm-12 cart-shopping-total">
			 </div>
			<div class="col-md-4 col-sm-12 cart-shopping-total">
			</div>
			 <div class="col-md-4 col-sm-12 cart-shopping-total">
				<table class="table">
				   <thead>
					  <tr>
						<th>
							<div>
								<li>	
									<a class="cart_quantity_delete" href="{{url('/del-fee')}}"><i class="fa fa-times"></i></a>

									Phí vận chuyển <span>{{number_format(Session::get('fee'),0,',','.')}}đ</span></li> 
							</div>
							<div>
							 
							   <span class="inner-left-md">
								 
							   </span>
							   
							</div>
							<div class="cart-grand-total">
							  Tổng tiền : {{number_format($total,0,',','.')}}
							  @if(Session::get('coupon'))
								   <li>
									@foreach(Session::get('coupon') as $key => $cou)
									@if($cou['coupon_condition']==1)
										Mã giảm : {{$cou['coupon_number']}} %
										<p>
											@php 
											$total_coupon = ($total*$cou['coupon_number'])/100;
										
											@endphp
										</p>
										<p>
										@php 
											$total_after_coupon = $total-$total_coupon;
										@endphp
										</p>
									@elseif($cou['coupon_condition']==2)
										Mã giảm : {{number_format($cou['coupon_number'],0,',','.')}} k
										<p>
											@php 
											$total_coupon = $total - $cou['coupon_number'];
										
											@endphp
										</p>
										@php 
											$total_after_coupon = $total_coupon;
										@endphp
									@endif
								@endforeach
									</li>
									<li>
										Tổng còn:
										@php 
											if(Session::get('fee') && !Session::get('coupon')){
												$total_after = $total_after_fee;
												echo number_format($total_after,0,',','.').'đ';
											}elseif(!Session::get('fee') && Session::get('coupon')){
												$total_after = $total_after_coupon;
												echo number_format($total_after,0,',','.').'đ';
											}elseif(Session::get('fee') && Session::get('coupon')){
												$total_after = $total_after_coupon;
												$total_after = $total_after + Session::get('fee');
												echo number_format($total_after,0,',','.').'đ';
											}elseif(!Session::get('fee') && !Session::get('coupon')){
												$total_after = $total;
												echo number_format($total_after,0,',','.').'đ';
											}

										@endphp
									</li>
									@endif 
							</div>
						 </th>
					  </tr>
				   </thead>
				   
				   <!-- /tbody -->
				</table>
				<!-- /table -->
			 </div>	
			 <hr >
			 <!-- /table -->
		  </div>
	   </div>		
	</div>
   </div>
	<!-- /.shopping-cart -->
 </div>
</div>
@endsection