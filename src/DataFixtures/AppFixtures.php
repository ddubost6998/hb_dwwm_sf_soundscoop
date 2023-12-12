<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Artist;
use App\Entity\Category;
use App\Entity\Style;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Création d'une catégorie
        $category = new Category();
        $category->setName('Interviews');
        $manager->persist($category);

        // Création d'un style
        $style = new Style();
        $style->setName('Metal');
        $manager->persist($style);

        // Création d'un artiste
        $artist = new Artist();
        $artist->setName('Buy Jupiter');
        $artist->setCountry('France');
        $artist->setCreatedAt(new \DateTime());
        $artist->setStyle($style);
        $manager->persist($artist);

        // Création d'un utilisateur
        $user = new User();
        $user->setName('Lucas');
        $user->setEmail('lucas@gmail.com');
        $user->setPassword('password');
        $user->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);

        $user = new User();
        $user->setName('Damien');
        $user->setEmail('damien@gmail.com');
        $user->setPassword('password');
        $user->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);

        // Création d'un article
        $article = new Article();
        $article->setTitle('Studying');
        $article->setContent('trap being beginning electricity hunt pour community satisfied race might ill fight dawn drop doubt spread friendly fought swung dark part let became third');
        $article->setCreatedAt(new \DateTime());
        $article->setUrlPicture('http://we.bh/kupin');
        $article->setCategory($category);
        $article->setUser($user);
        $article->addArtist($artist);
        $manager->persist($article);

        $manager->flush();
    }
}
