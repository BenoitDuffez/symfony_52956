<?php

namespace App\Controller\Landing;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController {
  #[Route("/", name: "homepage")]
  public function homepage(): Response {
    return new Response('landing');
  }
}

