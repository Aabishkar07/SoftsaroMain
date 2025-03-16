<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
 $clients=Partner::get();
        return view("frontend.home.index",compact('clients'));
    }

    public function portfolio()
    {

        return view("frontend.portfolio.index");
    }


    public function aboutus()
    {

        return view("frontend.about.index");
    }



    public function services()
    {

        return view("frontend.services.index");
    }

    public function team()
    {

        return view("frontend.team.index");
    }

    public function contact()
    {

        return view("frontend.contact.index");
    }

    public function privacypolicy()
    {

        return view("frontend.company.privacypolicy");
    }

    public function termsandcondition()
    {

        return view("frontend.company.termsandcondition");
    }
}
