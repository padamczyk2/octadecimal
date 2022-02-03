<?php

namespace Controllers;

class AbstractController
{
    const MENU = [
        [
            'title' => 'Home',
            'url' => '/'
        ],
        [
            'title' => 'Portfolio',
            'url' => '/portfolio'
        ],
        [
            'title' => 'Contact',
            'url' => '/contact'
        ]
    ];

    public static function getMenu(): array
    {
        return self::MENU;
    }
}
