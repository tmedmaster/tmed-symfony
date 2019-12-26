<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {

    /**
     * @Route("/hello/{prenom}/age/{age}", name="hello", requirements={"age"="\d+"})
     * @Route("/hello/{prenom}/{age}", name = "hello_prenom")
     * @Route("/hello", name = "hello_base")
     * Montre la page qui dit bonjour
     */
    public function hello($prenom = "anonyme", $age = 0) {
        return $this->render(
            'hello.html.twig',
            [
                'title' => "hello", 
                'prenom' => $prenom,
                'age' => $age
            ]

        );
    }

    /**
     * @Route("/hello/{prenom}/age/{age}", name="er_age")
     * Montre la page qui l erreur de l 'age
     */
    public function erage($prenom = "anonyme") {
        return new Response("Bonjour " . $prenom . " Vous avez tapez indefine age !!!");
    }

    /**
     * @Route("/", name="homepage")
     */
    public function home(){

        $prenom = ['Tmed' => 34, 'Amina' => 22 , 'Jamal' => 37];

        return $this->render(
            'home.html.twig',
            [
                'title' => "Tmedmonde web site", 
                'sousTitle' => "Mohammed", 
                'age' => 11,
                'tableau' => $prenom
            ]
        );
    }

    
}


?>