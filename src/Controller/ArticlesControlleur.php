<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticlesControlleur extends AbstractController
{
    // Je crée une @Route qui mène a l'url /articles et je les nommes pour pouvoir les réutiliser plus tard.
    /**
     * @Route("/articles", name="articles")
     */

    public function article()
    {
        // je Crée une variable $articlesList qui contient plusieurs articles et je les implémentes par "isPublished" true ou False qui indique si l'articles est publié Ou non

        $articlesList= [
        1 => [
            "title" => "Le PHP c'est vraiment trop génial",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
            "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
            "isPublished" => false,
            "id" => 1
        ],
        2 => [
            "title" => "Le PHP c'est vraiment trop génial 2",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
            "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
            "isPublished" => true,
            "id" => 2
        ],
        3 => [
            "title" => "Le PHP c'est vraiment trop génial 3",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
            "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
            "isPublished" => true,
            "id" => 3
        ],
        4 => [
            "title" => "Le PHP c'est vraiment trop génial 4",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
            "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
            "isPublished" => false,
            "id" => 4
        ],
        5 => [
            "title" => "Le PHP c'est vraiment trop génial 5",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
            "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
            "isPublished" => true,
            "id" => 5
        ]
    ];
        // je fais le lien avec mon fichier Twig pour afficher les informations dans mon fichier twig
        // render permet a symfony de transformer le .twig en HTML et de l'envoyer au navigateur en tant que réponse.


        return $this->render("listArticles.html.twig", ['articlesList' => $articlesList]);
    }

//Je cree une route pour afficher qu'un seul article, qui sera selectionné avec le n° récuperé dans l'URl
// Je rajoute donc une wildCard {id} qui attend un parametre dans L'URL pour pouvoir afficher le bon article

    /**
     * @Route("/article_show/{id}", name="article_show")
     */
    // j'ouvre ma fonction article show en mettant id dans la parenthese pour que symfony recupere la valeur de la wildCard
    public function article_show($id)
    {
        $articles = [
            1 => [
                "title" => "Le PHP c'est vraiment trop génial",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => false,
                "id" => 1
            ],
            2 => [
                "title" => "Le PHP c'est vraiment trop génial 2",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 2
            ],
            3 => [
                "title" => "Le PHP c'est vraiment trop génial 3",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 3
            ],
            4 => [
                "title" => "Le PHP c'est vraiment trop génial 4",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => false,
                "id" => 4
            ],
            5 => [
                "title" => "Le PHP c'est vraiment trop génial 5",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 5
            ]
        ];

        // Je verifie que l'id demandé existe bien en utilisant une fonction PHP "array_key_exists" et si l'id n'existe pas, le navigateur renverra un message d'erreur.
        // Si l'id de l'article n'hexiste pas, le script s'arretera ici et n'ira pas executer la suite du code.
        //cette condition est a effectuer avant de stocker l'id dans la variable si jamais l'id existe.

        if (!array_key_exists($id, $articles)) {
            throw $this->createNotFoundException("Cet article n'hexiste pas");
        }
// je crée une nouvelle variable qui recupere l'article demande en fonction de L'id dans l'URL
        $article = $articles[$id];
// ce "render" sert a afficher en html en implémentant ma variable article créée precedement dans ma page article.html.twig.


        return $this->render("article.html.twig", ['article' => $article]);
    }

    /**
     * @Route("/", name="home")
     */

    public function home(){
        return $this->render('home.html.twig');
    }



}