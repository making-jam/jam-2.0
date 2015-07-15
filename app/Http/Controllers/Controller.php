<?php

namespace JAM\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    public static function getSpeakers()
    {
        return [
            'Scott Weiss' => ['img' => 'scott-weiss.jpg', 'position' => 'VP Design',
                'programme' => ['time' => '9:00 am', 'topic' => 'Data-Driven Design'],
                'company' => 'SwiftKey', 'link' => 'http://swiftkey.com/en/', 'id' => 'swiftkey'],
            'Rachel Ilan Simpson' => ['img' => 'rachel-ilan-simpson.png', 'position' => 'UX Designer',
                'programme' => ['time' => '10:00 am', 'topic' => 'Data-Driven Design'],
                'company' => 'Google Chrome Team', 'link' => 'https://www.google.co.uk/about/company/', 'id' => 'google-chrome-team'],
            'James Gill' => ['img' => 'james-gill.png', 'position' => 'CEO',
                'programme' => ['time' => '1:00 pm', 'topic' => 'Data-Driven Design'],
                'company' => 'GoSquared', 'link' => 'https://www.gosquared.com/', 'id' => 'gosquared'],
            'Pip Jamieson' => ['img' => 'pip-jamieson.png', 'position' => 'Founder',
                'programme' => ['time' => '2:00 pm', 'topic' => 'Data-Driven Design'],
                'company' => 'The Dots', 'link' => 'https://the-dots.co.uk/', 'id' => 'the-dots'],
            'Graham Paterson' => ['img' => 'graham-paterson.jpg', 'position' => 'Product Manager',
                'programme' => ['time' => '5:00 pm', 'topic' => 'Data-Driven Design'],
                'company' => 'Transferwise', 'link' => 'https://transferwise.com/', 'id' => 'transferwise'],
            'Karolis Kosas' => ['img' => 'karolis-kosas.png', 'position' => 'Creative Director',
                'programme' => ['time' => '4:00 pm', 'topic' => 'Data-Driven Design'],
                'company' => 'YPlan', 'link' => 'https://yplanapp.com/', 'id' => 'yplan'],
            'Anna Wojnarowska' => ['img' => 'anna-wojnarowska.png', 'position' => 'User Researcher',
                'programme' => ['time' => '3:00 pm', 'topic' => 'Data-Driven Design'],
                'company' => 'Government Digital Service', 'link' => 'https://gds.blog.gov.uk/', 'id' => 'government-digital-service'],
            'Will Swannell' => ['img' => 'will-swannell.png', 'position' => 'Founder & CEO',
                'programme' => ['time' => '12:00 pm', 'topic' => 'Data-Driven Design'],
                'company' => 'Hire Space', 'link' => 'https://hirespace.com/', 'id' => 'hire-space'],
            'Tim Davey' => ['img' => 'tim-davey.png', 'position' => 'Co-Founder &amp; Head of Product',
                'programme' => ['time' => '11:00 am', 'topic' => 'Data-Driven Design'],
                'company' => 'OneFineStay', 'link' => 'http://www.onefinestay.com/', 'id' => 'onefinestay'],
        ];
    }
}
