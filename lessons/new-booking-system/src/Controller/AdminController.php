<?php

namespace NewBookingSystem\Controller;

use Framework\Controller;

class AdminController extends Controller
{
    public function listEvent()
    {
        echo $this->twig->render('admin/events.html.twig');
    }
}