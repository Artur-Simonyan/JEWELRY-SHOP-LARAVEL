<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class EarringController extends Controller
{
    public function index ()
    {
        $earringList = App\Earring::earringList ();
        return view ( 'catalog/earringCatalog' , compact ( 'earringList' ) );
    }

    public function store ()
    {
        $earring = App\Earring::store ();
        return view ( 'crud/create' , compact ( 'earring' ) );
    }

    public function create ( Request $req )
    {
        $earring_name=App\Earring::creating ($req);
        return redirect ( '/earringCatalog' )->with ( 'earring_name' , $earring_name );
    }

    public function delete ( $id )
    {
      App\Earring::deleted ($id);
        return redirect ( '/earringCatalog' );
    }

    public function edit ( $id )
    {
        $edit = App\Earring::edit ($id);
        return view ( 'crud/edit' , compact ( 'edit' ) );
    }

    public function update ( Request $req , $id )
    {
        App\Earring::updateEaring ($req,$id);
        return redirect ( '/earringCatalog' );
    }
}
