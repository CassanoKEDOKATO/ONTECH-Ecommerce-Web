<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
session_start();
class AdminController extends Controller
{  private $var_admin;
   public function __construct()
   {
       $this->var_admin= new AdminModel();
   }
   public function AuthLogin(){
      // $admin_id = Session::get('admin_id');
      $admin_id = Auth::id();
      if($admin_id){
           return Redirect::to('admin.dashboard');
      }else{
        return Redirect::to('adminlogin')->send();
      }
    }
   public function index(){
    return view('adminlogin');
   }
   public function show_dashboard(){
      $this->AuthLogin();
    
      return view('admin.page.dashboard');
    }
    public function dashboard(Request $request){
      $admin_email =$request->admin_email;
      $admin_password =md5($request->admin_password);
     $result= $this->var_admin->Insert_User( $admin_email, $admin_password);
      if($result){
          Session::put('admin_name',$result->admin_name);
          Session::put('admin_id',$result->admin_id);
         return  Redirect::to('/dashboard');
      }else{
          Session::put('message','tai khoan hoac mat khau bi sai!');
          return  Redirect::to('/admin');
      }
    }
    public function logout(){
      $this->AuthLogin();
      Session::put('admin_id',null);
      Session::put('admin_name',null);
      return  Redirect::to('/admin');
    }
   public function client_login(){
    return view('clientlogin');
   }
   public function edit_profile($admin_id){
    // $edit_admin = $this->var_admin->Edit_Admin($admin_id);
    // $manager_admin= view('admin.profile.edite-profile')->with('edit_admin',$edit_admin);
    //  return view('adminlayout')->with('admin.profile.edite-profile',$manager_admin);
    return view('admin.profile.edite-profile');
   }
   public function save_profile(Request $request , $admin_id ){
     $data = array();
     $data['admin_email'] = $request->admin_email;
     $data['admin_name'] = $request->admin_name;
     $data['admin_password'] = md5($request->admin_newpass);
     $data['admin_phone'] = $request->admin_phone ;
     $get_img = $request->file('admin_image');
     if ($get_img) {
      $get_name_image =$get_img->getClientOriginalName();
      $name_img= current(explode(',',$get_name_image));
      $new_image = $name_img;
      $get_img->move('public/upload/adminImage/',$new_image);
      $data['admin_image']= $new_image;
      $this->var_admin->Update_User($admin_id, $data);
      Session::put('message', 'Successfully');
      return Redirect::to('show_dashboard');
  }
  $data['admin_image']= '';
  $this->var_admin->Update_User($admin_id ,$data);
  Session::put('message', 'Successfully');
  return Redirect::to('show_dashboard');
      
   }
   
  
}
