<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterLinkController extends Controller
{
    protected function getAbout(){
        return view('frontpages.about');
    }
    protected function privacyPolicy(){
        return view('frontpages.policy');
    }
    protected function getTerms(){
        return view('frontpages.terms');
    }
    protected function getHelp(){
        return view('frontpages.help');
    }
}
