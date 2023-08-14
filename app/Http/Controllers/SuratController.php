<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Surat;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

class SuratController extends Controller
{
    /**
    * index
    *
    * @return View
    */
   public function index(): View
   {
       //get posts
       $surats = Surat::latest()->paginate(5);

       //render view with posts
       return view('surat.index', compact('surats'));
   }
}
