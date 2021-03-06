<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ArticleFixture extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $article1 = new Article();
        $article1-> setTitle("Le PHP c'est trop dur");
        $article1-> setPicture("ausecours.jpg");
        $article1-> setContent("lorem machin");
        $article1-> setCategory($this->getReference("cat-devweb"));
        $article1->addTag($this->getReference("tag-PHP"));
        $manager->persist($article1);

        $article2 = new Article();
        $article2->setTitle("Créer un site en PHP");
        $article2->setPicture("siteweb.jpg");
        $article2->setContent("Tuto pour créer un site en PHP...");
        $article2->setCategory($this->getReference("cat-devweb"));
        $article2->addTag($this->getReference("tag-PHP"));
        $article2->addTag($this->getReference("tag-CSS"));
        $article2->addTag($this->getReference("tag-HTML"));
        $article2->addTag($this->getReference("tag-MySql"));
        $manager->persist($article2);

        $article3 = new Article();
        $article3->setTitle("Tuto Photoshop");
        $article3->setPicture("photoshop.jpg");
        $article3->setContent("Ouvrir le logiciel Photoshop...");
        $article3->setCategory($this->getReference("cat-design"));
        $manager->persist($article3);

        $manager->flush();
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
            TagFixtures::class
        ];
    }
}
