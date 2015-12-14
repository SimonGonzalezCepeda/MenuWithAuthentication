<?php


namespace MenuWithAuthentication;


use MenuWithAuthentication\Menu\MenuItem;

class MenuWithAuthentication
{

    /**
     * MenuWithAuthentication constructor.
     */
    public function __construct()
    {

    }

    public static function menu($id)
    {
            return new MenuItem($id);
    }
}