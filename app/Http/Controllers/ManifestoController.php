<?php

namespace JAM\Http\Controllers;

use JAM\Http\Controllers\Controller;

class ManifestoController extends Controller
{
    public function renderView()
    {
        return view('manifesto', ['title' => 'Manifesto', 'bodyClass' => 'manifesto', 'team' => self::teamData()]);
    }

    private static function teamData()
    {
        $team = [
            [
                'name' => 'Seb Powell',
                'photo' => 'seb-powell.jpg',
                'desc' => 'Head of Design. Amateur developer.',
                'linkedin' => 'sebastienpowell',
                'twitter' => 'sebpowell'
            ],
            [
                'name' => 'Slavo Vojacek',
                'photo' => 'slavo-vojacek.jpeg',
                'desc' => 'UX Designer &amp; Developer. Lover of fine English literature.',
                'linkedin' => 'slavomirvojacek',
                'twitter' => 'slavomirvojacek'
            ],
            [
                'name' => 'Mathilde Leo',
                'photo' => 'mathilde-leo.jpg',
                'desc' => 'Product Owner. Martial arts aficionado.',
                'linkedin' => 'mathildeleo',
                'twitter' => 'Mathilde_Leo'
            ]
        ];

        shuffle($team);

        return $team;
    }
}