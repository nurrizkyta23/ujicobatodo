<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function home(Request $request): RedirectResponse | view
    {
        if ($request->session()->exists("user")) {
            return redirect("/todolist");
        } else {
            return view ("user.landing");
        }
    }
}
