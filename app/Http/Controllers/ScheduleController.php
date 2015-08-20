<?php

namespace JAM\Http\Controllers;

use Storage;
use JAM\Http\Controllers\Controller;

class ScheduleController extends Controller
{
    public function renderView()
    {
        return view('schedule', ['title' => 'Schedule', 'bodyClass' => 'schedule', 'speakers' => self::scheduleData(),
            'url' => parent::getMetaUrl()]);
    }

    private static function scheduleData()
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