<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 21/01/18
 * Time: 10:36
 */

namespace AppBundle\Controller;

use AppBundle\Services\Helpers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AziendeController extends Controller
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

//    public function searchAction(Request $request, $param = null)
//    {
//        echo $param . " " . $_GET['citta'];
//        die();
//
//    }

    public function searchAction(Request $request, $param = null)
    {
        // 1. hacer consulta con em Doctrine  seleccionar aziende donde titolo ho tag LIKE %search%
        $em = $this->getDoctrine()->getManager();

        if ($param != null && isset($_GET['citta']))
            $query = $em->createQuery("SELECT a FROM BackendBundle:Aziende a WHERE (a.citta = :ciudad) AND (a.titolo LIKE :search OR a.tag LIKE :search) ORDER BY a.id DESC")
                ->setParameter("ciudad", $_GET['citta'])
                ->setParameter("search", "%$param%");
        else if ($param != null)
            $query = $em->createQuery("SELECT a FROM BackendBundle:Aziende a WHERE a.titolo LIKE :search OR a.tag LIKE :search ORDER BY a.id DESC")
                ->setParameter("search", "%$param%");
        else  $query = $em->createQuery("SELECT a FROM BackendBundle:Aziende a WHERE a.citta = :param ORDER BY a.id DESC")
                ->setParameter('param', $_GET['citta']);


        // 2. crear paginacion
        $paginator = $this->get("knp_paginator");
        $page = $request->query->getInt("page", 1); // recibir parametro page  GET
        $items_per_page = 10;
        $pagination = $paginator->paginate($query, $page, $items_per_page);
        $total_items_count = $pagination->getTotalItemCount();//  obtener total item


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


    public function resultAziendaCategoryAction(Request $request, $param = null)
    {
//        $_GET['citta'] = "milano";
        // 1. hacer consulta con em Doctrine selecionar aziende donde sottocategoria BETWEEN param1 AND param2
        $em = $this->getDoctrine()->getManager();


        switch ($param) {
            case 1:
                $query = $em->createQuery("SELECT a FROM BackendBundle:Aziende a  WHERE   (a.sottocategoria BETWEEN ?1 AND ?2) AND (a.citta = ?3) ORDER BY a.id DESC")
                    ->setParameter(1, 100)
                    ->setParameter(2, 199)
                    ->setParameter(3, $_GET['citta']);
                break;
            case 2:
                $query = $em->createQuery("SELECT a FROM BackendBundle:Aziende a  WHERE    (a.sottocategoria BETWEEN ?1 AND ?2) AND (a.citta = ?3) ORDER BY a.id DESC")
                    ->setParameter(1, 200)
                    ->setParameter(2, 299)
                    ->setParameter(3, $_GET['citta']);
                break;
            case 3:
                $query = $em->createQuery("SELECT a FROM BackendBundle:Aziende a  WHERE    (a.sottocategoria BETWEEN ?1 AND ?2) AND (a.citta = ?3) ORDER BY a.id DESC")
                    ->setParameter(1, 300)
                    ->setParameter(2, 399)
                    ->setParameter(3, $_GET['citta']);
                break;
            case 4:
                $query = $em->createQuery("SELECT a FROM BackendBundle:Aziende a  WHERE    (a.sottocategoria BETWEEN ?1 AND ?2) AND (a.citta = ?3) ORDER BY a.id DESC")
                    ->setParameter(1, 400)
                    ->setParameter(2, 499)
                    ->setParameter(3, $_GET['citta']);
                break;
            case 5:
                $query = $em->createQuery("SELECT a FROM BackendBundle:Aziende a  WHERE    (a.sottocategoria BETWEEN ?1 AND ?2) AND (a.citta = ?3) ORDER BY a.id DESC")
                    ->setParameter(1, 500)
                    ->setParameter(2, 599)
                    ->setParameter(3, $_GET['citta']);
                break;
            case 6:
                $query = $em->createQuery("SELECT a FROM BackendBundle:Aziende a  WHERE    (a.sottocategoria BETWEEN ?1 AND ?2) AND (a.citta = ?3) ORDER BY a.id DESC")
                    ->setParameter(1, 600)
                    ->setParameter(2, 699)
                    ->setParameter(3, $_GET['citta']);
                break;
            case 7:
                $query = $em->createQuery("SELECT a FROM BackendBundle:Aziende a  WHERE    (a.sottocategoria BETWEEN ?1 AND ?2) AND (a.citta = ?3) ORDER BY a.id DESC")
                    ->setParameter(1, 700)
                    ->setParameter(2, 799)
                    ->setParameter(3, $_GET['citta']);
                break;
            case 8:
                $query = $em->createQuery("SELECT a FROM BackendBundle:Aziende a  WHERE    (a.sottocategoria BETWEEN ?1 AND ?2) AND (a.citta = ?3) ORDER BY a.id DESC")
                    ->setParameter(1, 800)
                    ->setParameter(2, 899)
                    ->setParameter(3, $_GET['citta']);
                break;
            case 9:
                $query = $em->createQuery("SELECT a FROM BackendBundle:Aziende a  WHERE    (a.sottocategoria BETWEEN ?1 AND ?2) AND (a.citta = ?3) ORDER BY a.id DESC")
                    ->setParameter(1, 900)
                    ->setParameter(2, 999)
                    ->setParameter(3, $_GET['citta']);
                break;
            default:
                $query = $em->createQuery("SELECT a FROM BackendBundle:Aziende a WHERE a.citta = :param  ORDER BY a.id DESC")
                    ->setParameter('param', 'milano');
        }


        // 2. crear paginacion
        $paginator = $this->get("knp_paginator");
        $page = $request->query->getInt("page", 1); // recibir parametro page  GET
        $items_per_page = 10;
        $pagination = $paginator->paginate($query, $page, $items_per_page);
        $total_items_count = $pagination->getTotalItemCount();// obtener total item


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


    public function sottocategoriaAction(Request $request, $param = null)
    {
        // 1. hacer consulta con em Doctrine
        $em = $this->getDoctrine()->getManager();
        $categoria_repo = $em->getRepository('BackendBundle:Sottocategorie');
        if ($param != null)
            $query = $categoria_repo->findBy(array('categoria' => $param));
        else
            $query = $em->createQuery("SELECT s FROM BackendBundle:Sottocategorie s  ORDER BY s.id ASC ");


        // 2. crear paginacion
        $paginator = $this->get("knp_paginator");
        $page = $request->query->getInt("page", 1); //  recibir parametro page  GET
        $items_per_page = 10;
        $pagination = $paginator->paginate($query, $page, $items_per_page);
        $total_items_count = $pagination->getTotalItemCount();// obtener total item


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
        $helper = $this->get(Helpers::class);
        return $helper->json($data);

    }


    public function categoriaAction(Request $request)
    {
        // 1. hacer consulta con em Doctrine
        $em = $this->getDoctrine()->getManager();
        $categoria_repo = $em->getRepository('BackendBundle:Categorie');
        $query = $categoria_repo->findAll();

        // 2. crear array y retorna json
        $helper = $this->get(Helpers::class);
        return $helper->json(array(
            'status' => 'success',
            'categoria' => $query
        ));

    }


    public function detalleAction(Request $request, $id = null)
    {

        // 1. hacer consulta con em Doctrine
        $em = $this->getDoctrine()->getManager();
//        $query =$em->createQuery("SELECT a FROM BackendBundle:Aziende a WHERE a.id = :id")->setParameter("id", $id);
        $categoria_repo = $em->getRepository('BackendBundle:Aziende');
        $query = $categoria_repo->findOneBy(array('id' => $id));

        // 2. crear array y retorna json
        $helper = $this->get(Helpers::class);
        return $helper->json(array(
            'status' => 'success',
            'data' => $query
        ));

    }


    public function categorybkAction(Request $request, $param = null)
    {
        $helpers = $this->get(Helpers::class);
        $em = $this->getDoctrine()->getManager();
        $aziende_repo = $em->getRepository('BackendBundle:Aziende');

        if ($param != null) // 1. si  no esta vacio search GET
        {
            $query = $aziende_repo->createQueryBuilder("c")
                ->where("c.sottocategoria = :param")
                ->orderBy('c.id', 'ASC')
                ->setParameter("param", $param)
                ->getQuery();
//            $query = $aziende_repo->findBy(array('sottocategoria'=> $search));
        } else // sino selecciona todos videos
        {
            $dql = "SELECT v FROM BackendBundle:Aziende v ORDER BY v.id DESC";
            $query = $em->createQuery($dql);
        }


        $page = $request->query->getInt("page", 1); // 3. recibir parametro page  GET
        $items_per_page = 10;

        $paginator = $this->get("knp_paginator");
        $pagination = $paginator->paginate($query, $page, $items_per_page);// 4. crear paginacion
        $total_items_count = $pagination->getTotalItemCount();// 5. obtener total item

        // 6. crear array con datos
        $data = array(
            "status" => "success",
            "total_items_count" => $total_items_count,
            "page_actual" => $page,
            "items_per_page" => $items_per_page,
            "total_pages" => ceil($total_items_count / $items_per_page),
            "data" => $pagination
        );

        return $helpers->json($data);// 7. retornar datos en json
    }


}