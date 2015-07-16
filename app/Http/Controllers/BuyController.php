<?php

namespace JAM\Http\Controllers;

use JAM\Http\Controllers\Controller;

class BuyController extends Controller
{
    public function renderView()
    {
        return view('buy', ['title' => 'Get Your Early Bird Ticket', 'bodyClass' => 'buy',
            'url' => parent::getMetaUrl()]);
    }
}