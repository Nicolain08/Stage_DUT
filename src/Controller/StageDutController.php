<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StageDutController extends AbstractController
{
    public function index()
    {
        return $this->render('stage_dut/index.html.twig', [
            'controller_name' => 'StageDutController',
        ]);
    }
}
