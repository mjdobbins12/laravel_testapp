<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('welcome')->with([
                    'message' => request('message'),
                    'faves' => [
                        'Himelvaruwe',
                        'Vulture Priest',
                        'Kaffaljidhma',
                        'Starless Domain'
                    ]
                ]);
    }

    public function contact() {
        return view('contact');
    }

    public function about() {
        return view('about');
    }
}
