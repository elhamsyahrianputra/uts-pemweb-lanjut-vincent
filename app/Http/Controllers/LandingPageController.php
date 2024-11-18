<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Portfolio;
use App\Models\SocialMedia;

class LandingPageController extends Controller
{
    public function index() {
        return view('landing-page.index', [
            'profile' => Profile::first(),
            'portfolios' => Portfolio::all(),
            'social_media' => SocialMedia::all(),
        ]);
    }

    public function gallery() {
        return view('gallery.index', [
            'profile' => Profile::first(),
            'social_media' => SocialMedia::all(),
        ]);
    }
}
