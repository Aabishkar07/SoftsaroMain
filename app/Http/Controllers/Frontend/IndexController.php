<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Store;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class IndexController extends Controller
{
    //
    public function index()
    {
        $clients = Partner::get();
        return view("frontend.home.index", compact('clients'));
    }

    public function portfolio()
    {

        return view("frontend.portfolio.index");
    }


    public function aboutus()
    {
        $clients = Partner::get();

        return view("frontend.about.index", compact('clients'));
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

    public function store()
    {
        $stores = Store::get();
        return view("frontend.store.index", compact('stores'));
    }

        public function storesingle($slug)
        {

            $store = Store::where('slug', $slug)->firstOrFail(); // Find by slug


            return view('frontend.store.single', compact('store'));
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
