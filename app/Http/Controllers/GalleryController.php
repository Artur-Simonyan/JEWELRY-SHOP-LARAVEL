<?php

namespace App\Http\Controllers;

use App;

class GalleryController extends Controller
{
    public function index(){
        $list = App\Gallery::index ();
        return view ( 'layouts/galleryLayout', compact ( 'list' ) );
    }

    public function earring(){
        $list = App\Gallery::earring ();
        return view ( 'gallery/earringGallery', compact ( 'list' ) );
    }

    public function ring(){
        $list = App\Gallery::ring ();
        return view ( 'gallery/ringGallery', compact ( 'list' ) );
    }

    public function necklaces(){
        $list = App\Gallery::necklace ();
        return view ( 'gallery/necklacesGallery', compact ( 'list' ) );
    }

    public function bracelet(){
        $list = App\Gallery::bracelet ();
        return view ( 'gallery/braceletsGallery', compact ( 'list' ) );
    }
}
