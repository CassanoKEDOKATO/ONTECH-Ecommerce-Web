<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BrandModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class BlogsController extends Controller
{
    private $var_blog;
    private $var_brand;
    private $var_category;
   public function __construct()
   {
       $this->var_blog = new Blog();
       $this->var_brand=new BrandModel();
       $this->var_category = new CategoryModel();
   }
   public function add_new_blog(){

    return view('admin.blog.add-blog');
   }
   public function save_blog(Request $request){ 
    $data = array();
    $data['blog_title'] = $request->blog_title;
    $get_img = $request->file('blog_image');
    if ($get_img) {
        $get_name_image =$get_img->getClientOriginalName();
        $name_img= current(explode(',',$get_name_image));
        $new_image = $name_img;
        $get_img->move('public/upload/blogImage/',$new_image);
        $data['blog_image']= $new_image;
        $data['blog_content'] = $request->blog_content;
        $data['blog_status']  = $request->blog_status;
      
        $this->var_blog->Save_blog($data);
    //     $this->var_blog->Save_blog($data);
    //     Session::put('message', 'Successfully');
    //  return Redirect::to('dashboard');
    }
    $data['blog_image']= '';
    $data['blog_content'] = $request->blog_content;
    $data['blog_status']  = $request->blog_status;
    $this->var_blog->Save_blog($data);
    Session::put('message', 'Successfully');
 return Redirect::to('dashboard');
}

   public function update_blog(){ 
    
   }
   public function delete_blog(){ 

   }
  public function blog_list(Request $request){
    $cate_product = $this->var_category->Getcategory();
    $brand_product =  $this->var_brand->GetBrand();
     $all_blog = $this->var_blog->show_blog();
     $url_canonical = $request->url();
    return view('page.blog.blog-list')->with('brands', $brand_product)
    ->with('category', $cate_product)->with('all_blog',$all_blog)->with('url_canonical',$url_canonical);
  }
  public function blog_detail($blog_id,Request $request){
    $cate_product = $this->var_category->Getcategory();
    $brand_product =  $this->var_brand->GetBrand();
    $url_canonical = $request->url();
     $detail_blog = $this->var_blog->show_detail_blog($blog_id);
    return view('page.blog.blog-detail')->with('brands', $brand_product)
    ->with('category', $cate_product)->with('detail_blog',$detail_blog)->with('url_canonical',$url_canonical);
  }
}
