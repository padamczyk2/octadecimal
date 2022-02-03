<?php

namespace Controllers;

use Core\ViewLoader;

class PortfolioController extends AbstractController
{

    public function getIndex(): void
    {
        ViewLoader::getInstance()->render(
            'Layout/layout.html',
            ['buttons' => self::getMenu(), 'content' => 'Layout/portfolio.html']
        );
    }
}
