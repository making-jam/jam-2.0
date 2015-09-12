<?php

namespace JAM\Http\Controllers;

use JAM\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function renderView()
    {
        return view('welcome', ['title' => 'Welcome', 'bodyClass' => 'welcome', 'speakers' => parent::getSpeakers(),
            'url' => parent::getMetaUrl(),
            'showEarlyBirds' => parent::showEarlyBirds(),
            'tweetText' => urlencode('Sharing the Stories Behind Great Products - #JAM2015'),
            'tweetUrl' => urlencode('http://www.jam2015.london')]);
    }
}