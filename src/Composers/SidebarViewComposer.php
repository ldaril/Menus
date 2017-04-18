<?php

namespace TypiCMS\Modules\Menus\Composers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Sidebar\SidebarGroup;
use Maatwebsite\Sidebar\SidebarItem;

class SidebarViewComposer
{
    public function compose(View $view)
    {
        $view->sidebar->group(__('Content'), function (SidebarGroup $group) {
            $group->addItem(__('menus::global.name'), function (SidebarItem $item) {
                $item->id = 'menus';
                $item->icon = config('typicms.menus.sidebar.icon', 'icon fa fa-fw fa-bars');
                $item->weight = config('typicms.menus.sidebar.weight');
                $item->route('admin::index-menus');
                $item->append('admin::create-menu');
                $item->authorize(
                    Gate::allows('index-menus')
                );
            });
        });
    }
}
