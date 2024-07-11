<?php

namespace App\Controller\Front;


use App\Controller\Front\AbstractController;

class CarController extends AbstractController
{
    public function showReservationDetails($param):void
    {
        $this->render('/front/reservation',['id'=>$param['id']]);
    }
}