<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Tentang;
use App\Models\Biodataku;
use Illuminate\Http\Request;

class FrondController extends Controller
{
    //
    public function index()
    {
        //
        $biodatakus=Biodataku::all();
        $tentangs=Tentang::all();
        $title = 'Biodata Diri';
        return view('landing_page',compact('biodatakus','title','tentangs'));

    }
}
