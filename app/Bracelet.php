<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Bracelet extends Model
{
    public static function braceletList(){
        return DB::table ( 'bracelets' )->paginate ( 10 );
    }

    public static function deleted ( $id ){
        return  DB::table ( 'bracelets' )->where ( 'bracelet_id' , $id )->delete ();
    }

    public static function store(){
        return DB::table ( 'bracelets' )->get ()->first ();
    }

    public static function creating ( $req){
        if ( Input::hasFile ( 'file' ) ) {
            $file = Input::file ( 'file' );
            $randomName=rand(1, 9999).$file->getClientOriginalName ();
            $file->move ( 'uploads/bracelets' , $randomName );
        }

        $bracelet_name = $randomName;
        $description = $req->input ( 'description' );
        $bracelet_price = $req->input ( 'bracelet_price' );
        $check = $req->input ( 'check' );

        $data = array ( "bracelet_name" => $bracelet_name , "description" => $description , "bracelet_price" => $bracelet_price , "check" => $check );
        DB::table ( 'bracelets' )->insert ( $data );
        return $bracelet_name;
    }

    public static function edit($id){
      return  DB::table ( 'bracelets' )->where ( 'bracelet_id' , $id )->first ();
    }

    public static function updateBracelet($req,$id){
        if ( Input::hasFile ( 'file' ) ) {
            $file = Input::file ( 'file' );
            $randomName=rand(1, 9999).$file->getClientOriginalName ();
            $file->move ( 'uploads/bracelets' , $randomName );
        }

        $bracelet_name = $randomName;

        DB::table ( 'bracelets' )->where ( 'bracelet_id' , $id )->update ( [
            'bracelet_name' => $bracelet_name ,
            'bracelet_price' => $req->input ( 'bracelet_price' ) ,
            'description' => $req->input ( 'description' ) ,
            'check' => $req->input ( 'check' )
        ] );
    }

}
