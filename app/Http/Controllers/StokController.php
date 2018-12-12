<?php

namespace App\Http\Controllers;

use App\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function lists(){
        
        Uretici::limit(100)->get();

        return Stok::where("stokno",">",0)->limit(20)->get();

    }
}
