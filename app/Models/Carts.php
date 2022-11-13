<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Carts extends Model
{
  public function insert_item($data){
            DB::table('tbl_cart')->insert($data);
  }
}
