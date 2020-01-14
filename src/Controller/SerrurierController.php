<?php

namespace App\Controller;

use App\Repository\VillesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
