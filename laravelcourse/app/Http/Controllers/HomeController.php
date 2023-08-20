<?php
 
namespace App\Http\Controllers;

use Illuminate\View\View;
 
class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function contact(): View
    {
        $viewData = [];
        $viewData["title"] = "Contact - Online Store";
        $viewData["subtitle"] =  "Contact information";
        $viewData["email"] = "mapis@onlinestore.com";
        $viewData["address"] = "Cra 24 N.32 sur";
        $viewData["phoneNumber"] = "301 273 2938";
        return view('home.contact')->with("viewData", $viewData);

    }
}

