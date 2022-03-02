<?php

namespace Config;

use Twig\Environment;

class Controller
{
    protected Environment $twig;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('../src/view');
        $this->twig = new \Twig\Environment($loader);
    }
}