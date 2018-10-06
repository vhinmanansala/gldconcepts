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
            ['width' => 290, 'height' => 290],
            ['width' => 580, 'height' => 290],
            ['width' => 580, 'height' => 580],
        ];
    }
}