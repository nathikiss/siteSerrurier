<?php

namespace App\Controller;

use App\Entity\CodePostalSearch;
use App\Form\CodePostalSearchType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index(Request $request)
    {
        $search = new CodePostalSearch();
        $form=  $this->createForm(CodePostalSearchType::class,$search);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()){
        return $this->redirectToRoute('serrurier_code', ['codepostal'=>$request->query->get('searchCodePostal'),
            'form'=>$form]);
        }
        return  $this->render('index/index.html.twig',['form'=>$form->createView()]);
    }

}
