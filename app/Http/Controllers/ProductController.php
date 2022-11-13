<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();


class ProductController extends Controller
{
   private $var_product;
   private $all_pr;
   public function __construct()
   {
       $this->var_product=new ProductModel();
       $this->all_pr=new HomeModel();
   }
   public function AuthLogin(){
      $admin_id =Auth::id();
      if($admin_id){
           return Redirect::to('admin.dashboard');
      }else{
        return Redirect::to('adminlogin')->send();
      }
    }
    public function add_product(){
      $this->AuthLogin();
      $cate_product = $this->var_product->Getcategory();
      $brand_product = $this->var_product->Getbrand();
        return view('admin.page.add-product')->with('brand_product', $brand_product)->with('cate_product', $cate_product);
     }
     public function all_product(){
      $this->AuthLogin();
     $all_product= $this->var_product->Show_all_product();
      $manager_product = view('admin.page.all-product')->with('all_product',$all_product);
      return view('adminlayout')->with('admin.page.all-product',$manager_product);
     }
     public function all_product_content(){
      $this->AuthLogin();
      $all_product= $this->var_product->Show_all_product();
       $manager_product = view('admin.page.all-product-content')->with('all_product',$all_product);
       return view('adminlayout')->with('admin.page.all-product-content',$manager_product);
     }
     public function save_product(Request $request){
      $data = array();
      $data['product_name'] = $request->product_name;
      $data['product_desc'] = $request->product_desc;
      $data['product_price'] = $request->product_price;
      $data['product_content'] = $request->product_content;
      $data['product_status'] = $request->product_status;
      $data['category_id'] = $request->product_cate;
      $data['brand_id'] = $request->product_brand;
      $get_img1 = $request->file('product_image');
      $get_img2 = $request->file('product_image2');
     
      if ($get_img1 && $get_img2) {
          $get_name_image1 =$get_img1->getClientOriginalName();
          $get_name_image2 =$get_img2->getClientOriginalName();
          $name_img1= current(explode(',',$get_name_image1));
          $name_img2= current(explode(',',$get_name_image2));
          $new_image1 = $name_img1;
          $new_image2 = $name_img2;
          $get_img1->move('public/upload/productImage/',$new_image1);
          $get_img2->move('public/upload/productImage/',$new_image2);
          $data['product_image']= $new_image1;
          $data['product_image2']= $new_image2;
          $this->var_product->Save_product($data);
          Session::put('message', 'Successfully');
          return Redirect::to('/all-product');
      }
       $data['product_image']= '';
       $data['product_image2']= '';
       $this->var_product->Save_product($data);
       Session::put('message', 'Successfully');
       return Redirect::to('/all-product');
   
  }
  public function unactive_product($product_id){
   $this->var_product->Active_status($product_id);
  Session::put('message',' thể kích hoạt danh mục sản phẩm thành công!');
   return Redirect::to('all-product');
} 
public function active_product($product_id){
   $this->var_product->Unactive_status($product_id);
  Session::put('message',' thể kích hoạt danh mục sản phẩm thành công!');
   return Redirect::to('all-product');
}
public function edit_product($product_id){
   $cate_product = $this->var_product->Getcategory();
   $brand_product = $this->var_product->Getbrand();
   $edit_product =  $this->var_product->Edit_product($product_id);
   $manager_product = view('admin.page.edit-product')
   ->with('edit_product',$edit_product)
   ->with('cate_product', $cate_product)
   ->with('brand_product', $brand_product);

   return view('adminlayout')->with('admin.page.edit-product',$manager_product);
}
public function update_product(Request $request,$product_id){
   $data = array();
   $data['product_name'] = $request->product_name;
   $data['product_desc'] = $request->product_desc;
   $data['product_price'] = $request->product_price;
   $data['product_content'] = $request->product_content;
   $data['product_status'] = $request->product_status;
   $data['category_id'] = $request->product_cate;
   $data['brand_id'] = $request->product_brand;
   $get_img1 = $request->file('product_image');
   $get_img2 = $request->file('product_image2');
  
   if ($get_img1 && $get_img2) {
       $get_name_image1 =$get_img1->getClientOriginalName();
       $get_name_image2 =$get_img2->getClientOriginalName();
       $name_img1= current(explode(',',$get_name_image1));
       $name_img2= current(explode(',',$get_name_image2));
       $new_image1 = $name_img1;
       $new_image2 = $name_img2;
       $get_img1->move('public/upload/productImage/',$new_image1);
       $get_img2->move('public/upload/productImage/',$new_image2);
       $data['product_image']= $new_image1;
       $data['product_image2']= $new_image2;
       $this->var_product->Save_product($data);
       Session::put('message', 'Successfully');
       return Redirect::to('/all-product');
   }
    $data['product_image']= '';
    $data['product_image2']= '';
    $this->var_product->Update_product($product_id,$data);
    Session::put('message', 'Successfully');
    return Redirect::to('/all-product');


}
public function delete_product($product_id){
   $this->var_product->Delete_product($product_id);
   Session::put('message','Xoa sản phẩm thành công!');
   return Redirect::to('all-product');

}
public function detail_product($product_id ,  Request $request){
   $category = $this->var_product->Getcategory();
   $brand = $this->var_product->Getbrand();
   $all_products = $this->all_pr->Show_all_product();
   $detail_product = $this->var_product->Details_product($product_id);
  
   foreach($detail_product as $key => $value) {
       $category_id = $value->category_id;
  
          $url_canonical = $request->url();
          $image_og = url('public/upload/productImage/'.$value->product_image);
          
      }
   $related_product = $this->var_product->Relate_product($category_id, $product_id);
   return view('page.product.detail2')->with('category',$category)->with('brands',$brand)
   ->with('all_products',$all_products)->with('detail_product',$detail_product)
   ->with('related_product', $related_product )->with('url_canonical',$url_canonical)->with('image_og',$image_og);
}


}
