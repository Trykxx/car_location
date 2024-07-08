<?php

namespace App\Controller;

class CarController
{
    public function showReservationDetails($param):void
    {
        $id = $param['id'];
        require_once '../templates/reservation.php';
    }
}