<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function __invoke(){
//        Site::create(
//           [
//               'favicon_image' => 'favicon_image',
//               'dealer_id' => 1,
//               'user_id' => 1,
//           ]
//        );
        $sites = Site::find(2)->dealer;
        //belongsToMany
        $feed = Site::find(2)->feed;
        //belongsToMany
        dd($feed);

    }
}
