<?php

namespace App\Controller;

use App\Controller\AbstractController;

class CarController extends AbstractController
{
    public function showReservationDetails($param):void
    {
        $this->render('reservation',['id'=>$param['id']]);
    }
}