<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Buy extends Model
{
    public static function ring ( $id ){
        return DB::table ( 'rings' )->where ( 'ring_id' , $id )->first ();
    }

    public static function necklace ( $id ){
        return DB::table ( 'necklaces' )->where ( 'necklace_id' , $id )->first ();
    }

    public static function earring ( $id ){
        return DB::table ( 'earrings' )->where ( 'earring_id' , $id )->first ();
    }

    public static function bracelet ( $id ){
        return DB::table ( 'bracelets' )->where ( 'bracelet_id' , $id )->first ();
    }
}
