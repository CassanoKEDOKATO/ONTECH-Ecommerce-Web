<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Slider;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
	public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function manage_slider(){
    	$all_slide = Slider::orderBy('slider_id','DESC')->get();
    	return view('admin.slider.all-slider')->with(compact('all_slide'));
       
    }
    public function add_slider(){
    	return view('admin.slider.add-slider');
    }
    public function unactive_slide($slide_id){
        $this->AuthLogin();
        DB::table('tbl_slider')->where('slider_id',$slide_id)->update(['slider_status'=>1]);
        Session::put('message','Không kích hoạt slider thành công');
        return Redirect::to('manage-slider');

    }
    public function active_slide($slide_id){
        $this->AuthLogin();
        DB::table('tbl_slider')->where('slider_id',$slide_id)->update(['slider_status'=>0]);
        Session::put('message','Kích hoạt slider thành công');
        return Redirect::to('manage-slider');

    }

    public function insert_slider(Request $request){
    	
    	$this->AuthLogin();

   		$data = $request->all();
       	$get_image = request('slider_image');
      
        if($get_image){
            $get_name_image =$get_image->getClientOriginalName();
            $name_img= current(explode(',',$get_name_image));
            $new_image = $name_img;
            $get_image->move('public/upload/sliderImage/',$new_image);

            $slider = new Slider();
            $slider->slider_name = $data['slider_name'];
            $slider->slider_image = $new_image;
            $slider->slider_status = $data['slider_status'];
            $slider->slider_desc = $data['slider_desc'];
           	$slider->save();
            Session::put('message','Thêm slider thành công');
            return Redirect::to('add-slider');
        }else{
        	Session::put('message','Làm ơn thêm hình ảnh');
    		return Redirect::to('add-slider');
        }
       	
    }
}
