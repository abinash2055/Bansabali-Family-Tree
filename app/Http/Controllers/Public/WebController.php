<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class WebController extends Controller
{
    // FOR HOME PAGE CONTROLLER
    public function home()
    {
        return view('frontend.pages.home');
    }

    // FOR ABOUT PAGE CONTROLLER
    public function about()
    {
        return view('frontend.pages.about');
    }

    // FOR OUR MEMBER PAGE CONTROLLER
    public function member()
    {
        return view('frontend.pages.member');
    }

    // FOR OUR CULTURE PAGE CONTROLLER
    public function culture()
    {
        return view('frontend.pages.culture');
    }

    // FOR OUR NEWS AND EVENTS PAGE CONTROLLER
    public function blogs()
    {
        return view('frontend.pages.blogs');
    }

    // FOR CONTACT PAGE CONTROLLER
    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
