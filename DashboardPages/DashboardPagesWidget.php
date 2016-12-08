<?php

namespace Statamic\Addons\DashboardPages;

use Statamic\API\Str;
use Statamic\API\Page;
use Statamic\API\Collection;
use Statamic\API\Content;
use Statamic\Extend\Widget;

class DashboardPagesWidget extends Widget
{
    public function html()
    {

        if ($folder = $this->get('folder')) {
            $root = (Str::startsWith($folder, '/')) ? Page::whereUri($folder) : Page::find($folder);
            $pages = $root->children();
        } else {
            $pages = Page::all();
        }

        $pages = $pages->multisort('title:asc')
            ->removeUnpublished()
            ->limit( $this->getInt('limit', 5) );

        return $this->view('widget', compact('root', 'pages') );

    }
}
