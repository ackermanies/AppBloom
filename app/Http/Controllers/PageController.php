<?php

namespace App\Http\Controllers;

use App\Models\Application;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function apps()
    {
        $applications = Application::all();

        return view('pages.apps', compact('applications'));
    }

    public function show(Application $application)
    {
        return view('pages.show', compact('application'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}