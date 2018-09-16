<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class RingController extends Controller
{
    public function index ()
    {
        $ringList = App\Ring::ringList ();
        return view ( 'catalog/ringCatalog' , compact ( 'ringList' ) );
    }

    public function delete ( $id )
    {
        App\Ring::deleted ( $id );
        return redirect ( '/ringCatalog' );
    }

    public function store ()
    {
        $ring = App\Ring::store ();
        return view ( 'crud/create' , compact ( 'ring' ) );
    }

    public function create ( Request $req )
    {
        App\Ring::creating ( $req );
        return redirect ( '/ringCatalog' );

    }

    public function edit ( $id )
    {
        $edit = App\Ring::edit ( $id );
        return view ( 'crud/edit' , compact ( 'edit' ) );
    }

    public function update ( Request $req , $id )
    {
        App\Ring::updateRing ( $req , $id );
        return redirect ( '/ringCatalog' );
    }
}
