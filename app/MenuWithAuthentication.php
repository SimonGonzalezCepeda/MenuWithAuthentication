<?php


namespace MenuWithAuthentication;


use MenuWithAuthentication\Menu\MenuItem;

/**
 * Class MenuWithAuthentication
 * @package MenuWithAuthentication
 */
class MenuWithAuthentication
{
    /**
     * @var null
     */
    protected static $instance = null;
    /**
     * @var MenuItem[]
     */
    protected $menu;

    /**
     * MenuWithAuthentication constructor.
     */
    public function __construct()
    {

    }

    /**
     * @param $id
     * @return MenuItem
     */
    public static function menu($id)
    {
        return new MenuItem($id);
    }

    /**
     * Te asegures de que tú mateix et crees.
     * Aquest métode genera objectes STATICS de si mateix,
     * que s'asegura que es genere una sola vegada.
     * @param $id
     * @return null|static
     */
    public static function instance($id)
    {
        if(is_null(static::$instance)){
            return static::$instance = new static($id);
        }
        return static::$instance;
    }

    /**
     * @return mixed
     */
    public function getMenu()
    {
        return $this->menu->items();
    }
}