<?php

namespace JAM\Http\Controllers;

use JAM\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function renderView()
    {
        return view('welcome', ['title' => 'Welcome', 'bodyClass' => 'welcome', 'speakers' => self::getSpeakers()]);
    }

    private static function getSpeakers()
    {
        return [
            'Scott Weiss' => ['img' => 'scott-weiss.jpg', 'position' => 'VP Design', 'company' => 'SwiftKey', 'link' => 'http://swiftkey.com/en/', 'id' => 'swiftkey'],
            'Rachel Ilan Simpson' => ['img' => 'rachel-ilan-simpson.png', 'position' => 'UX Designer', 'company' => 'Google Chrome Team', 'link' => 'https://www.google.co.uk/about/company/', 'id' => 'google-chrome-team'],
            'James Gill' => ['img' => 'james-gill.png', 'position' => 'CEO', 'company' => 'GoSquared', 'link' => 'https://www.gosquared.com/', 'id' => 'gosquared'],
            'Pip Jamieson' => ['img' => 'pip-jamieson.png', 'position' => 'Founder', 'company' => 'The Dots', 'link' => 'https://the-dots.co.uk/', 'id' => 'the-dots'],
            'Graham Paterson' => ['img' => 'graham-paterson.jpg', 'position' => 'Product Manager', 'company' => 'Transferwise', 'link' => 'https://transferwise.com/', 'id' => 'transferwise'],
            'Karolis Kosas' => ['img' => 'karolis-kosas.png', 'position' => 'Creative Director', 'company' => 'YPlan', 'link' => 'https://yplanapp.com/', 'id' => 'yplan'],
            'Anna Wojnarowska' => ['img' => 'anna-wojnarowska.png', 'position' => 'User Researcher', 'company' => 'Government Digital Service', 'link' => 'https://gds.blog.gov.uk/', 'id' => 'government-digital-service'],
            'Will Swannell' => ['img' => 'will-swannell.png', 'position' => 'Founder & CEO', 'company' => 'Hire Space', 'link' => 'https://hirespace.com/', 'id' => 'hire-space'],
            'Tim Davey' => ['img' => 'tim-davey.png', 'position' => 'Co-Founder &amp; Head of Product', 'company' => 'OneFineStay', 'link' => 'http://www.onefinestay.com/', 'id' => 'onefinestay'],
        ];
    }
}