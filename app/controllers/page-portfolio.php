<?php

namespace App;

use WP_Query;

use Sober\Controller\Controller;

class PagePortfolio extends Controller
{
    public function projects()
    {
        $args = array('post_type' => 'project', 'posts_per_page' => 3);
        return new WP_Query($args);
    }

    public function projectTypes()
    {
        return get_terms([
            'taxonomy' => 'project_type',
            'hide_empty' => false,
        ]);
    }
}