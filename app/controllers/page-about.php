<?php

namespace App;

use Sober\Controller\Controller;

class PageAbout extends Controller
{
    public function additionalInfos()
    {
        return get_field('additional_infos');
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