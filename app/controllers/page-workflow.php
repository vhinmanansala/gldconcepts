<?php

namespace App;

use WP_Query;

use Sober\Controller\Controller;

class PageWorkflow extends Controller
{
    public function workflows()
    {
        return get_field('workflow');
    }

    public function callToActionTitle()
    {
        return get_field('call_to_action_title');
    }

    public function callToActionText()
    {
        return get_field('call_to_action_text');
    }

    public function callToActionLink()
    {
        return get_field('call_to_action_link');
    }
}