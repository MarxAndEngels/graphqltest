<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function __invoke(){
        $dealers = Dealer::all();
        dd($dealers);
    }
}
