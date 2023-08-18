<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function __invoke(){
        Dealer::create(
           [
               'title' => 'title',
               'slug' => 'autosalon_ex2',
               'city' => 'city',
               'user_id' => 1,
           ]
        );
        $dealers = Dealer::all();
        dd($dealers);
    }
}
