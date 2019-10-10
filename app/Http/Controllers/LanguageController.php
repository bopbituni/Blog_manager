<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLang(Request $request)
    {
        Session::put('language', $request->language);

        return redirect()->back();
    }
}
