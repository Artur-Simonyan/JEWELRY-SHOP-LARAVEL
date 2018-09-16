<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Gallery extends Model
{
    public static function index(){
        return DB::table ( 'rings' )->paginate ( 12 );
    }

    public static function ring(){
        return DB::table ( 'rings' )->paginate ( 12 );
    }

    public static function earring(){
        return DB::table ( 'earrings' )->paginate ( 12 );
    }

    public static function necklace(){
        return DB::table ( 'necklaces' )->paginate ( 12 );
    }

    public static function bracelet(){
        return DB::table ( 'bracelets' )->paginate ( 12 );
    }
}
