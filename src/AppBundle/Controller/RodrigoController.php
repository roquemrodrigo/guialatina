<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 08/03/18
 * Time: 03:06
 */

namespace AppBundle\Controller;

use AppBundle\Services\Helpers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class RodrigoController extends Controller
{

    public function listAction(Request $request)
    {
        // 1. hacer consulta con em Doctrine
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT a FROM BackendBundle:Aziende a ORDER BY a.id DESC";
        $query = $em->createQuery($dql);


        // 2. crear paginacion
        $paginator = $this->get("knp_paginator");
        $page = $request->query->getInt("page", 1); //  recibir parametro url app_dev.php/aziende/list?page=1
        $items_per_page = 20;
        $pagination = $paginator->paginate($query, $page, $items_per_page);
        $total_items_count = $pagination->getTotalItemCount();//  obtener total


        // 3. crear array con datos
        $data = array(
            "status" => "success",
            "total_items_count" => $total_items_count,
            "page_actual" => $page,
            "items_per_page" => $items_per_page,
            "total_pages" => ceil($total_items_count / $items_per_page),
            "data" => $pagination
        );


        // 4. retornar datos en json
        $helpers = $this->get(Helpers::class);
        return $helpers->json($data);
    }


}