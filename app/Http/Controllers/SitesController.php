<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function __invoke(){
        $sites = Site::find(1)->dealer;
        dd($sites);

    }
}
