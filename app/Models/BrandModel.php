<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BrandModel extends Model
{
    use HasFactory;
    public function GetBrand(){
        $brand_product = DB::table('tbl_brand_product')->where('brand_status','1')->orderBy('brand_id','desc')->get();
        return $brand_product;
    }
    public function Save_brand_product($data){
        DB::table('tbl_brand_product')->insert($data);
       }
       public function Show_all_brand(){
           $all_brand_product= DB::table('tbl_brand_product')->get();
           return $all_brand_product;
       }
       public function Change_status_unactive($brand_product_id){
           DB::table('tbl_brand_product')->where('brand_id', $brand_product_id)->update(['brand_status' => 1]);
       }
       public function Change_status_active($brand_product_id){
           DB::table('tbl_brand_product')->where('brand_id', $brand_product_id)->update(['brand_status' => 0]);
       }
       public function Edit_brand($brand_product_id){
           $edit_brand_product =DB::table('tbl_brand_product')->where('brand_id', $brand_product_id)->get();
           return $edit_brand_product;
       }
       public function Update_brand($brand_product_id, $data){
           DB::table('tbl_brand_product')->where('brand_id', $brand_product_id)->update($data);
       }
       public function Delete_brand($brand_product_id){
           DB::table('tbl_brand_product')->where('brand_id', $brand_product_id)->delete();
       }
       public function Get_Brand_ById($brand_id){
        $brand_by_id = DB::table('tbl_product')
        ->join('tbl_brand_product','tbl_product.brand_id','=','tbl_brand_product.brand_id')
        ->where('tbl_product.brand_id',$brand_id)
        ->get();
        return $brand_by_id;
       }
}
