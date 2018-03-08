<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 22/01/18
 * Time: 00:44
 */

namespace AppBundle\Controller;


use AppBundle\Services\Helpers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NewsController extends Controller
{

    public function listAction(Request $request)
    {

        // 1. hacer consulta con em Doctrine
        $em = $this->getDoctrine()->getManager();

        $query_type0 = $em->createQuery("SELECT n FROM BackendBundle:News n  WHERE n.type = 0 ORDER BY  n.id DESC");
        $query_type1 = $em->createQuery("SELECT n FROM BackendBundle:News n  WHERE n.type = 1 ORDER BY  n.id DESC");
        $query_type2 = $em->createQuery("SELECT n FROM BackendBundle:News n  WHERE n.type = 2 ORDER BY  n.id DESC");
        $query_type3 = $em->createQuery("SELECT n FROM BackendBundle:News n  WHERE n.type = 3 ORDER BY  n.id DESC");
        $query_type4 = $em->createQuery("SELECT n FROM BackendBundle:News n  WHERE n.type = 4 ORDER BY  n.id DESC");
        $query_type5 = $em->createQuery("SELECT n FROM BackendBundle:News n  WHERE n.type = 5 ORDER BY  n.id DESC");


        // 2. crear paginacion
        $paginator = $this->get("knp_paginator");
        $page = $request->query->getInt("page", 1);
        $item_per_page = 5;
        $pagination_type0 = $paginator->paginate($query_type0, $page, $item_per_page);
        $pagination_type1 = $paginator->paginate($query_type1, $page, $item_per_page);
        $pagination_type2 = $paginator->paginate($query_type2, $page, $item_per_page);
        $pagination_type3 = $paginator->paginate($query_type3, $page, $item_per_page);
        $pagination_type4 = $paginator->paginate($query_type4, $page, $item_per_page);
        $pagination_type5 = $paginator->paginate($query_type5, $page, $item_per_page);


        // 3.  crear array con datos
        $data = array(
            "status" => "success",
            "page_actual" => $page,
            "item_per_page" => $item_per_page,
            "type_0" => $pagination_type0,
            "type_1" => $pagination_type1,
            "type_2" => $pagination_type2,
            "type_3" => $pagination_type3,
            "type_4" => $pagination_type4,
            "type_5" => $pagination_type5,
        );


        // 4. retornar datos en json
        $helpers = $this->get(Helpers::class);
        return $helpers->json($data);
    }

}