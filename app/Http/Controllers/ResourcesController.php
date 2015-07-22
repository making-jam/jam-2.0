<?php

namespace JAM\Http\Controllers;

use Storage;
use JAM\Http\Controllers\Controller;

class ResourcesController extends Controller
{
    private $resources;

    public function renderView($name = false)
    {
        $this->getResources($name);

        return view('resources', ['title' => 'Resources', 'bodyClass' => 'resources', 'resources' => $this->resources,
            'url' => parent::getMetaUrl(), 'ogMeta' => $this->getOgMeta()]);
    }

    private function getResources($name = false)
    {
        $files = $name ? ['resources/' . $name . '.json'] : Storage::files('resources');

        foreach ($files as $path) {
            // This gets the file name from the current file path.
            $fileContents = Storage::disk('local')->get($path);
            $content = json_decode($fileContents, true);
            $contentTimestamp = strtotime($content['date']);
            $today = strtotime(date('d F Y'));
            foreach ($content['tags'] as $k) {
                $tags[$k][] = '';
            }
            if ($contentTimestamp <= $today) {
                $data[$contentTimestamp] = $content;
            }
        }

        krsort($data);

        $this->resources = $data;
    }

    private function getOgMeta()
    {
        if (count($this->resources) > 1) {
            return false;
        } else {
            $meta = array_values($this->resources)[0];

            return [
                'desc' => $meta['desc'],
                'image' => $meta['image'],
                'title' => $meta['title'],
                'link' => $meta['link']
            ];
        }
    }
}