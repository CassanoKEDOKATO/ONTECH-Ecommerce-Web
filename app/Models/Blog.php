<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    use HasFactory;
    public function Save_blog($data){
       $insert = DB::table('blog')->insert($data);
        return  $insert;
    }
    public function show_blog(){
        $blog= DB::table('blog')->get();
        return $blog;
    }
    public function show_detail_blog($blog_id){
        $detail= DB::table('blog')->where('blog.blog_id',$blog_id)->get();
        return $detail;
    }
   
}
