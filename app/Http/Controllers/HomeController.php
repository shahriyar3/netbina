<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * return dashboard view
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('home');
    }

    public function show(Request $request)
    {
        $count = count(explode("\n", $request->body));
        return back()->with('message', $count)->withInput(['body']);
    }
}
