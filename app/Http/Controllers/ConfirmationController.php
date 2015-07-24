<?php

namespace JAM\Http\Controllers;

use JAM\Http\Controllers\Controller;

class ConfirmationController extends Controller
{
    public function renderView()
    {
        return view('confirmation', ['title' => 'Thank you!', 'bodyClass' => 'confirmation',
            'url' => parent::getMetaUrl(),
            'tweetText' => urlencode('I\'m going to #JAM2015! Join me to hear the stories behind great products.'),
            'tweetUrl' => urlencode('http://www.jam2015.london')]);
    }
}