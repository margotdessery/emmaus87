<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
    extends AbstractController
{

    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
       

        return $this->render( 'homepage/index.html.twig',
            [
                'pagetitle' => "Accueil",
                
            ] );
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render( 'contact/index.html.twig',
            [
                'pagetitle' => "Contact",
            ] );
    }

    /**
     * @Route("/presentation", name="presentation")
     */
    public function presentation()
    {
        return $this->render( 'presentation/index.html.twig',
            [
                'pagetitle' => "Présentation",
            ] );
    }


}
