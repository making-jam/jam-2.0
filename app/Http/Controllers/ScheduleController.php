<?php

namespace JAM\Http\Controllers;

use Storage;
use JAM\Http\Controllers\Controller;

class ScheduleController extends Controller
{
    public function renderView()
    {
        return view('schedule', ['title' => 'Schedule', 'bodyClass' => 'schedule', 'schedule' => self::scheduleData(),
            'url' => parent::getMetaUrl()]);
    }

    private static function scheduleData()
    {
        $speakerData = parent::getSpeakers();

        $data = [];

        foreach ($speakerData as $name => $info) {
            $contentTimestamp = strtotime($info['programme']['time']);

            $info['name'] = $name;
            $info['firstName'] = explode(' ', $name)[0];
            $info['biog'] = Storage::disk('local')->get('/bios/' . $info['bio'] . '.html');
            $info['topic']['description'] = Storage::disk('local')->get('/topics/' . $info['bio'] . '.html');
            $data[$contentTimestamp] = $info;
        }

        foreach (self::generateNonSpeakerSchedule() as $time => $title) {
            $data[strtotime($time)] = ['programme' => [
                'time' => $time,
                'topic' => $title
            ]];
        }

        ksort($data);

        return $data;
    }

    private static function generateNonSpeakerSchedule()
    {
        $additionalSchedule = [
            '9:00 am' => 'Checkin + coffee',
            '9:30 am' => 'Welcome Speech',
            '10:30 am' => 'QA',
            '10:45 am' => 'Sponsors Intro',
            '10:50 am' => 'Coffee Break',
            '12:00 pm' => 'QA',
            '12:15 pm' => 'Sponsors Intro',
            '12:20 pm' => 'Lunch',
            '2:00 pm' => 'QA',
            '2:15 pm' => 'Sponsors Intro',
            '2:20 pm' => 'Coffee Break',
            '3:30 pm' => 'QA',
            '3:45 pm' => 'Competition Givaways',
            '3:55 pm' => 'Coffe Break',
            '5:45 pm' => 'QA',
            '6:00 pm' => 'Closing Words',
            '6:15 pm' => 'Drinks'
        ];

        return $additionalSchedule;
    }
}