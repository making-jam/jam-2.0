<?php

namespace JAM\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    public static function getMetaUrl()
    {
        return 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}/";
    }

    protected static function showEarlyBirds()
    {
        $today = time();
        $earlyBirdEnds = strtotime('13 September 2015');

        return $today < $earlyBirdEnds;
    }

    public static function getSpeakers()
    {
        return [
            'Scott Weiss' => ['img' => 'scott-weiss.jpg', 'position' => 'VP Design',
                'programme' => ['time' => '1:20 pm', 'topic' => 'Design at Swiftkey'],
                'company' => 'SwiftKey', 'link' => 'http://swiftkey.com/en/', 'id' => 'swiftkey',
                'bio' => 'scott-weiss'],
            'Rachel Ilan Simpson' => ['img' => 'rachel-ilan-simpson.jpg', 'position' => 'UX Designer',
                'programme' => ['time' => '4:55 pm', 'topic' => 'Research for the rest'],
                'company' => 'Google Chrome Team', 'link' => 'https://www.google.co.uk/about/company/', 'id' => 'google-chrome-team',
                'bio' => 'rachel-ilan-simpson'],
            'James Gill' => ['img' => 'james-gill.jpg', 'position' => 'CEO',
                'programme' => ['time' => '10:10 am', 'topic' => 'First impressions count – designing a better onboarding process'],
                'company' => 'GoSquared', 'link' => 'https://www.gosquared.com/', 'id' => 'gosquared',
                'bio' => 'james-gill'],
            'Pip Jamieson' => ['img' => 'pip-jamieson.jpg', 'position' => 'Founder',
                'programme' => ['time' => '9:50 am', 'topic' => 'The 10 product lessons I learnt the hard way'],
                'company' => 'The Dots', 'link' => 'https://the-dots.co.uk/', 'id' => 'the-dots',
                'bio' => 'pip-jamieson'],
            'Graham Paterson' => ['img' => 'graham-paterson.jpg', 'position' => 'Product Manager',
                'programme' => ['time' => '3:10 pm', 'topic' => 'How to use data to drive emotional responses in users'],
                'company' => 'Transferwise', 'link' => 'https://transferwise.com/', 'id' => 'transferwise',
                'bio' => 'graham-paterson'],
            'Karolis Kosas' => ['img' => 'karolis-kosas.jpg', 'position' => 'Creative Director',
                'programme' => ['time' => '11:40 am', 'topic' => 'Perception vs Reality: How to reconcile product’s perception and the needs of its customers'],
                'company' => 'YPlan', 'link' => 'https://yplanapp.com/', 'id' => 'yplan',
                'bio' => 'karolis-kosas'],
            'Tim Davey' => ['img' => 'tim-davey.jpg', 'position' => 'Co-Founder &amp; Head of Product',
                'programme' => ['time' => '1:40 pm', 'topic' => 'Getting the culture right'],
                'company' => 'OneFineStay', 'link' => 'http://www.onefinestay.com/', 'id' => 'onefinestay',
                'bio' => 'tim-davey'],
            'Anna Wojnarowska' => ['img' => 'anna-wojnarowska.jpg', 'position' => 'User Researcher',
                'programme' => ['time' => '2:50 pm', 'topic' => 'Putting people at the heart of government'],
                'company' => 'Government Digital Service', 'link' => 'https://gds.blog.gov.uk/', 'id' => 'government-digital-service',
                'bio' => 'anna-wojnarowska'],
            'Will Swannell' => ['img' => 'will-swannell.jpg', 'position' => 'Founder & CEO',
                'programme' => ['time' => '11:20 am', 'topic' => 'Where do good products roadmaps come from?'],
                'company' => 'Hire Space', 'link' => 'https://hirespace.com/', 'id' => 'hire-space',
                'bio' => 'will-swannell'],
        ];
    }
}
