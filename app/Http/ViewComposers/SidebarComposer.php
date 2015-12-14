<?php

namespace MenuWithAuthentication\Http\ViewComposers;



use MenuWithAuthentication\MenuWithAuthentication;

class SidebarComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('menu', $this->getSideBarMenu());
    }

    private function getSideBarMenu()
    {
        $menu =
            MenuWithAuthentication::instance()
            ->getMenu();
        return array($menu);
    }
}