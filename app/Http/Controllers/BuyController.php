<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyController extends Controller
{
    public function ring ( $id )
    {
        $buy = App\Buy::ring ($id);
        return view ( 'buy' , compact ( 'buy' ) );
    }

    public function necklace ( $id )
    {
        $buy = App\Buy::necklace ($id);
        return view ( 'buy' , compact ( 'buy' ) );
    }

    public function earring ( $id )
    {
        $buy = App\Buy::earring ($id);
        return view ( 'buy' , compact ( 'buy' ) );
    }

    public function bracelet ( $id )
    {
        $buy = App\Buy::bracelet ($id);
        return view ( 'buy' , compact ( 'buy' ) );
    }
}
