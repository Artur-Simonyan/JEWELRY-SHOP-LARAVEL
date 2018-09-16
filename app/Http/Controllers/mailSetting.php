<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use App\Mail\MailProductClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailSetting extends Controller
{
    public function index ()
    {
        return view ( 'contacts' );
    }

    public function send ( Request $req )
    {
        $name = $req->name;
        $email = $req->email;
        $msg = $req->msg;
        Mail::to ( 'smnnartur2@gmail.com' )->send ( new MailClass( $name , $email , $msg ) );
        return redirect ( '/contacts' );
    }

    public function sendProd ( Request $req )
    {
        $name = $req->name;
        $user = $req->user;
        $stone = $req->stone;
        $email = $req->email;
        $msg = $req->msg;
        $price = $req->price;
        Mail::to ( 'smnnartur2@gmail.com' )->send ( new MailProductClass( $name , $msg , $email , $user , $stone , $price ) );
        return redirect ( '/ringCatalog' );
    }
}
