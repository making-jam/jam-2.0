<?php

namespace JAM\Http\Controllers;

use Storage;
use JAM\Http\Controllers\Controller;

class ProgrammeController extends Controller
{
    public function renderView()
    {
        return view('programme', ['title' => 'Programme', 'bodyClass' => 'programme', 'speakers' => self::programmeData()]);
    }

    private static function programmeData()
    {
        $speakerData = parent::getSpeakers();

        $data = [];

        foreach ($speakerData as $name => $info) {
            $contentTimestamp = strtotime($info['programme']['time']);

            $info['name'] = $name;
            $info['biog'] = Storage::disk('local')->get('/bios/' . $info['bio'] . '.html');
            $data[$contentTimestamp] = $info;
        }

        ksort($data);

        return $data;
    }
}