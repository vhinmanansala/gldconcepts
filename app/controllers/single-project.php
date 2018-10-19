<?php

namespace App;

use Sober\Controller\Controller;

class SingleProject extends Controller
{
    public function galleryImages()
    {
        return get_field('images');
    }

    public function sizes()
    {
        return [
            ['width' => 290, 'height' => 300],
            ['width' => 590, 'height' => 300],
            ['width' => 590, 'height' => 590],
        ];
    }

    public function link()
    {
        return get_field('link');
    }
}