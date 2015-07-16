<?php

namespace JAM\Http\Controllers;

use JAM\Http\Controllers\Controller;

class SponsorsController extends Controller
{
    public function renderView()
    {
        return view('sponsors', ['title' => 'Sponsors', 'bodyClass' => 'sponsors',
            'url' => parent::getMetaUrl()]);
    }
}