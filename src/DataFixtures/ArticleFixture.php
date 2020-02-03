<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixture extends BaseFixture
{
    public function loadData(ObjectManager $manager)
    {
        $this->createMany(Article::class, 50, function(Article $article){
            $article
                ->setTitle($this->faker->realText(30))
                ->setContent($this->faker->paragraph($this->faker->numberBetween(5, 10)))
                ->setAuthor($this->faker->name)
            ;

            if($this->faker->boolean(30)){
                $article->setIsDeleted(true);
            }
        });

        $manager->flush();
    }
}
