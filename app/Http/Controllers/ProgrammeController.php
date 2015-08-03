<?php

namespace JAM\Http\Controllers;

use Storage;
use JAM\Http\Controllers\Controller;

class ProgrammeController extends Controller
{
    public function renderView()
    {
        return view('programme', ['title' => 'Speakers', 'bodyClass' => 'programme', 'speakers' => self::programmeData(),
            'url' => parent::getMetaUrl()]);
    }

    private static function programmeData()
    {
        $speakerData = parent::getSpeakers();

        $data = [];

        foreach ($speakerData as $name => $info) {
            $contentTimestamp = strtotime($info['programme']['time']);

            $info['name'] = $name;
            $info['biog'] = Storage::disk('local')->get('/bios/' . $info['bio'] . '.html');
            $info['topic']['description'] = Storage::disk('local')->get('/topics/' . $info['bio'] . '.html');
            $data[$contentTimestamp] = $info;
        }

//        ksort($data);

        return $data;
    }
}