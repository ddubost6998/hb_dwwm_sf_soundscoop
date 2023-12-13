<?php

use App\Entity\Article;
use App\Entity\Artist;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    private const NB_CATEGORIES = 15;
    private const NB_ARTICLES = 150;
    private const NB_ARTISTS = 30;

    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create();

        $categories = [];

        for ($i = 0; $i < self::NB_CATEGORIES; $i++) {
            $category = new Category();
            $category->setName($faker->word);
            $manager->persist($category);
            $categories[] = $category;
        }

        $artists = [];

        for ($i = 0; $i < self::NB_ARTISTS; $i++) {
            $artist = new Artist();
            $artist
                ->setName($faker->name)
                ->setCountry($faker->country)
                ->setCreatedAt($faker->dateTimeBetween('-5 years'));

            $manager->persist($artist);
            $artists[] = $artist;
        }

        for ($i = 0; $i < self::NB_ARTICLES; $i++) {
            $article = new Article();
            $article
                ->setTitle($faker->realTextBetween(3, 10))
                ->setContent($faker->realTextBetween(500, 1400))
                ->setCreatedAt($faker->dateTimeBetween('-2 years'))
                ->setCategory($faker->randomElement($categories));

            $article->addArtist($faker->randomElement($artists));

            $manager->persist($article);
        }

        $manager->flush();
    }
}
