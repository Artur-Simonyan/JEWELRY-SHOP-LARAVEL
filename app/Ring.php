<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Ring extends Model
{
    public static function ringList ()
    {
        return DB::table ( 'rings' )->paginate ( 10 );
    }

    public static function deleted ( $id )
    {
        return DB::table ( 'rings' )->where ( 'ring_id' , $id )->delete ();
    }

    public static function store ()
    {
        return DB::table ( 'rings' )->get ()->first ();
    }

    public static function creating ( $req )
    {
        if ( Input::hasFile ( 'file' ) ) {
            $file = Input::file ( 'file' );
            $randomName=rand(1, 9999).$file->getClientOriginalName ();
            $file->move ( 'uploads/rings' , $randomName );
        }

        $ring_name = $randomName;
        $description = $req->input ( 'description' );
        $ring_price = $req->input ( 'ring_price' );
        $check = $req->input ( 'check' );

        $data = array ( "ring_name" => $ring_name , "description" => $description , "ring_price" => $ring_price , "check" => $check );
        DB::table ( 'rings' )->insert ( $data );
        return $ring_name;
    }

    public static function edit ( $id )
    {
        return DB::table ( 'rings' )->where ( 'ring_id' , $id )->first ();
    }

    public static function updateRing ( $req , $id )
    {
        if ( Input::hasFile ( 'file' ) ) {
            $file = Input::file ( 'file' );
            $randomName=rand(1, 9999).$file->getClientOriginalName ();
            $file->move ( 'uploads/rings' , $randomName );
        }

        $ring_name = $randomName;

        DB::table ( 'rings' )->where ( 'ring_id' , $id )->update ( [
            'ring_name' => $ring_name ,
            'ring_price' => $req->input ( 'ring_price' ) ,
            'description' => $req->input ( 'description' ) ,
            'check' => $req->input ( 'check' )
        ] );
        return $ring_name;
    }
}
