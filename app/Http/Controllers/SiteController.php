<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function homepage()
    {
        return view('site.homepage');
    }

    public function about()
    {
        return view('site.about');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function propertyMaintenance()
    {
        return view('site.services.propertymaintenance');
    }

    public function landscaping()
    {
        return view('site.services.landscaping');
    }

    public function cabinetMaking()
    {
        return view('site.services.cabinetmaking');
    }

    public function electrical()
    {
        return view('site.services.electrical');
    }

    public function security()
    {
        return view('site.services.security');
    }

    public function shopFitting()
    {
        return view('site.services.shopfitting');
    }
}
