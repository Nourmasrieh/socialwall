<?php

namespace NourAlmasrieh\SocialWall;

use SilverStripe\Admin\ModelAdmin;


class SocialModelAdmin extends ModelAdmin
{
    private static $managed_models = [
        AllConfSocial::class,
        FacebookProvider::class,
        InstagramProvider::class,
        AllPosts::class,
    ];
    private static $url_segment = 'socialadmin';
    private static $menu_title = 'Social Admin';
    private static $menu_icon_class = 'font-icon-thumbnails';
}
