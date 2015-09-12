<?php

namespace JAM\Http\Controllers;

use JAM\Http\Controllers\Controller;

class CodeOfConductController extends Controller
{
    public function renderView()
    {
        return view('codeOfConduct', ['title' => 'Code of Conduct', 'bodyClass' => 'code-of-conduct',
            'showEarlyBirds' => parent::showEarlyBirds(),
            'url' => parent::getMetaUrl()]);
    }
}