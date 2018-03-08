<?php

namespace AppBundle\Controller;

use AppBundle\Services\Helpers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }


    public function pruebasAction(){

        // 1. hacer consulta con em Doctrine
        $em = $this->getDoctrine()->getManager();
        $aziendeRepo = $em->getRepository('BackendBundle:Aziende');
        $aziendes = $aziendeRepo->findAll();

        // 2. crear array y retorna json
        $helper = $this->get(Helpers::class);
        return $helper->json(array(
            'status'=> 'success',
            'aziendes' => $aziendes
        ));
    }



}
