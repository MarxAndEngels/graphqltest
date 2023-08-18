<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function __invoke(){
        Feed::create(
            [
                'link' => 'link',
                'date' => 'сегодня',
                'name' => 'vk',
            ]
        );
        $feeds = Feed::all();
        dd($feeds);
    }
}
