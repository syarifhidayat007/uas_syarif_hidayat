<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog_model extends Model
{
    use HasFactory;
    protected $table ="katalog";
    protected $primaryKey ="id_katalog";

    public function tampil_katalog(){
        $query = \DB::table('table_katalog_dayat')->get();
        return $query;
    }
}
