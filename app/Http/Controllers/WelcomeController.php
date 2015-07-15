<?php

namespace JAM\Http\Controllers;

use JAM\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function renderView()
    {
        return view('welcome', ['title' => 'Welcome', 'bodyClass' => 'welcome', 'speakers' => parent::getSpeakers()]);
    }
}