<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ProgramController extends AbstractController
{
    /**
     * @Route("/program/", name="program_index", methods={"GET"})
     */
  public function index(): Response
  {
    return $this->render('program/index.html.twig', ['website' => 'Wild Series']);
  }

      /**
     * @Route("/program/{id}", name="program_show", methods={"GET"}, requirements={"id"="\d+"})
     */
  public function show(int $id): Response
  {
    return $this->render('program/show.html.twig', ['id' => $id]);
  }
}