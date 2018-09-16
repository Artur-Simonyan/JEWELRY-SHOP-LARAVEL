<?php namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;

class AuthRequest extends Request
{
    public function authorize()
    {
        return (Auth::user()->is_admin) ? true : false;
    }
}