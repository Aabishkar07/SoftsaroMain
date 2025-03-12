<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {

        return view("frontend.home.index");
    }

    public function portfolio()
    {

        return view("frontend.portfolio.index");
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
