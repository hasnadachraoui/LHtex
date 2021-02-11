<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController{
    public function index(){
        return $this->render('AdminIndex.html.twig');
    }
    public function order(){
        return $this->render('AdminOrder.html.twig');
    }
}?>