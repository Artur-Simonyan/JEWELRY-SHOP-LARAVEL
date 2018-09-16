<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class BraceletController extends Controller
{
    public function index ()
    {
        $braceletList = App\Bracelet::braceletList ();
        return view ( 'catalog/braceletCatalog' , compact ( 'braceletList' ) );
    }

    public function delete ( $id )
    {
       App\Bracelet::deleted ($id);
        return redirect ( '/braceletCatalog' );
    }

    public function store ()
    {
        $bracelet = App\Bracelet::store ();
        return view ( 'crud/create' , compact ( 'bracelet' ) );
    }

    public function create ( Request $req )
    {
        $bracelet_name=App\Bracelet::creating ($req);
        return redirect ( '/braceletCatalog' )->with ( 'bracelet_name' , $bracelet_name );
    }

    public function edit ( $id )
    {
        $edit = App\Bracelet::edit ($id);
        return view ( 'crud/edit' , compact ( 'edit' ) );
    }

    public function update ( Request $req , $id )
    {
        App\Bracelet::updateBracelet ($req,$id);
        return redirect ( '/braceletCatalog' );
    }
}
