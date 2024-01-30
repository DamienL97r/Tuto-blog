<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    const NB_ARTICLE = 5; 

    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create('fr_FR');

        for ($i = 0; $i < self::NB_ARTICLE ; $i++) {
            $article = new Article();

            $article
                    ->setTitre($faker->title);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
