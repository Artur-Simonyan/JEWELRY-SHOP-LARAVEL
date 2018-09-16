<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class NecklacesController extends Controller
{
    public function index ()
    {
        $necklacesList = App\Necklace::necklaceList ();
        return view ( 'catalog/necklacesCatalog' , compact ( 'necklacesList' ) );
    }

    public function store ()
    {
        $necklace = App\Necklace::store ();
        return view ( 'crud/create' , compact ( 'necklace' ) );
    }

    public function create ( Request $req )
    {
       $necklaces_name=App\Necklace::creating ($req);
        return redirect ( '/necklacesCatalog' )->with ( 'necklaces_name' , $necklaces_name );
    }

    public function delete ( $id )
    {
        App\Necklace::deleted ($id);
        return redirect ( '/necklacesCatalog' );
    }

    public function edit ( $id )
    {
        $edit = App\Necklace::edit ($id);
        return view ( 'crud/edit' , compact ( 'edit' ) );
    }

    public function update ( Request $req , $id )
    {
        App\Necklace::updateNecklace ($req,$id);
        return redirect ( '/necklacesCatalog' );
    }
}
