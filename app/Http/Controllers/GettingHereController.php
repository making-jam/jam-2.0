<?php

namespace JAM\Http\Controllers;

use JAM\Http\Controllers\Controller;

class GettingHereController extends Controller
{
    public function renderView()
    {
        return view('getting-here', ['title' => 'Getting Here', 'bodyClass' => 'getting-here',
            'showEarlyBirds' => parent::showEarlyBirds(),
            'url' => parent::getMetaUrl()]);
    }
}