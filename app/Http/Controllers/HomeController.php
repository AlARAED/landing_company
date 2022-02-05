<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $com=\App\CompanyInformation::find(1);
        $Contact=Contact::all()->take(3);
        $Order=Order::all()->take(3);

        return view('cpanel.home',compact('com','Order','Contact'));
//        return view('home');
    }
}
