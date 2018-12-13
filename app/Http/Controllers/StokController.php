<?php

namespace App\Http\Controllers;

use App\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function lists(){
        //Deneme
        return Stok::where("stokno",">",0)->where("kod","=","978..")->limit(20)->get();

    }
}
