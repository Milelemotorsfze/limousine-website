<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function home()
    {
        return view('pages.home');
    }
    public function aboutUs()
    {
        return view('pages.aboutUs');
    }
    public function fleets()
    {
        return view('pages.fleets');
    }
    public function ourService()
    {
        return view('pages.service');
    }
    public function beOurDriverOrInvestor()
    {
        return view('pages.beOurDriverOrInvestor');
    }
    public function beOurCorporatePartner()
    {
        return view('pages.beOurCorporatePartner');
    }
}
