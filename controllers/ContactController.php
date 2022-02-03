<?php

namespace Controllers;

use Core\ViewLoader;

class ContactController extends AbstractController
{
    public function getIndex(): void
    {
        ViewLoader::getInstance()->render(
            'Layout/layout.html',
            ['buttons' => self::getMenu(), 'content' => 'Layout/contact.html']
        );
    }
}
