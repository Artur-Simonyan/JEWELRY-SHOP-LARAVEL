<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Earring extends Model
{
    public static function earringList(){
        return DB::table ( 'earrings' )->paginate ( 10 );
    }

    public static function store(){
        return DB::table ( 'earrings' )->get ()->first ();
    }

    public static function creating ( $req ){
        if ( Input::hasFile ( 'file' ) ) {
            $file = Input::file ( 'file' );
            $randomName=rand(1, 9999).$file->getClientOriginalName ();
            $file->move ( 'uploads/earring' , $randomName );
        }

        $earring_name = $randomName;
        $earring_price = $req->input ( 'earring_price' );
        $description = $req->input ( 'description' );
        $check = $req->input ( 'check' );

        $data = array ( "earring_name" => $earring_name , "earring_price" => $earring_price , "description" => $description , "check" => $check );
        DB::table ( 'earrings' )->insert ( $data );
        return $earring_name;
    }

    public static function deleted ( $id ){
        return   DB::table ( 'earrings' )->where ( 'earring_id' , $id )->delete ();
    }

    public static function edit($id){
        return DB::table ( 'earrings' )->where ( 'earring_id' , $id )->first ();
    }

    public static function updateEaring($req,$id){
        if ( Input::hasFile ( 'file' ) ) {
            $file = Input::file ( 'file' );
            $randomName=rand(1, 9999).$file->getClientOriginalName ();
            $file->move ( 'uploads/earring' , $randomName );
        }

        $earring_name = $randomName;

        DB::table ( 'earrings' )->where ( 'earring_id' , $id )->update ( [
            "earring_name" => $earring_name ,
            "earring_price" => $req->input ( 'earring_price' ) ,
            "description" => $req->input ( 'description' ) ,
            "check" => $req->input ( 'check' )
        ] );
    }
}
