<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{

    /**
     * @Route("/blog/{id}", name="blog")
     */
    public function index( $id )
    {
        $category = $this->getDoctrine()->getRepository( Category::class )->find( $id );

        return $this->render( 'blog/index.html.twig',
            [
                'pagetitle' => $category->getName(),
                'category'  => $category,
            ] );
    }

    /**
     * @Route("/blog/post/{id}", name="blog.post")
     */
    public function post( $id )
    {
        $post = $this->getDoctrine()->getRepository( Post::class )->find( $id );

        return $this->render( 'blog/post.html.twig',
            [
                'pagetitle' => $post->getTitle(),
                'post'      => $post,
            ] );
    }
  
}


    