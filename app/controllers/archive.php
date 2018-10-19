<?php

namespace App;

use WP_Query;

use Sober\Controller\Controller;

class Archive extends Controller
{
    public function projectTypes()
    {
        return get_terms([
            'taxonomy' => 'project_type',
            'hide_empty' => false,
        ]);
    }
}