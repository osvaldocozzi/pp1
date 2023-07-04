<?php

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



public class ProductoController extends AbstractController
{
  /**
   *   @Route("/", name="listar_protuctos")
   * */  

 public function listarProdutos():Response
 {
    
    return $this->render('producto/lista.html.twig');

 }

}