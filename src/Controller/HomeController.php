<?php


namespace App\Controller;
//definit le nom de HomeController , aide à eviter les conflits de noms et de ce fait aide 
//à organiser le code

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
// le use (require) aide à importer les classes du framework Symfony dont on a besoin
//dans ce controller (ici on lui attribue la route)


final class HomeController extends AbstractController
    //Définit la classe HomeController, qui hérite des methodes et des propriétés de 
// Abstract controller (on importe les fonctions de Controller)
{
    #[Route('home')]
    //Specifie le chemin html (URL) ou la page sera affichée

    public function index()
    //definit la methode index qui est publique et retourne une reponse d'objet
    //la methode s'executera quand la racine URL sera accedee
    {
        // dd('Hello World');

        //    $fruits = ["apple", "banana", "cherry"];
        // render vient de AbstractController , on utilise la methode render
        //pour generer une r;
        // reponse html en rendant le template twig specifié (aller sur une view)
        // return $this ->render('home/index.html.twig',['fruits'=>$fruits]);
        $titre = 'Bienvenue';
        $description = 'Welcome sur mon site';

        $datas = [

            'title' => $titre,
            'desc' => $description

        ];

        return $this->render('home/index.html.twig', ["datas" => $datas]);
    }
}