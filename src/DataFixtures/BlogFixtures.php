<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BlogFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Création des catégories
        $category = new Category();
        $category->setName( 'Actualités' );
        $manager->persist( $category );

        $category2 = new Category();
        $category2->setName('Ventes');
        $manager->persist($category2);

        $manager->flush();

        // Création des articles
        $post = new Post();
        $post->setTitle( 'Fête du 15 août' )
                ->setContent( "<p>Youpi c'est la fête venez nombreux</p>" )
                ->setImage( 'http://placehold.it/350x150' )
                ->setCreationDate( new \DateTime() )
                ->setCategory( $category );
        $manager->persist( $post );

        $post2 = new Post();
        $post2->setTitle( 'Nous cherchons des bénévoles' )
                ->setContent( "<p>Venez svp</p>" )
                ->setImage( 'http://placehold.it/350x150' )
                ->setCreationDate( new \DateTime() )
                ->setCategory( $category );
        $manager->persist( $post2 );

        $post3 = new Post();
        $post3->setTitle( 'Vente fournitures scolaires' )
                 ->setContent( "<p>Pierre feuille ciseaux</p>" )
                 ->setImage( 'http://placehold.it/150x150' )
                 ->setCreationDate( new \DateTime() )
                 ->setCategory( $category2 );
        $manager->persist( $post3 );

        $manager->flush();
    }
}
