@extends('adminlayout')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Forms</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Forms</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Basic Form</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">THÔNG TIN ĐĂNG NHẬP</div>
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
                        <div class="card-body">
                            <div class="row"> 
                              <div class="col-md-9 col-lg-12 col-sm-12">
                                <table class="table table-hover"  id="myTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tên khách hàng</th>
                                            <th scope="col">Số điện thoại</th>
                                            <th scope="col">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$customer->customer_name}}</td>
                                            <td>{{$customer->customer_phone}}</td>
                                            <td>{{$customer->customer_email}}</td>
                                          </tr>
                                    </tbody>
                                </table>
                              </div>
                            </div>    
                        </div> 
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">THÔNG TIN VẬN CHUYỂN HÀNG</div>
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
                        <div class="card-body">
                            <div class="row"> 
                              <div class="col-md-9 col-lg-12 col-sm-12">
                                <table class="table table-hover"  id="myTable">
                                    <thead>
                                        <tr>
                                            
                                            <th scope="col">Tên người vận chuyển</th>
                                            <th scope="col">Địa chỉ</th>
                                            <th scope="col">Số điện thoại</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Ghi chú</th>
                                            <th scope="col">Hình thức thanh toán</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$shipping->shipping_name}}</td>
                                            <td>{{$shipping->shipping_address}}</td>
                                             <td>{{$shipping->shipping_phone}}</td>
                                             <td>{{$shipping->shipping_email}}</td>
                                             <td>{{$shipping->shipping_notes}}</td>
                                             <td>@if($shipping->shipping_method==0) Chuyển khoản @else Tiền mặt @endif</td>
                                          </tr>
                                    </tbody>
                                </table>
                              </div>
                            </div>    
                        </div> 
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">LIỆT KÊ CHI TIẾT ĐƠN HÀNG</div>
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
                        <div class="card-body">
                            <div class="row"> 
                              <div class="col-md-9 col-lg-12 col-sm-12">
                                <table class="table table-hover"  id="myTable">
                                    <thead>
                                        <tr>
                                            
                                            <th scope="col">Tên người vận chuyển</th>
                                            <th scope="col">Tên sản phẩm</th>
                                            <th scope="col">Số lượng kho còn</th>
                                            <th scope="col">Mã giảm giá</th>
                                            <th scope="col">Phí ship hàng</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Giá sản phẩm</th>
                                            <th scope="col">Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php 
                                        $i = 0;
                                        $total = 0;
                                        @endphp
                                      @foreach($order_details as $key => $details)
                              
                                        @php 
                                        $i++;
                                        $subtotal = $details->product_price*$details->product_sales_quantity;
                                        $total+=$subtotal;
                                        @endphp
                                        <tr class="color_qty_{{$details->product_id}}">
                                         
                                          <td><i>{{$i}}</i></td>
                                          <td>{{$details->product_name}}</td>
                                          <td>{{$details->product->product_quantity}}</td>
                                          <td>@if($details->product_coupon!='no')
                                                {{$details->product_coupon}}
                                              @else 
                                                Không mã
                                              @endif
                                          </td>
                                          <td>{{number_format($details->product_feeship ,0,',','.')}}đ</td>
                                          <td>
                              
                                            <input type="number" min="1" {{$order_status==2 ? 'disabled' : ''}} class="order_qty_{{$details->product_id}}" value="{{$details->product_sales_quantity}}" name="product_sales_quantity" style="width:50px">
                              
                                            <input type="hidden" name="order_qty_storage" class="order_qty_storage_{{$details->product_id}}" value="{{$details->product->product_quantity}}">
                              
                                            <input type="hidden" name="order_code" class="order_code" value="{{$details->order_code}}">
                              
                                            <input type="hidden" name="order_product_id" class="order_product_id" value="{{$details->product_id}}">
                              
                                           @if($order_status!=2) 
                              
                                            <button class="btn btn-default update_quantity_order btn-sm" data-product_id="{{$details->product_id}}" name="update_quantity_order">Cập nhật</button>
                              
                                          @endif
                              
                                          </td>
                                          <td>{{number_format($details->product_price ,0,',','.')}}đ</td>
                                          <td>{{number_format($subtotal ,0,',','.')}}đ</td>
                                        </tr>
                                      @endforeach
                                        <tr>
                                          <td colspan="2" style="background-color: rgb(231, 164, 164)">  
                                          @php 
                                              $total_coupon = 0;
                                            @endphp
                                            @if($coupon_condition==1)
                                                @php
                                                $total_after_coupon = ($total*$coupon_number)/100;
                                                echo 'Tổng giảm :'.number_format($total_after_coupon,0,',','.').'</br>';
                                                $total_coupon = $total + $details->product_feeship - $total_after_coupon ;
                                                @endphp
                                            @else 
                                                @php
                                                echo 'Tổng giảm :'.number_format($coupon_number,0,',','.').'k'.'</br>';
                                                $total_coupon = $total + $details->product_feeship - $coupon_number ;
                              
                                                @endphp
                                            @endif
                              
                                            Phí ship : {{number_format($details->product_feeship,0,',','.')}}đ</br> 
                                           Thanh toán: {{number_format($total_coupon,0,',','.')}}đ 
                                          </td>
                                        </tr>
                                        <tr>
                                          <td colspan="6">
                                            @foreach($order as $key => $or)
                                              @if($or->order_status==1)
                                              <form>
                                                 @csrf
                                                <select class="form-control order_details">
                                                  <option value="">----Chọn hình thức đơn hàng-----</option>
                                                  <option id="{{$or->order_id}}" selected value="1">Chưa xử lý</option>
                                                  <option id="{{$or->order_id}}" value="2">Đã xử lý-Đã giao hàng</option>
                                                  <option id="{{$or->order_id}}" value="3">Hủy đơn hàng-tạm giữ</option>
                                                </select>
                                              </form>
                                              @elseif($or->order_status==2)
                                              <form>
                                                @csrf
                                                <select class="form-control order_details">
                                                  <option value="">----Chọn hình thức đơn hàng-----</option>
                                                  <option id="{{$or->order_id}}" value="1">Chưa xử lý</option>
                                                  <option id="{{$or->order_id}}" selected value="2">Đã xử lý-Đã giao hàng</option>
                                                  <option id="{{$or->order_id}}" value="3">Hủy đơn hàng-tạm giữ</option>
                                                </select>
                                              </form>
                              
                                              @else
                                              <form>
                                                 @csrf
                                                <select class="form-control order_details">
                                                  <option value="">----Chọn hình thức đơn hàng-----</option>
                                                  <option id="{{$or->order_id}}" value="1">Chưa xử lý</option>
                                                  <option id="{{$or->order_id}}"  value="2">Đã xử lý-Đã giao hàng</option>
                                                  <option id="{{$or->order_id}}" selected value="3">Hủy đơn hàng-tạm giữ</option>
                                                </select>
                                              </form>
                              
                                              @endif
                                              @endforeach
                              
                              
                                          </td>
                                        </tr>
                                      </tbody>
                                </table>
                              </div>
                            </div>    
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection