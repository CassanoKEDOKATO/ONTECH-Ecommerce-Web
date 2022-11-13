<?php

namespace App\Http\Controllers;

use App\Models\CheckoutModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use App\Models\City;
use App\Models\Freeship;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Province;
use App\Models\Wards;
use App\Models\Shipping;

session_start();

class CheckoutController extends Controller
{
    private $var_product;
    private $var_checkout;
    public function __construct()
    {
        $this->var_product=new ProductModel();
        $this->var_checkout = new CheckoutModel();
    }
  public function login_checkout(Request $request){
    $cate_product = $this->var_product->Getcategory();
    $brand_product = $this->var_product->Getbrand();
    $url_canonical = $request->url();
    return view('page.checkout.login-check-out')->with('brand', $brand_product)->with('category', $cate_product)->with('url_canonical',$url_canonical);
  }
  public function add_customer(Request $request){
    $data = array();
    $data['customer_name'] = $request->c_name;
    $data['customer_email'] = $request->c_email;
    $data['customer_password'] = md5($request->c_password);
    $data['customer_phone'] = $request->c_sdt;
    // echo '<pre>';print_r($data);echo '</pre>';
    $insert_customer= $this->var_checkout->Insert_Customer($data);
    // $insertcustomer = DB::table('tbl_customer')->insertGetId($data);
    Session::put('customer_id',$request->customer_id);
    Session::put('customer_name', $request->customer_name);
    return Redirect::to('checkout');
  }
  public function view_profile(Request $request){
    $url_canonical = $request->url();
    $cate_product = $this->var_product->Getcategory();
    $brand_product = $this->var_product->Getbrand();
     return view('page.profileclient.view-profile')->with('brand', $brand_product)->with('category', $cate_product)->with('url_canonical',$url_canonical);
  }
  public function checkout(Request $request){
    $cate_product = $this->var_product->Getcategory();
    $brand_product = $this->var_product->Getbrand();
    $url_canonical = $request->url();
    $city = City::orderBy('matp','DESC')->get();
    return view('page.checkout.checkout')->with('brand', $brand_product)->with('category', $cate_product)->with('city',$city)->with('url_canonical',$url_canonical);
  }
  public function save_checkout_customer(Request $request){
    $data = array();
    $data['shipping_name'] = $request->ship_name;
    $data['shipping_address'] = $request->ship_address;
    $data['shipping_phone'] = $request->ship_sdt;
    $data['shipping_email'] = $request->ship_email;
    $data['shipping_note'] = $request->ship_ghichu;
    // $insertcustomer = DB::table('tbl_shipping')->insertGetId([$data]);
    $shipping_id = $this->var_checkout->Insert_Shipping($data);
    Session::put('shipping_id', $shipping_id);
    return Redirect::to('/payment');

  }
 
  public function payment(){
    $cate_product = $this->var_product->Getcategory();
    $brand_product = $this->var_product->Getbrand();
    return view('page.checkout.payment')->with('brands', $brand_product)->with('category', $cate_product);

  }
  public function logout_checkout(){
     Session::flush();
     return Redirect::to('/');
  }
  public function login_customer(Request $request){
    $email = $request->email_acc;
    $password= md5($request->pass_acc);
    $result= $this->var_checkout->Seclect_Customer($email,$password);
    if($result){
        Session::put('customer_id',$result->customer_id);
        Session::put('customer_name',$result->customer_name);
        return Redirect::to('/');
    }else{
        Session::put('message','tai khoan hoac mat khau bi sai!');
        return Redirect::to('/');
    }
   
  }
  public function order_place(Request $request){

    $cate_product = $this->var_product->Getcategory();
    $brand_product = $this->var_product->Getbrand();
    //payment
    $payment_data = array();
    $payment_data['payment_method'] = $request->select_payment;
    $payment_data['payment_status'] = 'Đang chờ xử lý';
    // $payment_id = $this->var_checkout->Insert_Payment($payment_data);
    $payment_id = DB::table('tbl_payment')->insertGetId($payment_data);
    
    //order
    $order_data = array();
    $order_data['customer_id'] = Session::get('customer_id');
    $order_data['shipping_id'] = Session::get('shipping_id');
    $order_data['payment_id'] = $payment_id;
    $order_data['order_total'] = Cart::priceTotal();
    $order_data['order_status'] = 'Đang chờ xử lý';
    // $order_id = $this->var_checkout->Insert_Order($order_data);
    $order_id = DB::table('tbl_order')->insertGetId($order_data);
    //order_detail
    foreach (Cart::content() as $sv_content) {
    $order_detail_data = array();
    $order_detail_data['order_id'] = $order_id;
    $order_detail_data['product_id'] = $sv_content->id;
    $order_detail_data['product_name'] =$sv_content->name;
    $order_detail_data['product_price'] = $sv_content->price;
    $order_detail_data['product_sale_quantity'] = $sv_content->qty;
    // $order_detail = $this->var_checkout->Insert_Order_Detail($order_detail_data);
    DB::table('tbl_order_detail')->insert($order_detail_data);
    if($payment_data['payment_method'] ==0){
      Cart::destroy();
       return view('page.checkout.handcash')->with('brands', $brand_product)->with('category', $cate_product);
    }
    elseif($payment_data['payment_method']==1){
      echo'atm';
    }elseif($payment_data['payment_method']==2){
      echo'zaloPay';
      }
      else {
        echo'paypal';
    }
    DB::table('tbl_order_detail')->insert($order_detail_data);
    }
   
    // return Redirect::to('/');
  }

  public function manage_order(){

    $all_order= $this->var_checkout->Show_all_order();
     $manager_order = view('admin.page.manage-order')->with('all_order',$all_order);
     return view('adminlayout')->with('admin.page.manage-order',$manager_order);
  }
  public function detail_order($order_id){
    $infor_order_by_id= $this->var_checkout->Show_detail_order_by_id();
     $manager_order = view('admin.page.infor-order')->with('infor_order_by_id',$infor_order_by_id);
     return view('adminlayout')->with('admin.page.infor-order',$manager_order);
  }

  public function select_delivery_home(Request $request){
    $data = $request->all();
    if($data['action']){
        $output = '';
        if($data['action']== "city"){
            $select_province = Province::where('matp',$data['ma_id'])->orderby('maqh','ASC')->get();
                $output.='<option>---Chọn quận huyện---</option>';
            foreach($select_province as $key => $province){
                $output.='<option value="'.$province->maqh.'">'.$province->name_quanhuyen.'</option>';
            }

        }else{

            $select_wards = Wards::where('maqh',$data['ma_id'])->orderby('xaid','ASC')->get();
            $output.='<option>---Chọn xã phường---</option>';
            foreach($select_wards as $key => $ward){
                $output.='<option value="'.$ward->xaid.'">'.$ward->name_xaphuongthitran.'</option>';
            }
        }
        echo $output;
    }
}
public function calculate_fee(Request $request){
  $data = $request->all();
  if($data['matp']){
      $feeship = Freeship::where('fee_tp',$data['matp'])->where('fee_qh',$data['maqh'])->where('fee_xaid',$data['xaid'])->get();
      if($feeship){
          $count_feeship = $feeship->count();
          if($count_feeship>0){
               foreach($feeship as $key => $fee){
                  Session::put('fee',$fee->fee_feeship);
                  Session::save();
              }
          }else{ 
              Session::put('fee',25000);
              Session::save();
          }
      }
     
  }
}
public function confirm_order(Request $request){
  $data = $request->all();

  $shipping = new Shipping();
  $shipping->shipping_name = $data['shipping_name'];
  $shipping->shipping_email = $data['shipping_email'];
  $shipping->shipping_phone = $data['shipping_phone'];
  $shipping->shipping_address = $data['shipping_address'];
  $shipping->shipping_notes = $data['shipping_notes'];
  $shipping->shipping_method = $data['shipping_method'];
  $shipping->save();
  $shipping_id = $shipping->shipping_id;

  $checkout_code = substr(md5(microtime()),rand(0,26),5);


  $order = new Order();
  $order->customer_id = Session::get('customer_id');
  $order->shipping_id = $shipping_id;
  $order->order_status = 1;
  $order->order_code = $checkout_code;

  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $order->created_at = now();
  $order->save();

  if(Session::get('cart')==true){
     foreach(Session::get('cart') as $key => $cart){
         $order_details = new OrderDetails();
         $order_details->order_code = $checkout_code;
         $order_details->product_id = $cart['product_id'];
         $order_details->product_name = $cart['product_name'];
         $order_details->product_price = $cart['product_price'];
         $order_details->product_sales_quantity = $cart['product_qty'];
         $order_details->product_coupon =  $data['order_coupon'];
         $order_details->product_feeship = $data['order_fee'];
         $order_details->save();
     }
  }
  Session::forget('coupon');
  Session::forget('fee');
  Session::forget('cart');
}
public function del_fee(){
 Session::forget('fee');
 return redirect()->back();
}
 
}
