<?php

namespace App\Controller;

class ContactController
{
    public function showContactForm():void
    {
        require_once '../templates/contact.php';
    }
}