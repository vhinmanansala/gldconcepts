<?php

namespace App;

use WP_Query;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function projects()
    {
        $args = array('post_type' => 'project', 'posts_per_page' => 3);
        return new WP_Query($args);
    }

    public function featuredProjectCategories()
    {
        return get_field('featured_project_categories', 'option');
    }
}
