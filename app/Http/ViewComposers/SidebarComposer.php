<?php

namespace App\Http\ViewComposers;



class SidebarComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('menu', array());
    }
}