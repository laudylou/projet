<?php

namespace projet1Bundle\Controller;
use projet1Bundle\Entity\Articles;
use projet1Bundle\Form\ArticlesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Form\FormTypeInterface;






class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@projet1/Default/index.html.twig');
    }

    public function articlesAction()
    {//je récupère le repository avec lequel je veux travailler  ici le repository article en passant par l’entity
        $repository = $this->getDoctrine()->getRepository(Articles::class);
        $articles = $repository->findAll();

        return $this->render('@projet1/Default/articles.html.twig', array(
            'articles' => $articles,

        ));
    }

    public function updateArticleAction()
    {


        //je récupère le repository avec lequel je veux travailler  ici le repository article
        // en passant par l’entity
        $repository = $this->getDoctrine()->getRepository(Articles::class);
        //permet de récupérer
        $entityManager = $this->getDoctrine()->getManager();
        $article = $repository->find(11);

        $article->setTitre('mon article modifié');
        $entityManager->flush();


        return new Response('article Modifié');


    }


    public function formArticlesAction(Request $request)
    {
        //je cree une nouvelle entité Articles
        $articles = new Articles();
        //je viens utiliser la representation abstraite de mon shema déclaratif
        //pour creer mon formulaire
        $form = $this->createForm(ArticlesType::class, $articles);
        //je crée une vue (html) depuis mon formulaire
        $formView = $form->createView();
        //je relie mon formulaire a la requete http
        $form->handleRequest($request);

        //je viens vérifier que mon formulaire a été envoyé et
        //contenues sont valides
        if ($form->isSubmitted() && $form->isValid()) {
            //je crée une variable $articles qui contient les données
            //envoyees dans formulaire
            $articles = $form->getData();

            //on récupère l'entity manager
            $entityManager = $this->getDoctrine()->getManager();
            //et on enregistre les données en bdd
            $entityManager->persist($articles);
            $entityManager->flush();

        }

        return $this->render('@projet1/Default/formarticles.html.twig',
            array(
                'formView' => $formView
            )
        );
    }

    public function article_oneAction($id)
    {
        $repository = $this->getDoctrine()->getRepository(Articles::class);
        $article_one = $repository->find($id);

        return $this->render('@projet1/Default/article_one.html.twig', array(
            'article_one' => $article_one
        ));
    }

    public function delete_articleAction($id)
    {


        //je récupère le repository avec lequel je veux travailler  ici le repository livre en passant par l’entity
        $repository = $this->getDoctrine()->getRepository(Articles::class);
        //permet de récupérer
        $entityManager = $this->getDoctrine()->getManager();
        $article = $repository->find($id);

        $entityManager->remove($article);
        $entityManager->flush();
        $this->addFlash(
            'notice',
            'Le livre a été supprimé!'
        );
        return $this->redirectToRoute('articles_homepage');
    }

    public function articleUpdateAction($id, request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Articles::class);
        $article = $repository->find($id);

        $form = $this->createForm(ArticlesType::class, $article);
        $formView = $form->createView();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($article);

            $entityManager->flush();
            $this->addFlash(
                'notice',
                'L article a été modifié!'
            );

            return $this->redirectToRoute('articles_homepage');
        }


        return $this->render('@projet1/Default/articleUpdate.html.twig',
            array(
                'formView' => $formView

            )
        );
    }

    public function decouverteAction()
    {


return $this->render('@projet1/Default/decouverte.html.twig');
}
}





