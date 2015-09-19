<?php

namespace JAM\Http\Controllers;

use Storage;
use JAM\Http\Controllers\Controller;

class ScheduleController extends Controller
{
    public function renderView()
    {
        return view('schedule', ['title' => 'Schedule', 'bodyClass' => 'schedule', 'schedule' => self::scheduleData(),
            'showEarlyBirds' => parent::showEarlyBirds(),
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
            '9:00 am' => 'Registration + Breakfast',
            '9:45 am' => 'Welcome',
            '10:40 am' => 'Q&amp;A - Ask Them Anything',
            '10:55 am' => 'Sponsors Intro',
            '11:00 am' => 'Coffee Break',
            '12:10 pm' => 'Q&amp;A - Ask Them Anything',
            '12:25 pm' => 'Sponsors Intro',
            '12:30 pm' => 'Lunch',
            '2:10 pm' => 'Q&amp;A - Ask Them Anything',
            '2:25 pm' => 'Sponsors Intro',
            '2:30 pm' => 'Coffee Break',
            '3:40 pm' => 'Q&amp;A - Ask Them Anything',
//            '3:55 pm' => 'Competition Givaways',
            '3:55 pm' => 'Coffee Break',
            '5:05 pm' => 'Q&amp;A - Ask Them Anything',
            '5:20 pm' => 'Closing Words',
            '5:30 pm' => 'Drinks'
        ];

        return $additionalSchedule;
    }
}