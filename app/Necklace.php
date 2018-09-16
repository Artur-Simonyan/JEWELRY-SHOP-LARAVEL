<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Necklace extends Model
{
    public static function necklaceList(){
        return DB::table ( 'necklaces' )->paginate ( 10 );
    }

    public static function store(){
        return DB::table ( 'necklaces' )->get ()->first ();
    }

    public static function creating ( $req ){
        if ( Input::hasFile ( 'file' ) ) {
            $file = Input::file ( 'file' );
            $randomName=rand(1, 9999).$file->getClientOriginalName ();
            $file->move ( 'uploads/necklaces' , $randomName );
        }

        $necklaces_name =$randomName;
        $description = $req->input ( 'description' );
        $necklaces_price = $req->input ( 'necklaces_price' );
        $check = $req->input ( 'check' );

        $data = array ( "necklace_name" => $necklaces_name , "necklace_price" => $necklaces_price , "description" => $description , "check" => $check );
        DB::table ( 'necklaces' )->insert ( $data );
        return $necklaces_name;
    }

    public static function deleted ( $id ){
        return DB::table ( 'necklaces' )->where ( 'necklace_id' , $id )->delete ();
    }

    public static function edit($id){
        return DB::table ( 'necklaces' )->where ( 'necklace_id' , $id )->first ();
    }

    public static function updateNecklace($req,$id){
        if ( Input::hasFile ( 'file' ) ) {
            $file = Input::file ( 'file' );
            $randomName=rand(1, 9999).$file->getClientOriginalName ();
            $file->move ( 'uploads/necklaces' , $randomName );
        }
        $necklaces_name = $randomName;

        DB::table ( 'necklaces' )->where ( 'necklace_id' , $id )->update ( [
            'necklace_name' => $necklaces_name ,
            'description' => $req->input ( 'description' ) ,
            'necklace_price' => $req->input ( 'necklaces_price' ) ,
            'check' => $req->input ( 'check' )
        ] );
        return $necklaces_name;
    }
}
