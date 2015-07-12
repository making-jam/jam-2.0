<?php

namespace JAM\Http\Controllers;

use Storage;
//use Illuminate\Http\Request;
use JAM\Http\Controllers\Controller;

class ResourcesController extends Controller
{
    public function renderView()
    {
//        var_dump(self::getResources());
        return view('resources', ['title' => 'Resources', 'bodyClass' => 'resources', 'resources' => self::getResources()]);
    }

    private static function getResources()
    {
        $files = Storage::files('resources');

        foreach ($files as $path) {
            // This gets the file name from the current file path.
            $fileContents = Storage::disk('local')->get($path);
            $content = json_decode($fileContents, true);
            $contentTimestamp = strtotime($content["date"]);
            $today = strtotime(date("d F Y"));
//            array_push($this->map, $fileName);
            foreach ($content["tags"] as $k) {
                $tags[$k][] = "";
            }
            if ($contentTimestamp <= $today) {
                $data[$contentTimestamp] = $content;
            }
        }

        krsort($data);

        return $data;
    }
}