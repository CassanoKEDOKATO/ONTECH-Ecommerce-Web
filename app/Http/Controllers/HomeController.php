<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categories;
use App\Models\CategoryModel;
use App\Models\HomeModel;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
session_start();

class HomeController extends Controller
{
   private $var;
   private $aq;
   
   public function __construct()
   {
       $this->var=new HomeModel();
       $this->aq = new CategoryModel();
       $this->var_blog =new Blog();
   }
   public function index(Request $request){
     $category = $this->var->Getcategory();
     $brand = $this->var->Getbrand();
     $all_products = $this->var->Show_all_product();
     $monitor = $this->var->show_monitor();
     $laptop = $this->var->show_laptop();
     $keyboard = $this->var->show_keyboard();
     $url_canonical = $request->url();
     $slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->inRandomOrder()->take(6)->get();
     $all_blog = $this->var_blog->show_blog();
    return view('page.home')->with('category',$category)->with('brands',$brand)
    ->with('all_products',$all_products)->with('url_canonical',$url_canonical)
    ->with('monitor',$monitor)->with('laptop',$laptop)
    ->with('keyboard',$keyboard)->with('slider',$slider)
    ->with('all_blog',$all_blog);
   }
   public function shop(Request $request){
    $category = $this->var->Getcategory();
    $brand = $this->var->Getbrand();
    // $all_products = $this->var->Show_shop_product();
    $all_products = Product::paginate(16);
    $url_canonical = $request->url();
    return view('page.shop')->with('category',$category)->with('brands',$brand)->with('all_products',$all_products)->with('url_canonical',$url_canonical);
   }
   public function search(Request $request){
    $keyword = $request->keyword;
    $category = $this->var->Getcategory();
    $brand = $this->var->Getbrand();
    $search_products = $this->var->Search_product($keyword);
    $url_canonical = $request->url();
    return view('page.product.tim-kiem')->with('category',$category)->with('brands',$brand)->with('search_products',$search_products)->with('url_canonical',$url_canonical);
   }
   public function send_mail(){
    $to_name = "Anh Quan";
    $to_email = "nguyenanhquandz01102002@gmail.com";//send to this email

    $data = array('name'=>'Mail tu tai khoan khach hangf','body'=>'Noi dung ve van de...'); 

    Mail::send('page.mail.send-mail',$data,function($message) use ($to_name,$to_email){
        $message->to($to_email)->subject('test mail nhé');//send this mail with subject
        $message->from($to_email,$to_name);//send from this mail
    });
    return Redirect::to('/')->with('message','');
   }
   public function autocomplete_ajax(Request $request){
    $data = $request->all();
    if($data['query']){
        $product = Product::where('product_status',1)->where('product_name','LIKE','%'.$data['query'].'%')->get();
        $output = '<ul class="dropdown-menu" style="display:block ; position:absolute; width:700px">';
        foreach($product as $key => $val){
            $output.= '<li class="li_search_ajax" style="font-size:16px; display: flex ;flex-direction:row; align-items: center;" ><img src="public/upload/productImage/'.$val->product_image.'" width="100"; height="100" /><a href="/chi-tiet-san-pham/'.$val->product_id.'" ><span>'.$val->product_name.'</span></a></li>';
        }
        $output.= '</ul>';
        echo $output;
    }

   }
   
}
