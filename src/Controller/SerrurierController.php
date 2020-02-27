<?php

namespace App\Controller;

use App\Entity\CodePostalSearch;
use App\Form\CodePostalSearchType;
use App\Repository\VillesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SerrurierController extends AbstractController
{
    /**
     * @Route("/serrurier", name="index_serrurier")
     */
    public function index()
    {
        return $this->render('serrurier/index.html.twig', [
            'controller_name' => 'SerrurierController',
        ]);
    }

    /**
     * @Route("/serrurierSearch", name="search")
     */
    public function serrurierSearch(Request $request)
    {
        $search = new CodePostalSearch();
        $form=$this->createForm(CodePostalSearchType::class,$search);
        $form->handleRequest($request);
        return $this->redirectToRoute('serrurier_code', ['codepostal'=>$request->query->get('searchCodePostal'),
            'form'=>$form]);
    }

    /**
     * @Route("/serrurier/{codepostal}", name="serrurier_code")
     */
    public function serrurierCode(VillesRepository $repo,$codepostal)
    {

        $ville = $repo->findByCodePostal($codepostal);
        if (!empty($ville)){
            return /*dd($ville)*/ $this->render('serrurier/serrurier_code.html.twig', [
                'villes' => $ville,'codepostal'=>$codepostal
            ]);
        }
        else{
           return /*dd($ville)*/ $this->render('error404.html.twig', [
               'villes' => $ville,'codepostal'=>$codepostal
           ]);
       }
    }

}
