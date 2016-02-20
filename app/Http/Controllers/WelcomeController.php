<?php

namespace JAM\Http\Controllers;

use File;
use JAM\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function renderView()
    {
        return view('welcome', ['title' => 'Welcome', 'bodyClass' => 'welcome', 'speakers' => parent::getSpeakers(),
            'url' => parent::getMetaUrl(),
            'showEarlyBirds' => parent::showEarlyBirds(),
            'tweetText' => urlencode('Sharing the Stories Behind Great Products - #JAM2015'),
            'tweetUrl' => urlencode('http://www.jam2015.london'),
            'photos' => $this->getPhotos()]);
    }

    private function getPhotos()
    {
        $photos_src = File::files(public_path() . '/images/photos');
        $photos = [];
        $classes = ['default', 'big-height', 'bigger-height', 'biggest-height'];

        foreach ($photos_src as $path) {
            $path_exploded = explode('/', $path);
            $randomIndex = rand(0, (count($classes) - 1));

            array_push($photos, [
                'path' => end($path_exploded),
                'class' => $classes[$randomIndex]
            ]);
        }

        shuffle($photos);

        return array_slice($photos, 2);
    }
}